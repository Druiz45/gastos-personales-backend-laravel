<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryMovement extends Model
{
    protected $table = 'categories_movement';

    protected $fillable = [
        'user_id',
        'name',
    ];

    public function movements(): HasMany
    {
        return $this->hasMany(Movement::class, 'category_movement_id');
    }
}
