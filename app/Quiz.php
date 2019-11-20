<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    protected $fillable = [
        'user_id','gender','teens','diagnosis','diagonsis_condition','active','describe','body_type','doctor','doctor_name', 'qualification', 'service_time', 'business_name', 'typical_patients'
    ];

}
