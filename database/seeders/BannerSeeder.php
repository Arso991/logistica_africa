<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title' => 'VOTRE PARTENAIRE LOGISTIQUE ENGAGÉ POUR LA REUSSITE DE VOS CHANTIERS',
            'subtitle' => 'Chez Logistica Africa, nous mettons à votre disposition bien plus qu’une simple flotte d’engins.
                        Nous vous apportons notre expertise, notre réactivité et des équipements fiables pour faire avancer vos projets en toute sérénité.',
            'background_image' => 'assets/images/brand/machine1.jpg',
            'carrousel_images' => json_encode([
                'assets/images/brand/machine2.jpg',
                'assets/images/brand/machine3.jpg',
                'assets/images/brand/machine1.jpg',
            ]),
        ]);
    }
}
