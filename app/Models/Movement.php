<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movement extends Model
{
    /** @use HasFactory<\Database\Factories\MovementFactory> */
    use HasFactory;

    protected $table = 'movements';

    protected $fillable = [
        'user_id',
        'type_movement_id',
        'category_movement_id',
        'amount',
        'description',
        'transaction_date',
    ];

    /**
     * Usuario propietario del movimiento.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Tipo de movimiento (entrada o salida).
     */
    public function typeMovement(): BelongsTo
    {
        return $this->belongsTo(TypeMovement::class);
    }

    /**
     * Categoría asociada al movimiento.
     */
    public function categoryMovement(): BelongsTo
    {
        return $this->belongsTo(CategoryMovement::class);
    }

    /**
     * Conversiones de atributos.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'transaction_date' => 'date',
        ];
    }
}
