<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name' => 'Canal +',
                'image' => 'assets/images/logos/sponsor1.png',
                'website_url' => 'https://www.partnerone.com',
            ],
            [
                'name' => 'Colas',
                'image' => 'assets/images/logos/sponsor2.png',
                'website_url' => 'https://www.partnertwo.com',
            ],
            [
                'name' => 'RP Bénin',
                'image' => 'assets/images/logos/sponsor3.jpg',
                'website_url' => 'https://www.partnerthree.com',
            ],
            [
                'name' => 'SIPI',
                'image' => 'assets/images/logos/sponsor4.jpg',
                'website_url' => 'https://www.partnerfour.com',
            ],
            [
                'name' => 'SOBEBRA',
                'image' => 'assets/images/logos/sponsor5.jpg',
                'website_url' => 'https://www.partnerfive.com',
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
