<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentTypes = [
            'Cédula de ciudadanía',
            'Cédula de extranjería',
            'Tarjeta de identidad',
            'Pasaporte',
        ];

        foreach ($documentTypes as $documentType) {
            DocumentType::firstOrCreate([
                'name' => $documentType,
            ]);
        }
    }
}
