<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    protected $table='excel';
    protected $primaryKey='id_excel';
    protected $guarded = ['id_excel'];
    
}
