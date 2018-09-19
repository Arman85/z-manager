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
        
        $managers = Manager::with(['sales' => function($query) {
            $query->where('month', Carbon::now()->format('m'));
        }])->get();

        //printf("Right now in Shymkent is %s", Carbon::now('Asia/Almaty'));  //implicit __toString()
        $currentDate = Carbon::now('Asia/Almaty')->format('d-m-Y H:i');
        $saleDate = Sale::where('created_at', '<', Carbon::now())->get();

        // $test = Carbon::now('Asia/Almaty')->format('d');
        // echo Carbon::diffInDays()->$test;
        
        // Получаю общую сумму общего плана
        $total_overall = Manager::overall_plan();
        // Получаю общую сумму по факту выполненного плана
        $total_current_summ = Sale::getTotalSumm();
        
        //dd(Sale::getTotalSumm());
    	
    	return view('frontend.index', compact('datas', 'managers', 'currentDate', 'total_overall', 'total_current_summ', 'saleDate'));
    }
}
