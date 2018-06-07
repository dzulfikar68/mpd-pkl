<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Khotbah;
use App\Models\Kajian;
use App\Models\Mahad;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Donasi;

use DB;
use Response;
use Validator;
use Input;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $khotbah = Khotbah::all()->last();
        $kajian = Kajian::orderBy('created_at', 'desc')->Paginate(1);
        $mahad = Mahad::orderBy('created_at', 'desc')->Paginate(1);
        $berita = Berita::orderBy('created_at', 'desc')->Paginate(3);
        $galeri = Galeri::orderBy(DB::raw('RAND()'))->take(3)->get();
        $don = Donasi::orderBy('tanggal', 'desc')->get();
        $donasi = $don->first();
        $donasiAll = Donasi::orderBy('tanggal', 'desc')->Paginate(4);

        return view("index", compact("khotbah", "kajian", "mahad", "berita", "galeri", "donasiAll", "donasi"));
    }

}
