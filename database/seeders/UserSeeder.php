<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentType = DocumentType::where('name', 'Cédula de ciudadanía')
            ->firstOrFail();

        User::updateOrCreate(
            [
                'email' => 'diego@gmail.com',
            ],
            [
                'document_type_id' => $documentType->id,
                'document' => '1000000000',
                'first_name' => 'Usuario',
                'last_name' => 'Administrador',
                'password' => Hash::make('password'), # No olvide cambiar la contraseña en producción
            ]
        );
    }
}
