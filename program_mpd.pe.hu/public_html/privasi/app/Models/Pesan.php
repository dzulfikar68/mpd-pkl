<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table='pesan';
    protected $primaryKey='id_pesan';
    protected $guarded = ['id_pesan'];
    
}
