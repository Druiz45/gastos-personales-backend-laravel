<?php

namespace Database\Seeders;

use App\Models\TypeMovement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeMovements = [
            'Entrada',
            'Salida',
        ];

        foreach ($typeMovements as $typeMovement) {
            TypeMovement::create([
                'name' => $typeMovement,
            ]);
        }
    }
}
