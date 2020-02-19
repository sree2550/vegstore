<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logintb extends Model
{
    protected $table='login';
    protected $fillable=['id','user_name','password','role',];
}
