<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){
        return view('home');
    }
    public function product(){
        $names=array("Bags","Shoes","Camera");
        return view('product')->with('names',$names);
    }

    public function ourteams(){
        return view('ourteams');
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
    public function loginSection(){
        return view('loginSection');
    }

    public function loginSectionInput(Request $request){
        $validate = $request->validate([
               'StudentName' => 'required',
               'StudentId' => 'required'
        ]);
        $StudentName = $request->input('StudentName');
        $StudentId = $request->input('StudentId');

        if($StudentName === "Rahman" && $StudentId === "12345"){
           return view('home');
        }
        else{
           return 
           
           "WRONG Student Name / Student Id <br>
            Invalid Student Name/ Student Id";
                          
        }
        
   }  

   public function registrationSection(){
    return view('registration');
}

public function registrationSubmit(Request $request){
    $validate = $request->validate([
        'StudentName' => 'required|min:4|max:18',
        'StudentId' => 'required|min:4|max:11',
        'dob' => 'required',
        'phone' => 'required|min:11',
        'email' => 'email',
        'password' => 'required|min:6|max:12'
    ],
    [
        'StudentName.required'=>'Please Enter Your Name',
        'StudentId.required'=>'Please Enter Your ID',
        'dob.required'=>'Enter Your Date of birth',
        'phone.required'=>'Enter Your Phone Number',
        'email.required'=>'Enter Your Email',
        'password.required'=>'Enter Your Password'
        
    ]
);
    return"Registration Complete Successfully";
}


}
