<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Donasi;
use App\Models\Excel;
use Response;
use Validator;
use Input;
use Redirect;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index

        $donasiAll = Donasi::orderBy('tanggal', 'desc')->Paginate(12);
        
        return view("admin.admin-donasi-all", compact("donasiAll"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $excel = Excel::orderBy('id_excel', 'desc')->Paginate(1);

        return view("admin.admin-donasi-addx", compact("excel"));
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

        Donasi::insert(
            ['tanggal' => $request->tanggal, 'saldo' => $request->saldo, 'masuk' => $request->masuk, 'keluar' => $request->keluar
            ]
        );

        return Redirect::to('/admin-donasi-adds')->with('message','berhasil menambahkan data');
    }

    public function excel(Request $request)
    {
        //

        DB::table('excel')->delete();

        Excel::insert(
            ['link' => $request->link
            ]
        );

        return Redirect::to('/admin-donasi-addx')->with('message','berhasil menambahkan data');
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
        Donasi::where('id_donasi','=',$id)->delete();

        return redirect('/admin-donasi-all')->with('destroy','berhasil menghapus data');
    }
}
