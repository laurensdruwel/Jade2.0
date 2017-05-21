<?php

namespace Jade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Event extends Model
{
    protected $fillable = [
        'hostEmail',
        'time',
        'place',
        'radius',
        'description',
        'price',
        'category',
        'longitude',
        'latitude',
        'public',
        'name',
        'date'
    ];

    public static function where($whereAction)
    {
        return DB::table('events')->where('eventId', '=', $whereAction)->get();
    }

}
