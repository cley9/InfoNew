<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    function loginGoogle(){
        return "hi";
    }

    // admin
    function loginAdminRouter(){
        
        return view("admin.loginAdmin   ");

    }
    function loginAdmin($email,$password){
        // function loginAdmin(Request, request){
        // return $request->all();
        $credencial=[
                "email"=> $email,
                "password"=> $password
        ];
        $validate=User::where("email",$email)->where('rol', '4')->exists();
        // return $validate;
        session(['card' => 'hola']);
        if (Auth::attempt($credencial) && $validate ) {
        //     # code...
        session(['email'=> $email]);
        session(['rol'=> '4']);
        $var= 12;
        // // }
        // // return $email;
            return response()->json([ "status"=>200,"code"=>"ok"]);
        // // return view("admin.loginAdmin   ");
        }else{
            return response()->json([ "status"=>300,"code"=>"error"]);
        }
    }
}
