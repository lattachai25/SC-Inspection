<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    //
    protected $fillable = [
        'code','name_th','name_en','geography_id'
    ];
}
