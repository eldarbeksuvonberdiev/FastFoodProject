<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'image',
        'order'
    ];
}