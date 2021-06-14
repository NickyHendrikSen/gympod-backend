<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    function getBookings(Request $request){
        $status_id = $request->status_id;
        $pod_id = $request->pod_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $bookings = DB::table("booking_transactions")
        ->join("pods", "booking_transactions.pod_id", "=", "pods.id")
        ->join("users", "booking_transactions.user_id", "=", "users.id")
        ->join("status", "booking_transactions.status_id", "=", "status.id");

        if($status_id != null){
            $bookings = $bookings->where("status_id", $status_id);
        }
        if($pod_id != null){
            $bookings = $bookings->where("pod_id", $pod_id);
        }
        if($start_date != null){
            $bookings = $bookings->whereDate("booking_start", ">=" ,$start_date);
        }
        if($end_date != null){
            $bookings = $bookings->whereDate("booking_start", "<=" ,$end_date);
        }
        

        $bookings = $bookings->select("booking_transactions.id as id", "pod_name", "user_name", "phone", "status_name as status", "price", "booking_start", "booking_end")
        ->paginate(10);

        return response()->json($bookings,200);
    }
}
