<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Khotbah;
use App\Models\Berita;
use Response;
use Validator;
use Input;
use Redirect;

class KhotbahController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $khotbah = Khotbah::orderBy('id_khotbah', 'desc')->Paginate(1);
        $beritaKunci = Berita::orderBy(DB::raw('RAND()'))->take(25)->get();
        return view("khotbah", compact("khotbah", "beritaKunci"));

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