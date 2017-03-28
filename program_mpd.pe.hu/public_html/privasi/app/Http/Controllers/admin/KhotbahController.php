<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Khotbah;
use Response;
use Validator;
use Input;
use Redirect;

class KhotbahController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $khotbah = Khotbah::orderBy('id_khotbah', 'desc')->Paginate(1);
        return view("admin.admin-khotbah", compact("khotbah"));

    }

    public function store(Request $request)
    {
        
        DB::table('khotbah')->delete();

        //
        $pdf = $request->file('pdf');
        $filename = "";
        if($pdf != null) {
            $arrayName = explode('.', $pdf->getClientOriginalName());

            $extension = "";
            foreach ($arrayName as $i => $name) {
                if ($i != (count($arrayName) - 1))
                    $filename .= $name;
                else
                    $extension = $name;
            }
            $filename = str_slug($filename) . "." . $extension;

            $pdf->move('pdf', $filename);

        }

        Khotbah::insert(
            ['pdf' => $filename
            ]
        );

        return Redirect::to('/admin-khotbah')->with('message','berhasil mengunggah data');

    }

}