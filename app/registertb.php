<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registertb extends Model
{
    protected $table='register';
    protected $fillable=['id','fk_login_id','f_name','l_name','address','place','zip','contact_number',];
}
