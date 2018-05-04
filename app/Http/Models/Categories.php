<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Categories extends Model
{
    protected $table='tbl_category';
    protected $primaryKey ='cat_id';
    public $timestamp = false;

    protected $filltable=[
            'cat_name','cat_detail','cat_img',
    ];
    public static function getall() {
        $categories = Categories::get()->toArray();
        return $categories;
    }
    public function product(){
        return $this->hasMany('App\Http\Models\Products');
    }
}
