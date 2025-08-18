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
            'privacy_policy' => '<h1>Politique de Confidentialité</h1>
                <p><strong>Dernière mise à jour :</strong> ' . now()->format('d/m/Y') . '</p>

                <p>La présente Politique de Confidentialité décrit la manière dont notre entreprise collecte, utilise et protège les informations personnelles que vous nous fournissez lorsque vous utilisez notre site.</p>

                <h2>1. Collecte des informations</h2>
                <p>Nous pouvons collecter des données telles que : nom, prénom, adresse e-mail, numéro de téléphone, ainsi que vos données de navigation.</p>

                <h2>2. Utilisation des informations</h2>
                <p>Les informations collectées servent à améliorer nos services, traiter vos demandes et vous tenir informé.</p>

                <h2>3. Protection des données</h2>
                <p>Nous mettons en place des mesures de sécurité adaptées pour protéger vos données personnelles.</p>

                <h2>4. Partage des informations</h2>
                <p>Vos données ne sont jamais vendues. Elles peuvent être partagées uniquement avec nos prestataires ou si la loi l\'exige.</p>

                <h2>5. Cookies</h2>
                <p>Nous utilisons des cookies pour améliorer votre expérience de navigation. Vous pouvez configurer votre navigateur pour les refuser.</p>

                <h2>6. Conservation des données</h2>
                <p>Les données sont conservées uniquement le temps nécessaire aux finalités prévues.</p>

                <h2>7. Vos droits</h2>
                <p>Conformément au RGPD, vous disposez d\'un droit d\'accès, de rectification et de suppression de vos données. Contactez-nous à : contact@exemple.com.</p>

                <h2>8. Modifications</h2>
                <p>Nous pouvons modifier cette politique à tout moment. La date de mise à jour sera indiquée en haut de la page.</p>'
        ]);
    }
}
