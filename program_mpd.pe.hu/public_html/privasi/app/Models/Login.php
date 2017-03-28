<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table='kajian';
    protected $primaryKey='username';
    protected $guarded = ['username'];
    
}
