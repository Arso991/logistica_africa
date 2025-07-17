<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'about_text' => 'Créée en décembre 2022, Logistica Africa est spécialisée dans l\'optimisation logistique des projets de génie civil et des chantiers de construction.
                            Notre mission : accompagner les entreprises du BTP en leur fournissant des solutions logistiques fiables, efficaces et sur mesure, parfaitement adaptées aux exigences techniques et aux contraintes de leurs projets.
                            Grâce à notre expertise du terrain, notre réactivité et notre maîtrise opérationnelle, nous contribuons chaque jour à la réussite des chantiers de nos clients.',
            'about_image' => 'assets/images/brand/machine1.jpg',
            'mission_text' => 'Être le partenaire terrain des entreprises du BTP, en leur fournissant des engins et matériels robustes, fiables et adaptés à leurs réalités quotidiennes.
                            Chez Logistica Bénin, on facilite vos chantiers avec des engins performants, une équipe terrain experte, et un service toujours prêt à intervenir.',
            'mission_image' => 'assets/images/brand/machine1.jpg'
        ]);

        $values = [
            [
                'title' => 'Fiabilité',
                'description' => 'Des engins et matériels contrôlés, entretenus et prêts à l’action, pour que vos chantiers avancent sans coupure ni surprise.',
                'image' => 'assets/images/brand/1.png',
                'status' => true,
            ],
            [
                'title' => 'Réactivité',
                'description' => 'Vos projets n’attendent pas. Notre équipe organise rapidement la mise à disposition de vos engins sur chantier.',
                'image' => 'assets/images/brand/1.png',
                'status' => true,
            ],
            [
                'title' => 'Engagement',
                'description' => 'On est à vos côtés du début à la fin, avec un service sur mesure qui colle vraiment à vos besoins en matériel et logistique.',
                'image' => 'assets/images/brand/1.png',
                'status' => true,
            ],
            [
                'title' => 'Respect',
                'description' => 'Nous valorisons chaque personne et traitons chacun avec dignité et considération.',
                'image' => 'values/respect.jpg',
                'status' => false,
            ],
            [
                'title' => 'Responsabilité',
                'description' => 'Nous assumons pleinement nos décisions, nos actions et leurs conséquences.',
                'image' => 'values/responsibility.jpg',
                'status' => false,
            ],
        ];

        foreach ($values as $value) {
            Value::create($value);
        }
    }
}
