<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGovernorateRequest;
use App\Models\Governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Governorate::all();
        return view('governorate.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('governorate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGovernorateRequest $request)
    {
        Governorate::create([
            "name"=>$request->name,
        ]);

        return redirect()->route('governorate.index');
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
        $governorate = Governorate::findorFail($id);
        return view('governorate.edit', compact('governorate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGovernorateRequest $request, $id)
    {

        $models = Governorate::findorFail($id);

        $models->update([
            "name"=>$request->name,

        ]);

        return redirect()->route('governorate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Governorate::destroy($id);
        return redirect()->route('governorate.index');
    }
}
