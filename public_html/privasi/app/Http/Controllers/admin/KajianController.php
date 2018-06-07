<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Kajian;
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

        $kajianAll = Kajian::orderBy('created_at', 'desc')->Paginate(10);
        $jumlah = $kajianAll->total();
        
        return view("admin.admin-kajian-semua", compact("kajianAll", "jumlah"));
    }
    
    public function kategori($kate)
    {
        
        //index
        $kajianAll = Kajian::where('kategori','=',$kate)->orderBy('created_at', 'desc')->Paginate(5);
        
        $jumlah = $kajianAll->total();
        
        return view("admin.admin-kajian-semua", compact("kajianAll", "jumlah"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-kajian-add');
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

            $image->move('foto', $filename);

        }

        Kajian::insert(
            ['judul' => $request->judul, 'gambar' => $filename, 'audio' => $request->audio, 'video' => $request->video, 'ajakan' => $request->ajakan, 'isi' => $request->isi, 'kategori' => $request->kategori,
            ]
        );

        return Redirect::to('/admin-kajian-add')->with('message','berhasil menambahkan data');
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
        $kajianShow = Kajian::where('id_kajian','=',$id)->get();
        
        return view("admin.admin-kajian-view", compact("kajianShow"));
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
        return view('admin.admin-kajian-edit', compact("kajian")); 
    }

    public function update(Request $request, $id)
    {
        //
        $kajianEdit = array(
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'audio' => $request->audio,
            'video' => $request->video,
            'ajakan' => $request->ajakan,
            'isi' => $request->isi,
            'kategori' => $request->kategori
        );

        Kajian::where('id_kajian','=',$id)->update(
            $kajianEdit
        );

        return Redirect::to('/admin-kajian-all')->with('message','berhasil memanipulasi data'); 
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
        Kajian::where('id_kajian','=',$id)->delete();

        return redirect('/admin-kajian-all')->with('destroy','berhasil menghapus data');
    }
}
