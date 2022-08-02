<?php

namespace App\Http\Controllers;
use App\Models\seejob;


use Illuminate\Http\Request;

class seejobscontrollerapi extends Controller
{
    public function jobList(){
        $seejobs = Seejob::all();
        return  $seejobs;
    }
}
