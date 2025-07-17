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
                'title' => 'Cap sur le chantier !',
                'content' => 'Notre autobétonnière Merlot DBM 3500 EE, conçue pour mélanger et transporter le béton directement sur site, embarque en direction d\'un nouveau chantier .
                    Un nouvel exemple de notre engagement à livrer rapidement, efficacement et en toute fiabilité .
                    Merci à notre client pour sa confiance . Rendez - vous sur le terrain ! ',
                'cover_image' => 'assets/images/posts/post1.png',
                'tags' => json_encode(['LogistiqueBTP ', 'LocationMatériel ', 'Autobétonnière ', 'Engagement ', 'ServiceClient']),
                'status' => 'publish',
                'views' => 150,
                'estimated_reading_time' => 5,
            ],
            [
                'title' => 'Direction le terrain !',
                'content' => 'Notre compacteur Dynapac de 21 tonnes prend la route pour une nouvelle mission. Idéal pour les travaux de terrassement et de voirie, il apporte toute la puissance nécessaire à une compaction efficace et durable.
                    Un nouvel exemple de notre capacité à répondre rapidement aux besoins de nos clients, avec du matériel fiable et prêt à l’emploi. Merci à notre partenaire pour sa confiance. On reste en mouvement ! ',
                'cover_image' => 'assets/images/posts/post2.png',
                'tags' => null,
                'status' => 'publish',
                'views' => 230,
                'estimated_reading_time' => 7,
            ],
            [
                'title' => 'En pleine action: notre niveleuse à l\'œuvre pour des travaux de nivellement précis',
                'content' => 'Sur le chantier de Glo Djigbé, notre niveleuse déploie toute sa puissance et sa précision pour réaliser des travaux de nivellement essentiels à la préparation du terrain. Grâce à cet engin performant, nous garantissons une surface parfaitement uniforme, base indispensable à la réussite de vos projets.
                    Chez Logistica Bénin, nous mettons à votre disposition des matériels fiables et une équipe terrain expérimentée pour vous accompagner à chaque étape.
                    Suivez nos actualités pour découvrir nos interventions et solutions adaptées à vos besoins.',
                'cover_image' => 'assets/images/posts/post3.png',
                'tags' => null,
                'status' => 'publish',
                'views' => 90,
                'estimated_reading_time' => 6,
            ],
            [
                'title' => 'Utiliser les notifications dans Laravel',
                'content' => 'Les notifications Laravel permettent de communiquer avec vos utilisateurs...',
                'cover_image' => 'posts/cover4.jpg',
                'tags' => json_encode(['notifications', 'laravel']),
                'status' => 'draft',
                'views' => 75,
                'estimated_reading_time' => 4,
            ],
            [
                'title' => 'Déployer son projet Laravel sur Heroku',
                'content' => 'Heroku permet de déployer rapidement des applications Laravel...',
                'cover_image' => null,
                'tags' => json_encode(['deployment', 'heroku', 'laravel']),
                'status' => 'archive',
                'views' => 45,
                'estimated_reading_time' => 5,
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
