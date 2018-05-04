<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product_images extends Model
{
    protected $table='tbl_pro_imgs';
    protected $primaryKey ='proimg_id';
    public $timestamp = false;

    protected $filltable=[
        'pro_id','product_img'
    ];
    public static function getall() {
        $product_imgs = Products::get()->toArray();
        return $product_imgs;
    }
}
