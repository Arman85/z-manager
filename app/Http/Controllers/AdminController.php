<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manager;
use App\Sale;

class AdminController extends Controller
{
    //
    public function index()
    {
    	// $managers = Manager::all();
    	$managers = Manager::with('sales')->get();
    	// $sales = Sale::all();
    	// 	$datas = [
    	// 		'managers' => $managers,
    	// 		'sales' => $sales
    	// 	];
    	//dd($managers);
    	//$manager = Manager::where('id', 7)->first();
    	//dd($manager->sales->sum('id'));
    	// foreach($managers as $manager)
    	// {
    	// 	foreach($manager->sales as $sale)
    	// 	{
    	// 		echo $sale->summa . '</br>';
    	// 	}
    	// }
    	//dd($managers);
    	return view('backend.index', compact('managers'));
    }
}
