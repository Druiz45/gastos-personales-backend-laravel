<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMovement extends Model
{
    protected $table = 'categories_movement';

    protected $fillable = [
        'user_id',
        'name',
    ];
}
