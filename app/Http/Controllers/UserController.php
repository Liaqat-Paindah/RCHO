<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Order;
use App\Models\Review;




class UserController extends Controller
{

 public function users()
 {
         $users=User::get();
         return view('users', compact('users'));
         }
         public function Orders()
         {

         $totalReviews = Review::count(); // Get total number of reviews
         $totalOrders = Order::count(); // Get total number of orders
         $averageReviewsPerOrder = $totalOrders > 0 ? $totalReviews / $totalOrders : 0; //s Avoid division by zero
         
         $vipUserId = 1; // Replace with the actual VIP user ID
         $vipUser = User::with(['orders.reviews'])->find($vipUserId);         
         if ($vipUser) {
             $totalReviews = 0;
             $totalOrders = $vipUser->orders->count();
         
             foreach ($vipUser->orders as $order) {
                 $totalReviews += $order->reviews->count();
             }
         
             $averageReviewsPerOrder = $totalOrders > 0 ? $totalReviews / $totalOrders : 0;
         
             // Assuming you want to display or return this value
         }


         if ($vipUser > 10 && $averageReviewsPerOrder >= 4.5) {
            // Proceed with the calculation as shown above
            // ...
        } else {
            // Handle the case where the user does not have exactly 10 orders
        }
        
         return view('orders', compact('totalReviews', 'averageReviewsPerOrder'));

      }        
 
}
