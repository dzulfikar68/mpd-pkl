<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Donasi;
use App\Models\Excel;

use DB;
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

        $excel = Excel::orderBy('id_excel', 'desc')->Paginate(1);
        
        return view("donasi", compact("donasiAll", "excel"));
    }
}
