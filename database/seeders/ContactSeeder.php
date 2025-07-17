<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'email' => 'alice@example.com',
                'subject' => 'Demande d\'information',
                'message' => 'Bonjour, je souhaite en savoir plus sur vos services.',
            ],
            [
                'email' => 'bob@example.com',
                'subject' => 'Support technique',
                'message' => 'J\'ai un problème pour accéder à mon compte.',
            ],
            [
                'email' => 'carla@example.com',
                'subject' => 'Partenariat',
                'message' => 'Seriez-vous intéressé par un partenariat ?',
            ],
            [
                'email' => 'david@example.com',
                'subject' => 'Remerciement',
                'message' => 'Merci pour votre excellent service.',
            ],
            [
                'email' => 'emma@example.com',
                'subject' => 'Demande de devis',
                'message' => 'Pouvez-vous me fournir un devis personnalisé ?',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
