<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manager;

class ManagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $managers = Manager::all();

        return view('backend.manager.index', compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.manager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate( $request, [
            'name' => 'required',
            'department' => 'required',
            'overall_plan' => 'required'
        ] );

        $datas = $request->except('_token');
        //dd($datas);

        Manager::create($datas);
        return redirect()->route('manager.index')->with('success', 'Данные добавлены');
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
        $manager = Manager::find($id);
        //dd($manager);
        return view('backend.manager.edit', compact('manager'));
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
        $this->validate($request, [
            'name' => 'required',
            'department' => 'required',
            'overall_plan' => 'required'
        ]);

        // $test = Manager::find($id)->update($request->all());
        //dd($test);
        Manager::find($id)->update($request->all());
        
        return redirect()->route('manager.index')->with('success', 'Данные обновлены');
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
        //dd($id);
        Manager::find($id)->delete();
        //dd('deleted');
        return redirect()->route('manager.index')->with('success', 'Данные удалены');
    }
}
