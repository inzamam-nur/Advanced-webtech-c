<?php

namespace App\Http\Controllers;

use App\Models\tutor_info;
use App\Http\Requests\Storetutor_infoRequest;
use App\Http\Requests\Updatetutor_infoRequest;

class TutorInfoController extends Controller
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
     * @param  \App\Http\Requests\Storetutor_infoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetutor_infoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tutor_info  $tutor_info
     * @return \Illuminate\Http\Response
     */
    public function show(tutor_info $tutor_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tutor_info  $tutor_info
     * @return \Illuminate\Http\Response
     */
    public function edit(tutor_info $tutor_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetutor_infoRequest  $request
     * @param  \App\Models\tutor_info  $tutor_info
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetutor_infoRequest $request, tutor_info $tutor_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tutor_info  $tutor_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(tutor_info $tutor_info)
    {
        //
    }
    public function additional_infosubmitted(Request $request){

   
        $tutor_info = new Tutor_info();
        $tutor_info->firstname= $request->firstname;
        $tutor_info->lastname= $request->lastname;
        $tutor_info->email = $request->email;
        $tutor_info->gender = $request->gender;
        $tutor_info->tutoringarea = $request->tutoringarea;
        $tutor_info->location = $request->location;
        $tutor_info->availabletime = $request->availabletime;
        $tutor_info->qualification = $request->qualification;
        $tutor_info->tutoringtype = $request->tutoringtype;
        $tutor_info->classesapplied = $request->classesapplied;



        $tutor_info->save();
        return redirect()->route('tutor_regi');
    
        
    }
}
