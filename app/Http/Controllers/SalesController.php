<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sale;
use App\Manager;
use Carbon\Carbon;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sales = Sale::all();
        return view('backend.sale.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $managers = Manager::pluck('name', 'id');
        //dd($managers);
        return view('backend.sale.create', compact('managers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate( $request, [
            'name' => 'required',
            'manager_id' => 'required'
        ] );

        $data = $request->except('_token');
        //dd($data);
        $datas = Sale::where('created_at', '!', null);
        $datas->created_at = Carbon::now();
        //dd($datas->created_at->month);
        Sale::create($data, $datas);
        return redirect()->route('sales.index')->with('success', 'Данные добавлены');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sale = Sale::find($id);
        $managers = Manager::pluck('name', 'id');

        return view('backend.sale.edit', compact('sale', 'managers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate( $request, [
            'name' => 'required',
            'manager_id' => 'required'
        ]);

        Sale::find($id)->update($request->all());

        return redirect()->route('sales.index')->with('success', 'Данные обновлены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Sale::find($id)->delete();
        return redirect()->route('sales.index')->with('success', 'Данные удалены');
    }
}
