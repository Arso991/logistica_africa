<?php

namespace Database\Seeders;

use App\Models\AppBasics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppBasics::create([
            'contact' => '+2290148655555',
            'email' => 'contact@logisticafrica.com',
        ]);
    }
}
