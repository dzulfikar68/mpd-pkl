<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Galeri;
use Response;
use Validator;
use Input;
use Redirect;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index

        $galeriAll = Galeri::orderBy('created_at', 'desc')->Paginate(10);
        $jumlah = $galeriAll->total();
        
        return view("admin.admin-galeri-all", compact("galeriAll", "jumlah"));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-galeri-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validasitambah $request)
    {
        //
        $image = $request->file('gambar');
        $filename = "";
        if($image != null) {
            $arrayName = explode('.', $image->getClientOriginalName());

            $extension = "";
            foreach ($arrayName as $i => $name) {
                if ($i != (count($arrayName) - 1))
                    $filename .= $name;
                else
                    $extension = $name;
            }
            $filename = str_slug($filename) . "." . $extension;

            $image->move('galeri', $filename);

        }

        Galeri::insert(
            ['judul' => $request->judul, 'gambar' => $filename
            ]
        );

        return Redirect::to('/admin-galeri-all')->with('message','berhasil menambahkan data');
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
        $galeriShow = Galeri::where('id_galeri','=',$id)->get();
        
        return view("admin.admin-galeri-view", compact("galeriShow"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Kajian $kajian)
    {
        //
         
    }

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
        Galeri::where('id_galeri','=',$id)->delete();

        return redirect('/admin-galeri-all')->with('destroy','berhasil menghapus data');
    }
}
