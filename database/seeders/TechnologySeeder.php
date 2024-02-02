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
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'Bootstrap'],
            ['name' => 'Socket.io'],
            ['name' => 'Node.js'],
            ['name' => 'Express.js'],
            ['name' => 'React.js'],
            ['name' => 'MongoDB'],
            ['name' => 'Ruby on Rails (framework Ruby)'],
            ['name' => 'PostgreSQL (database)'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'ASP.NET (framework C#)'],
            ['name' => 'SQL Server (database)'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'jQuery'],
            ['name' => 'Python (pandas, matplotlib, seaborn)'],
            ['name' => 'Flask (framework Python)'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'Laravel (framework PHP)'],
            ['name' => 'MySQL (database)'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'Vue.js'],
            ['name' => 'Node.js'],
            ['name' => 'Express.js'],
            ['name' => 'MongoDB (database)'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'Django (framework Python)'],
            ['name' => 'PostgreSQL (database)'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript']
        ];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->fill($technology);
            $newTechnology->save();
        }
    }
}
