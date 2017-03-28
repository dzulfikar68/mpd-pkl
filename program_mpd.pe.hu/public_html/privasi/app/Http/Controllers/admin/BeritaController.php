<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Berita;
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

        $beritaAll = Berita::orderBy('created_at', 'desc')->Paginate(10);

        $jumlah = $beritaAll->total();

        $beritaKunci = Berita::orderBy(DB::raw('RAND()'))->take(50)->get();
        
        return view("admin.admin-berita-all", compact("beritaAll", "jumlah", "beritaKunci"));
    }
    
    public function katakunci($kunci)
    {
        
        //index
        $beritaAll = Berita::where('kunci','=',$kunci)->orderBy('created_at', 'desc')->Paginate(5);
        
        $jumlah = $beritaAll->total();

        $beritaKunci = Berita::orderBy(DB::raw('RAND()'))->take(50)->get();
        
        return view("admin.admin-berita-all", compact("beritaAll", "jumlah", "beritaKunci"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-berita-add');
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

        Berita::insert(
            ['judul' => $request->judul, 'gambar' => $filename, 'audio' => $request->audio, 'video' => $request->video, 'ajakan' => $request->ajakan, 'isi' => $request->isi, 'kunci' => $request->kunci,
            ]
        );

        return Redirect::to('/admin-berita-add')->with('message','berhasil menambahkan data');
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
        $beritaShow = Berita::where('id_berita','=',$id)->get();
        
        return view("admin.admin-berita-view", compact("beritaShow"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Berita $berita)
    {
        //
        return view('admin.admin-berita-edit', compact("berita")); 
    }

    public function update(Request $request, $id)
    {
        //
        $beritaEdit = array(
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'audio' => $request->audio,
            'video' => $request->video,
            'ajakan' => $request->ajakan,
            'isi' => $request->isi,
            'kunci' => $request->kunci
        );

        Berita::where('id_berita','=',$id)->update(
            $beritaEdit
        );

        return Redirect::to('/admin-berita-all')->with('message','berhasil memanipulasi data'); 
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
        Berita::where('id_berita','=',$id)->delete();

        return redirect('/admin-berita-all')->with('destroy','berhasil menghapus data');
    }
}
