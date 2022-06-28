<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use DB;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function Register()
    {
    	
    	
    	return view('user.register');
    }
    public function Storing(Request $request){
        
        $user_registration = new User();
        
        $user_registration->Name =$request->NameForm; 
        $user_registration->PhoneNumber =$request->PhoneNumberForm;
        $user_registration->Gender =$request->GenderForm; 
        $user_registration->City =$request->CityForm;
        $user_registration->BithDate =$request->BirthDateForm;
        $user_registration->Email =$request->EmailForm; 
        $user_registration->Password =$request->PasswordForm;
        $user_registration->Category ='2';
        //CATEGORY 2 ==> user
        //CATEGORY 1 ==> admin (implemented manually)
       
        $user_registration->save();

        session::flash('success','Succès');
        return redirect()->route('login_index');
    }

     public function cart()
    {
        
        
        return view('Cart.show');
    }
     public function product()
    {
        
        
        return view('product.view');
    }
}
