<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'name' => "Sito Web di E-commerce",
                'type_id' => 1,
                'description' => "Piattaforma di vendita online per prodotti o servizi."
            ],
            [
                'name' => "Applicazione Mobile per la Gestione delle Spese",
                'type_id' => 2,
                'description' => "Applicazione per la gestione delle finanze personali, inclusa la registrazione delle spese e la gestione del budget."
            ],
            [
                'name' => "Piattaforma di Apprendimento Online",
                'type_id' => 3,
                'description' => "Piattaforma per la distribuzione di contenuti educativi, corsi online, e materiali didattici."  
            ],
            [
                'name' => "Applicazione di Chat in Tempo Reale",
                'type_id' => 4,
                'description' => "Applicazione per la comunicazione in tempo reale, come chat, messaggistica istantanea, e videochiamate."
            ],
            [
                'name' => "Sistema di Gestione di Progetti",
                'type_id' => 5,
                'description' => "Strumento per la gestione e l'organizzazione di progetti, attività e compiti."
            ],
            [
                'name' => "Piattaforma di Prenotazione Online per Ristoranti",
                'type_id' => 6,
                'description' => "Piattaforma per la prenotazione online di tavoli in ristoranti, ordini da asporto, e consegna a domicilio."
            ],
            [
                'name' => "Applicazione di Analisi e Visualizzazione dei Dati",
                'type_id' => 7,
                'description' => "Applicazione per l'analisi, la visualizzazione e l'interpretazione dei dati."
            ],
            [
                'name' => "Sistema di Prenotazione di Appuntamenti Medici",
                'type_id' => 8,
                'description' => "Sistema per la gestione delle prenotazioni e degli appuntamenti medici."
            ],
            [
                'name' => "Applicazione di Gestione delle Attività",
                'type_id' => 9,
                'description' => "Applicazione per la gestione delle attività personali o aziendali, come calendari, promemoria e liste di compiti."
            ],
            [
                'name' => "Piattaforma di Condivisione di File",
                'type_id' => 10,
                'description' => "Piattaforma per la condivisione di file, documenti, o risorse online."
            ]
        ];
        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->fill($post);
            $newPost->save();
        }
    }
}
