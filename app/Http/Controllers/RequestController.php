<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class RequestController extends Controller
{
    public function index()
    {
        return view('request');

    }
    public function show(Request $request)
    {
        $details = [
            'name' => $request->input('name'),
            'reason' => $request->input('reason'),
            'email' => $request->input('email'),
        ];
        Mail::to($request->input('email'))->send(new SendEmail($details));

        return redirect()->back()->with('message', 'Email sent successfully!');
    }
}
