<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_inspection_date extends Model
{
        protected $fillable = [
            'id','inspectiontype', 'inspector',
            'inspectiondate', 'inspectiontime','package', 'remark'
        ];
}
