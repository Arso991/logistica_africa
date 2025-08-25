<?php

namespace Database\Seeders;

use App\Models\BannerCarrousel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerCarrouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bannerCarrousels = [
            [
                'title' => 'Votre chantier, notre expertise : des engins fiables et un accompagnement sur-mesure.',
                'image' => 'assets/images/brand/machine2.jpg',
            ],
            [
                'title' => 'Des solutions performantes pour tous vos projets, du terrassement au transport.',
                'image' => 'assets/images/brand/machine3.jpg',
            ],
            [
                'title' => 'Louez, déplacez, construisez : nous mettons à votre disposition la puissance et la fiabilité.',
                'image' => 'assets/images/brand/machine1.jpg',
            ]
        ];

        foreach ($bannerCarrousels as $bannerCarrousel) {
            BannerCarrousel::create($bannerCarrousel);
        }
    }
}
