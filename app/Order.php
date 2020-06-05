<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function path($append = '')
    {
        $path = route('order', $this->id);

        return $append ? "{$path}/{$append}" : $path;
    }
}
