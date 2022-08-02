<?php

namespace App\Http\Controllers;

use App\Models\seejob;
use App\Http\Requests\StoreseejobRequest;
use App\Http\Requests\UpdateseejobRequest;

class SeejobController extends Controller
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
     * @param  \App\Http\Requests\StoreseejobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreseejobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seejob  $seejob
     * @return \Illuminate\Http\Response
     */
    public function show(seejob $seejob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seejob  $seejob
     * @return \Illuminate\Http\Response
     */
    public function edit(seejob $seejob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateseejobRequest  $request
     * @param  \App\Models\seejob  $seejob
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateseejobRequest $request, seejob $seejob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seejob  $seejob
     * @return \Illuminate\Http\Response
     */
    public function destroy(seejob $seejob)
    {
        
    }
    public function jobList(){
        $seejobs = Seejob::all();
        return view('jobs/joblist')->with('seejobs', $seejobs);
    }
    public Function jobprofile(){
        $seejob = seejob::all()->first();
        return view('jobs.jobprofile')->with('seejob',$seejob);
    }
}
