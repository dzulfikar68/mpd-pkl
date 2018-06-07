<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Berita;

use DB;
use Response;
use Validator;
use Input;
use Redirect;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        
        $beritaAll = Berita::orderBy('created_at', 'desc')->Paginate(5);
        
        $jumlah = $beritaAll->total();

        $beritaKunci = Berita::orderBy(DB::raw('RAND()'))->take(50)->get();
        
        return view("berita", compact("beritaAll", "jumlah", "beritaKunci"));
    }
    
    public function katakunci($kunci)
    {
        
        //index
        $beritaAll = Berita::where('kunci','=',$kunci)->orderBy('created_at', 'desc')->Paginate(5);
        
        $jumlah = $beritaAll->total();
        
        $beritaKunci = Berita::orderBy(DB::raw('RAND()'))->take(50)->get();

        return view("berita", compact("beritaAll", "jumlah", "beritaKunci"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kait, $id)
    {
        //
        $beritaKait = Berita::where('kunci','=',$kait)->orderBy('created_at', 'desc')->Paginate(9);
        
        $beritaShow = Berita::where('id_berita','=',$id)->get();

        $beritaKunci = Berita::orderBy(DB::raw('RAND()'))->take(18)->get();
        
        return view("post-berita", compact("beritaKait", "beritaShow", "beritaKunci"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function cari(Request $request)
    {
        //
        $kunci = $request->input('cari');
        $beritaAll = Berita::where('judul', 'LIKE', '%'.$kunci.'%')->orderBy('created_at', 'desc')->paginate(5);
        $pagination = $beritaAll->appends($request->except('page'));
        $jumlah = $beritaAll->total();
        $beritaKunci = Berita::orderBy(DB::raw('RAND()'))->take(18)->get();
        return view('berita', compact('beritaAll', 'jumlah', 'beritaKunci'));
    }
}
