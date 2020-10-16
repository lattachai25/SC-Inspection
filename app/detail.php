<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    //
    // protected $primaryKey = 'id_detail';
    protected $fillable = [
        'id_car',
        'carrs01','carrs02','carrs03','carrs04','carrs05','carrs06','carrs07','carrs08',
        'carrs09','carrs10','carrs11','carrs12','carin01','carin02','carin03','carin04',
        'carin05','carin06','carin07','carin08',
        'exterior_01','exterior_02','exterior_03','exterior_04','exterior_05','exterior_06','exterior_07','exterior_08',
        'exterior_09','exterior_10','exterior_11','exterior_12','exterior_13','exterior_14','exterior_15','exterior_16',
        'exterior_17','exterior_18','exterior_19','exterior_20',
        'interior_01','interior_02','interior_03','interior_04','interior_05','interior_06','interior_07','interior_08',
        'interior_09','interior_10','interior_11','interior_12','interior_13','interior_14','interior_15',
        'chasis_01','chasis_02','chasis_03','comment'


    ];
}
