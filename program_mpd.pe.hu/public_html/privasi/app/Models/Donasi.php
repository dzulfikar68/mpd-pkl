<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $table='donasi';
    protected $primaryKey='id_donasi';
    protected $guarded = ['id_donasi'];
    
}
