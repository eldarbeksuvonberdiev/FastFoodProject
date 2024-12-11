<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'user_id',
        'department_id',
        'salary_type',
        'salary_amount',
        'bonus',
        'salary_date',
        'start_time',
        'end_time',
        'overall_work',
    ];
}
