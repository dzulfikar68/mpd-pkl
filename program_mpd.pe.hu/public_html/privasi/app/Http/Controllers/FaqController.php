<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Faq;

use DB;
use Response;
use Validator;
use Input;
use Redirect;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index
        
        $faqAll = Faq::orderBy('id_faq', 'desc')->Paginate(10);

        $nomor = array(
            0 => 'One',
            1 => 'Two',
            2 => 'Three',
            3 => 'Four',
            4 => 'Five',
            5 => 'Six',
            6 => 'Seven',
            7 => 'Eight',
            8 => 'Nine',
            9 => 'Teen'
        );
        
        return view("faq", compact("faqAll", "nomor"));
    }
}
