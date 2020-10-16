<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images_mn extends Model
{
    //
    protected $fillable = [
        'id_car','name_image','type_image','id_dealer','status','confirm'
    ];
}
