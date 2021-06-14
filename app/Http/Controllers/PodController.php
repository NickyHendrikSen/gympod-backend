<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PodController extends Controller
{
    function getPods(){
        $pods = DB::table("pods")->get();

        return response()->json($pods,200);
    }
}
