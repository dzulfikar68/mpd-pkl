<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Unduhan;
use Response;
use Validator;
use Input;
use Redirect;

class UnduhanController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $unduhan = Unduhan::orderBy('id_unduhan', 'desc')->Paginate(1);
        return view("unduhan", compact("unduhan"));

        // if(Auth::user()){       
        //     if(Auth::user()->hak_akses=="admin"){        
                
        //         $kajianAll = Kajian::count();
        
        //         return view("admin.index", compact("kajianAll"));

        //     }else{   
        //         return Redirect::to('');     
        //     }     
        // }     
        // else{       
        //     return Redirect::to('');
        // }

    }

}