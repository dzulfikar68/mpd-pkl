<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
{
    protected $table='kajian';
    protected $primaryKey='id_kajian';
    protected $guarded = ['id_kajian'];
    
}
