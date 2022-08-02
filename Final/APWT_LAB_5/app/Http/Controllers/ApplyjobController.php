<?php

namespace App\Http\Controllers;

use App\Models\applyjob;
use App\Http\Requests\StoreapplyjobRequest;
use App\Http\Requests\UpdateapplyjobRequest;

class ApplyjobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreapplyjobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreapplyjobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\applyjob  $applyjob
     * @return \Illuminate\Http\Response
     */
    public function show(applyjob $applyjob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\applyjob  $applyjob
     * @return \Illuminate\Http\Response
     */
    public function edit(applyjob $applyjob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateapplyjobRequest  $request
     * @param  \App\Models\applyjob  $applyjob
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateapplyjobRequest $request, applyjob $applyjob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\applyjob  $applyjob
     * @return \Illuminate\Http\Response
     */
    public function destroy(applyjob $applyjob)
    {
        //
    }
    public function applyjobs(){
        return view('jobs/applyjobs');
    }
}
