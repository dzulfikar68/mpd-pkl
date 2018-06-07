<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use Response;
use Validator;
use Input;
use Redirect;

class LoginController extends Controller {
    
    // public function tambahlogin(Request $request)
    // {
    //     //index
    //     $data = array(
    //             'username'=>$request->username,
    //             'password'=>bcrypt($request->password),
    //             'hak_akses'=>'admin'
    //         );
        
    //     DB::table('login')->insert($data);
    //     return Redirect::to('/log')->with('message','berhasil Mendaftar');
    // }

    public function login(Request $request)
    {
        //index
        if (Auth::attempt(['username'=>$request->username, 'password'=>$request->password])) {

            if(Auth::user()->hak_akses=="admin") {
                Auth::user()->hak_akses=="admin";
                return Redirect::to('admin')->with('message','login telah berhasil');;
            }
            else{
                return Redirect::to('log')->with('message','gagal login, akun tidak terdaftar');
            }
        }
        else{
            return Redirect::to('log')->with('message','username dan password tidak valid'); 
        }

    }

    public function logout()
    {
        //index
        Auth::logout();
        return Redirect::to('log')->with('message', 'Logout telah berhasil');

    }

}