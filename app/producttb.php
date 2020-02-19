<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producttb extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'item_id';
    protected $fillable=['item_name','category','no_of_stock','image','price',];
}
