<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table='berita';
    protected $primaryKey='id_berita';
    protected $guarded = ['id_berita'];
    
}
