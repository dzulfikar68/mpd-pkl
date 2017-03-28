<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class validasitambah extends Request{
    public function authorize(){
        return true;
    }
    
    public function rules(){
        return [
            'judul'=>'required'
        ];
    }
    
    public function messages(){
        return [
            'judul.required'=>'harus mengisi Judul'
        ];
    }
}
?>