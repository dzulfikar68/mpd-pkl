<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Mahad;
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

        $mahadAll = Mahad::orderBy('created_at', 'desc')->Paginate(10);
        $jumlah = $mahadAll->total();
        
        return view("admin.admin-mahad-semua", compact("mahadAll", "jumlah"));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-mahad-add');
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

        Mahad::insert(
            ['judul' => $request->judul, 'gambar' => $filename, 'audio' => $request->audio, 'video' => $request->video, 'ajakan' => $request->ajakan, 'isi' => $request->isi,
            ]
        );

        return Redirect::to('/admin-mahad-add')->with('message','berhasil menambahkan data');
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
        $mahadShow = Mahad::where('id_mahad','=',$id)->get();
        
        return view("admin.admin-mahad-view", compact("mahadShow"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Mahad $mahad)
    {
        //
        return view('admin.admin-mahad-edit', compact("mahad")); 
    }

    public function update(Request $request, $id)
    {
        //
        $mahadEdit = array(
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'audio' => $request->audio,
            'video' => $request->video,
            'ajakan' => $request->ajakan,
            'isi' => $request->isi
        );

        Mahad::where('id_mahad','=',$id)->update(
            $mahadEdit
        );

        return Redirect::to('/admin-mahad-all')->with('message','berhasil memanipulasi data'); 
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
        Mahad::where('id_mahad','=',$id)->delete();

        return redirect('/admin-mahad-all')->with('destroy','berhasil menghapus data');
    }
}
