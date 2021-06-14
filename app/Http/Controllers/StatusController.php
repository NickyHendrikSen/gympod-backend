<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    function getStatus(){
        $status = DB::table("status")->get();

        return response()->json($status,200);
    }
}
