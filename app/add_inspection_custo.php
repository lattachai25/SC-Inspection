<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_inspection_custo extends Model
{
    //
    protected $fillable = [
        'id','ins','nametitle', 'firstname','lastname', 'address',
        'province', 'district','subdistrict', 'postalcode',
        'idcard', 'tel','customertype','contact','tel_contact'
    ];
}
