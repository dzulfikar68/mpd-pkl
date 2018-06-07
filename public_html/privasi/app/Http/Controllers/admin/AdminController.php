<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Kajian;
use App\Models\Pesan;
use App\Models\Donasi;
use Response;
use Validator;
use Input;
use Redirect;

class AdminController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $kajianAll = Kajian::count();
        $tauhid = Kajian::where('kategori','=','Tauhid')->count();
        $fiqih = Kajian::where('kategori','=','Fiqih')->count();
        $akhlak = Kajian::where('kategori','=','Akhlak')->count();
        $tafsir = Kajian::where('kategori','=','Tafsir')->count();
        $sirah = Kajian::where('kategori','=','Sirah')->count();
        $tematik = Kajian::where('kategori','=','Tematik')->count();

        $pesanAll = Pesan::count();
        $pesan = Pesan::orderBy('created_at', 'desc')->Paginate(6);

        $donasi = Donasi::orderBy('tanggal', 'desc')->Paginate(5);
        $saldo = Donasi::all()->last();

        return view("admin.index", compact("kajianAll", "pesanAll", "pesan", "saldo", "donasi"));

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