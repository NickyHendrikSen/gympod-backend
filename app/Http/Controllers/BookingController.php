<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    function getBookings(){
        $bookings = DB::table("booking_transactions")
        ->join("pods", "booking_transactions.pod_id", "=", "pods.id")
        ->join("users", "booking_transactions.user_id", "=", "users.id")
        ->join("status", "booking_transactions.status_id", "=", "status.id")
        ->select("booking_transactions.id as id", "pod_name", "user_name", "phone", "status_name as status", "price", "booking_start", "booking_end")
        ->paginate(5);

        return response()->json($bookings,200);
    }
}
