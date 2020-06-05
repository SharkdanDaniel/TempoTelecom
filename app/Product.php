<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function path($append = '')
    {
        $path = route('product', $this->id);

        return $append ? "{$path}/{$append}" : $path;
    }
}
