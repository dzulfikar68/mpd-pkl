<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Unduhan;
use Response;
use Validator;
use Input;
use Redirect;

class UnduhanController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $unduhan = Unduhan::orderBy('id_unduhan', 'desc')->Paginate(1);
        return view("admin.admin-unduhan", compact("unduhan"));

    }

    public function store(Request $request)
    {
        
        DB::table('unduhan')->delete();

        Unduhan::insert(
            ['link' => $request->link
            ]
        );

        return Redirect::to('/admin-unduhan')->with('message','berhasil memperbarui link');

    }

}