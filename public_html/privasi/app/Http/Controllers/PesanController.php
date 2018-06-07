<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Pesan;

use DB;
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

    public function store(Request $request)
    {
        //

        Pesan::insert(
            ['nama' => $request->nama, 'nope' => $request->nope, 'email' => $request->email, 'isi' => $request->isi
            ]
        );

        return Redirect::to('/profil')->with('message','pesan berhasil terkirim, terima kasih.');
    }

}
