<?php

namespace App\Http\Controllers;
use App\Models\Tutor;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function Login(){
        return view('tutor.login');
    }
    public function loginSubmit(Request $request){

        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
      
    ]);
        $tutor = Tutor::where('name',$request->name)
                            ->where('password',$request->password)
                            ->first();


        if($tutor){
            $request->session()->put('user',$tutor->name);
            if ($request->remember) {
                setcookie('remember',$request->name, time()+36000);
            }else{
                setcookie('remember',"");
            }
            return redirect()->route('tutordash');
        }
        return back();
    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
