<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\validasitambah;

use DB;
use App\Models\Faq;
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
        
        return view("admin.admin-faq", compact("faqAll"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $faq = Faq::count();

        if($faq == 10){
            Faq::all()->first()->delete();
        }
        
        Faq::insert(
            ['q' => $request->q, 'a' => $request->a
            ]
        );

        return Redirect::to('/admin-faq')->with('message','berhasil menambahkan data');
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
        Faq::where('id_faq','=',$id)->delete();

        return redirect('/admin-faq')->with('destroy','berhasil menghapus data');
    }
}
