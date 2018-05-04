<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Order extends Model
{
    protected $table = 'tbl_order';
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'cus_fullname','cus_address','cus_phone', 'cus_email','pay_number','pay_cvc','pay_mm','pay_yyyy','total_price'
    ];
}
