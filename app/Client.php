<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function path($append = '')
    {
        $path = route('client', $this->name);

        return $append ? "{$path}/{$append}" : $path;
    }
}
