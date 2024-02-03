<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'React.js'],
            ['name' => 'Node.js'],
            ['name' => 'Express.js'],
            ['name' => 'MongoDB'],
            ['name' => 'Java (per Android)'],
            ['name' => 'Swift (per iOS)'],
            ['name' => 'Firebase (per il backend)'],
            ['name' => 'Django (framework Python)'],
            ['name' => 'PostgreSQL (database)'],
            ['name' => 'Bootstrap'],
            ['name' => 'Socket.io'],
            ['name' => 'Ruby on Rails (framework Ruby)'],
            ['name' => 'ASP.NET (framework C#)'],
            ['name' => 'SQL Server (database)'],
            ['name' => 'jQuery'],
            ['name' => 'Python (pandas, matplotlib, seaborn)'],
            ['name' => 'Flask (framework Python)'],
            ['name' => 'Laravel (framework PHP)'],
            ['name' => 'MySQL (database)'],
            ['name' => 'Vue.js']
        ];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->fill($technology);
            $newTechnology->save();
        }
    }
}
