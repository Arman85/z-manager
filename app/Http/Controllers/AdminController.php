<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manager;
use App\Sale;
use Auth;
use Carbon\Carbon;

class AdminController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->name == 'admin')
        {
            
            $managers = Manager::with(['sales' => function ($query) {
                $query->where('month', Carbon::now()->format('m'));
            }])->get();
            
            return view('backend.index', compact('managers'));
        }
        else
        {
            return redirect()->route('login');
        }    
    }
}
