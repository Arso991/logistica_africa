<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Hermann H.',
                'description' => 'Bon accueil, matériel de qualité. Je recommande vivement!',
                'status' => true,
                'image' => 'assets/images/brand/account.png',
            ],
            [
                'name' => 'Mathias K.',
                'description' => 'Très bonne équipe et matériel fiable.',
                'status' => true,
                'image' => 'assets/images/brand/account.png',
            ],
            [
                'name' => 'Damien A.',
                'description' => 'Je loue chez Logistica des camions bennes depuis un an. Je recommande ce service.',
                'status' => true,
                'image' => null,
            ],
            [
                'name' => 'Mohamed Traoré',
                'description' => 'Service rapide et efficace. Merci beaucoup !',
                'status' => false,
                'image' => 'assets/images/brand/account.png',
            ],
            [
                'name' => 'Julie Martin',
                'description' => 'Je suis impressionnée par la qualité du service.',
                'status' => false,
                'image' => null,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
