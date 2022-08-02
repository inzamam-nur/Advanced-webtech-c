<?php

namespace App\Http\Controllers;

use App\Models\tutor;
use App\Http\Requests\StoretutorRequest;
use App\Http\Requests\UpdatetutorRequest;
use Illuminate\Http\Request;


class TutorController extends Controller
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
     * @param  \App\Http\Requests\StoretutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretutorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(tutor $tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetutorRequest  $request
     * @param  \App\Models\tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetutorRequest $request, tutor $tutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(tutor $tutor)
    {
        //
    }
    public function tutor_regi(){
        return view('tutor.tutor_regi');
    }
 
    public function tutorsubmitted(Request $request){

        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'password' => [
                'required',
                'string',
                'min:8',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/',
            ],
            'address'=> 'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
          
        ['name.required'=>"Please put you name here"]
    ]);
        $tutor = new Tutor();
        $tutor->name= $request->name;
        $tutor->email= $request->email;
        $tutor->password = $request->password;
        $tutor->phone = $request->phone;
        $tutor->address = $request->address;
        $tutor->save();
        return redirect()->route('tutor_regi');

        
    }

    public Function profile(){
        $tutor = tutor::all()->first();
        return view('tutor.profile')->with('tutor',$tutor);
    }

    public Function tutorEdit(Request $request){
        $tutor = tutor::where('id', $request->id)->first();
        return view('tutor.tutorEdit')->with('tutor',$tutor);
    }

    public Function tutorEditSubmitted(Request $request){
        $tutor = tutor::where('id', $request->id)->first();
        $tutor->name = $request->name;
        $tutor->email = $request->email;
        $tutor->password = $request->password;
        $tutor->phone = $request->phone;
        $tutor->address = $request->address;
        $tutor->save();
        return view('tutor.tutorEdit')->with('tutor',$tutor);
    }
    public function tutordash(){
        return view('tutor/tutordash');
    }
}
