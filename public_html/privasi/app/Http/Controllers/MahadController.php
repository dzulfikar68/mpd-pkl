<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mahad;

use DB;
use Response;
use Validator;
use Input;
use Redirect;

class MahadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        
        $mahadAll = Mahad::orderBy('created_at', 'desc')->Paginate(5);
        
        $jumlah = $mahadAll->total();
        
        return view("mahad", compact("mahadAll", "jumlah"));
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
    public function show($id)
    {
        //
        $mahadKait = Mahad::orderBy('created_at', 'desc')->Paginate(9);
        
        $mahadShow = Mahad::where('id_mahad','=',$id)->get();
        
        return view("post-mahad", compact("mahadKait", "mahadShow"));
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
        $mahadAll = Mahad::where('judul', 'LIKE', '%'.$kunci.'%')->orderBy('created_at', 'desc')->paginate(5);
        $pagination = $mahadAll->appends($request->except('page'));
        $jumlah = $mahadAll->total();
        return view('mahad', compact('mahadAll', 'jumlah'));
    }
}
