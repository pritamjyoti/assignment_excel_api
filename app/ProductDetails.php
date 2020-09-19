<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductDetails extends Model
{
    use SoftDeletes;
    protected $table = "product_details";
    protected $guarded = [];
   
}
