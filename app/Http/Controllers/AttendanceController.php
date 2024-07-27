<?php


namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Moels\Attendance;



class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = DB::table('Attendance')
        ->leftJoin('Employees', 'Employees.id', '=', 'Attendance.employee_id')
        ->select('Employees.*', 'Attendance.date', 'Attendance.status')
        ->orderBy('Employees.id')
        ->get();
    
    $groupedAttendances = $attendances->groupBy('id')->map(function ($items) {
        $employee = $items->first();
        $attendanceRecords = $items->map(function ($item) {
            return [
                'date' => $item->date,
                'status' => $item->status,
            ];
        });
        return [
            'employee' => $employee,
            'attendances' => $attendanceRecords,
        ];
    });
    
    return view('admin.attendance_admin', ['groupedAttendances' => $groupedAttendances]);
    
    }
}
