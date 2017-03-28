<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Kajian;

use DB;
use Response;
use Validator;
use Input;
use Redirect;

class KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        
        $kajianAll = Kajian::orderBy('created_at', 'desc')->Paginate(5);
        
        $jumlah = $kajianAll->total();
        
        return view("kajian", compact("kajianAll", "jumlah"));
    }
    
    public function kategori($kate)
    {
        
        //index
        $kajianAll = Kajian::where('kategori','=',$kate)->orderBy('created_at', 'desc')->Paginate(5);
        
        $jumlah = $kajianAll->total();
        
        return view("kajian", compact("kajianAll", "jumlah"));
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
        $kajianKait = Kajian::where('kategori','=',$kait)->orderBy('created_at', 'desc')->Paginate(9);
        
        $kajianShow = Kajian::where('id_kajian','=',$id)->get();
        
        return view("post-kajian", compact("kajianKait", "kajianShow"));
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
        $kajianAll = Kajian::where('judul', 'LIKE', '%'.$kunci.'%')->orderBy('created_at', 'desc')->paginate(5);
        $pagination = $kajianAll->appends($request->except('page'));
        $jumlah = $kajianAll->total();
        return view('kajian', compact('kajianAll', 'jumlah'));
    }
}
