<?php

namespace Database\Seeders;

use App\Models\CategoryMovement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Alimentación',
            'Transporte',
            'Vivienda',
            'Servicios públicos',
            'Salud',
            'Educación',
            'Entretenimiento',
            'Compras',
            'Tecnología',
            'Trabajo',
            'Negocios',
            'Inversiones',
            'Deudas y préstamos',
            'Familia',
            'Mascotas',
            'Viajes',
            'Regalos y donaciones',
            'Impuestos',
            'Ahorro',
            'Otros',
        ];

        foreach ($categories as $category) {
            CategoryMovement::firstOrCreate(
                [
                    'user_id' => null,
                    'name' => $category,
                ],
            );
        }
    }
}
