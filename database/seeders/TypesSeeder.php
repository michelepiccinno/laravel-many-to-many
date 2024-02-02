<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => "E-commerce",
            ],
            [
                'name' => "Finanza Personale",
            ],
            [
                'name' => "Istruzione",
            ],
            [
                'name' => "Comunicazione",
            ],
            [
                'name' => "Produttività",
            ],
            [
                'name' => "Ristorazione",
            ],
            [
                'name' => "Analisi dei Dati",
            ],
            [
                'name' => "Salute",
            ],
            [
                'name' => "Organizzazione",
            ],
            [
                'name' => "Tecnologia",
            ]
        ];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}
