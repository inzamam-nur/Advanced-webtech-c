<?php

namespace App\Http\Controllers;
use App\Models\tutor;


use Illuminate\Http\Request;

class trutorcontrollerapi extends Controller
{
    public function tutorsubmitted(Request $request){

    
        $tutor = new Tutor();
        $tutor->name= $request->name;
        $tutor->email= $request->email;
        $tutor->password = $request->password;
        $tutor->phone = $request->phone;
        $tutor->address = $request->address;
        $tutor->save();
        return response()->json('insert succesfully');

        
    }
}
