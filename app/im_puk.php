<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class im_puk extends Model
{
    //
    protected $fillable = [
        'id_car','id_dealer','status_admin','status_tech','confirm_admin','confirm_tech',
        'im_0','im_1','im_2','im_3','im_4','im_5','im_6','im_7','im_A','im_B','im_C','im_D','im_V'

    ];
}
