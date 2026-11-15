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

    public function typeMovement(): BelongsTo
    {
        return $this->belongsTo(TypeMovement::class);
    }
}
