<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryMovement extends Model
{
    protected $table = 'categories_movement';

    protected $fillable = [
        'user_id',
        'name',
        'is_active',
    ];

    /**
     * Usuario propietario de la categoría.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Movimientos asociados a la categoría.
     */
    public function movements(): HasMany
    {
        return $this->hasMany(Movement::class, 'category_movement_id');
    }

    /**
     * Conversiones de atributos.
     */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
