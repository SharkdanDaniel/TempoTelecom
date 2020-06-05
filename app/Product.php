<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(Order::class, 'order_product', 'order_id', 'id');
    }

    public function path($append = '')
    {
        $path = route('product', $this->id);

        return $append ? "{$path}/{$append}" : $path;
    }
}
