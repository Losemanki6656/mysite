<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruits extends Model
{
    public static function zero()
    {
        return static::where('count',0)->get();
    }
}
