<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUsuario extends Model
{
    protected $table = 'usuario';
    protected $fillable=['username','name','password','remember_token','created_at','updated_at','delete'];
}
