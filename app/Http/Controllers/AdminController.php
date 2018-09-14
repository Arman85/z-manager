<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manager;
use App\Sale;
use Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->name == 'admin')
        {
            // $managers = Manager::all();
            $managers = Manager::with('sales')->get();
            // $sales = Sale::all();
            //  $datas = [
            //      'managers' => $managers,
            //      'sales' => $sales
            //  ];
            //dd($managers);
            //$manager = Manager::where('id', 7)->first();
            //dd($manager->sales->sum('id'));
            // foreach($managers as $manager)
            // {
            //  foreach($manager->sales as $sale)
            //  {
            //      echo $sale->summa . '</br>';
            //  }
            // }
            //dd($managers);
            return view('backend.index', compact('managers'));
        }
        else
        {
            return redirect()->route('login');
        }    
    }
}
