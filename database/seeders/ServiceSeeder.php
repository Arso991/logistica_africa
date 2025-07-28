<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Location d\' engins et d\'équipements',
                'description' => 'Nous mettons à votre disposition une flotte d\'engins robustes, contrôlés et immédiatement opérationnels pour répondre à tous vos besoins : terrassement, nivellement, levage, transport… Profitez de matériels fiables et d\'un accompagnement réactif pour sécuriser vos chantiers.',
                'image' => 'assets/images/brand/machine1.jpg',
            ],
            [
                'title' => 'Travaux de Terrassement',
                'description' => 'Du déblaiement au remblaiement, en passant par la préparation de plateformes et le modelage de terrains, nous réalisons vos travaux de terrassement avec rigueur et expertise. Notre équipe et nos engins garantissent un travail rapide, précis et conforme aux exigences de vos projets.',
                'image' => 'assets/images/brand/machine2.jpg',
            ],
            [
                'title' => 'Transport de granulats et matériaux',
                'description' => 'Besoin d\'acheminer sable, gravier, latérite ou autres matériaux ? Logistica Africa assure le transport de granulats dans les délais, avec des camions adaptés et un service fiable. Simplifiez la logistique de vos approvisionnements et optimisez vos chantiers.',
                'image' => 'assets/images/brand/machine3.jpg',
            ],
            [
                'title' => 'Marketing Digital',
                'description' => 'Stratégies digitales pour booster votre audience et vos conversions.',
                'status' => false,
                'image' => 'services/digital-marketing.jpg',
            ],
            [
                'title' => 'Maintenance Web',
                'description' => 'Support technique et mises à jour régulières de votre site.',
                'status' => false,
                'image' => 'services/maintenance.jpg',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
