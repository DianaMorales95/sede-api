<?php

namespace App\Http\Controllers;

use App\Models\StepOne;
use Illuminate\Http\Request;

class StepOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stepOne = StepOne::all();
        return $stepOne;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stepOne = StepOne::create($request->all());
        return $stepOne;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StepOne  $stepOne
     * @return \Illuminate\Http\Response
     */
    public function show(StepOne $stepOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StepOne  $stepOne
     * @return \Illuminate\Http\Response
     */
    public function edit(StepOne $stepOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StepOne  $stepOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StepOne $stepOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StepOne  $stepOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(StepOne $stepOne)
    {
        //
    }
}
