<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Pesan;
use Response;
use Validator;
use Input;
use Redirect;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index

        $pesanAll = Pesan::orderBy('created_at', 'desc')->Paginate(10);

        $jumlah = $pesanAll->total();
        
        return view("admin.admin-pesan-all", compact("pesanAll", "jumlah"));
    }

    public function show($id)
    {
        //
        $pesanShow = Pesan::where('id_pesan','=',$id)->get();
        
        return view("admin.admin-pesan-reply", compact("pesanShow"));
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
        Pesan::where('id_pesan','=',$id)->delete();

        return redirect('/admin-pesan-all')->with('destroy','berhasil menghapus data');
    }

    public function delete()
    {
        //

        DB::table('pesan')->delete(); 

        return redirect('/admin-pesan-all')->with('destroy','berhasil menghapus semua data');
    }
}
