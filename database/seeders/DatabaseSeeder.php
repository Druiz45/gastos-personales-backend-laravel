<?php

namespace Database\Seeders;

use App\Models\Movement;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Catálogos iniciales
        $this->call([
            DocumentTypeSeeder::class,
            TypeMovementSeeder::class,
            CategoryMovementSeeder::class,
        ]);

        // Usuario de desarrollo
        $this->call(UserSeeder::class);

        // Usuarios ficticios
        User::factory()->count(20)->create();

        // Movimientos por usuario
        $movementsPerUser = [
            'income' => 30,
            'expense' => 70,
        ];

        User::query()->chunkById(100, function ($users) use ($movementsPerUser) {
            foreach ($users as $user) {
                Movement::factory()
                    ->count($movementsPerUser['income'])
                    ->income()
                    ->create([
                        'user_id' => $user->id,
                    ]);

                Movement::factory()
                    ->count($movementsPerUser['expense'])
                    ->expense()
                    ->create([
                        'user_id' => $user->id,
                    ]);
            }
        });
    }
}
