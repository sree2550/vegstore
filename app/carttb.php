<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carttb extends Model
{
    protected $table='cart';
    protected $fillable=['id','fk_product_id','fk_user_id','quantity',];
}
