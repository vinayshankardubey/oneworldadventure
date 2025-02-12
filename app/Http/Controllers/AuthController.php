<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 

class AuthController extends Controller
{
    public function login(){
        $data['title']='Trip Login Panel';
        return view('admin.login',$data);

    }
    public function admin_login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', 
            'password' => 'required|min:6', 
        ]); 

       
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $email=$request->email;
        $pass=$request->password;
          $resp=DB::table('admin_login')->where(['user_id'=>$email,'password'=>$pass]);
          if($resp->exists()){
            session()->put('admin_login_id', $resp->first()->user_id);
            return response()->json([ 
                'error' => false,
                'message' => 'Login Successfully',
            ]);

          }else{ 
            return response()->json([
                'errors' => ['error' => ['Invalid credentials. Please try again.']]
            ], 422);
          }

       
         
    }
    
}
