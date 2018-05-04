<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='tbl_products';
    protected $primaryKey ='pro_id';
    public $timestamp = false;

    protected $filltable=[
        'cat_id','pro_title','pro_descript','pro_detail','pro_img','quantity','pro_date','pro_price','pro_status',
    ];
    public static function getall() {
        $products = Products::get()->toArray();
        return $products;
    }
}
