<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';

    protected $fillable = ['product_id', 'order_id'];

    public function porduct()
    {
        $this->hasOne(Product::class , 'productd_id', 'id');
    }
}
