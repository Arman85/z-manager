<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data;
use App\Manager;
use App\Sale;

use Carbon\Carbon;

class SiteController extends Controller
{
    //
    public function index()
    {
    	// $test = Data::getFormula();
    	//dd($test);
    	$datas = Data::all();
        $managers = Manager::with('sales')->get();
        //$managers = Manager::with('sales')->get();
        // foreach($managers as $manager)
        // {
        //     foreach($manager->sales as $m)
        //     {
        //         echo $m->name . '</br>';
        //     }
        // }
        //dd($managers);
        //printf("Right now in Shymkent is %s", Carbon::now('Asia/Almaty'));  //implicit __toString()
        $currentDate = Carbon::now('Asia/Almaty')->format('d-m-Y H:i');
        // $test = Carbon::now('Asia/Almaty')->format('d');
        // echo Carbon::diffInDays()->$test;
    	
    	return view('frontend.index', compact('datas', 'managers', 'currentDate'));
    }
}
