<?php

namespace App\Http\Controllers;

use DB;

class Test extends Controller
{
    function index()
    {        
        $data = DB::table("emps")->select('e_id')->get();
        echo "<pre>";
        print_r($data);
    }
}
