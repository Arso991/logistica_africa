<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Machine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Terrassement',
                'description' => 'Découvrez nos machines de terrasement',
                'image' => 'assets/images/machine/compacteur.png',
            ],
            [
                'name' => 'Levage',
                'description' => 'Découvrez nos machines de levage',
                'image' => 'assets/images/machine/tractopelle.png',
            ],
            [
                'name' => 'Transport',
                'description' => 'Découvrez nos machines de transport',
                'image' => 'assets/images/machine/12roues.png',
            ],
            [
                'name' => 'Équipements complémentaires',
                'description' => 'Découvrez nos équipements complémentaires',
                'image' => 'assets/images/machine/auto-betonniere.png',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $machines = [
            'Terrassement' => [
                [
                    'name' => 'Compacteur',
                    'description' => 'Chariot élévateur électrique compact et puissant.',
                    'image' => 'assets/images/machine/compacteur.png',
                    'additionnel_images' => ['toyota1.jpg', 'toyota2.jpg'],
                    'price' => 200000,
                    'model' => 'CA610D, 129Kw',
                    'capacity' => '3000 m²/jour',
                    'productor_name' => 'Dynapac',
                    'production_year' => '2013',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Auto-bétonnière',
                    'description' => 'Système motorisé pour transport de colis en ligne droite.',
                    'image' => 'assets/images/machine/auto-betonniere.png',
                    'additionnel_images' => [],
                    'price' => 300000,
                    'model' => '3500EE',
                    'capacity' => '50 m³/jour (8 heures)',
                    'productor_name' => 'DBM',
                    'production_year' => '2023',
                    'technical_sheet' => 'roller-conveyor.pdf',
                ],
                [
                    'name' => 'Pelle Mécanique',
                    'description' => 'Système motorisé pour transport de colis en ligne droite.',
                    'image' => 'assets/images/machine/pelle.png',
                    'additionnel_images' => [],
                    'price' => 350000,
                    'model' => 'E300DL, 169 Kw',
                    'capacity' => '810m³/jour',
                    'productor_name' => 'VOLVO',
                    'production_year' => '2022',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Chargeuse',
                    'description' => 'Système motorisé pour transport de colis en ligne droite.',
                    'image' => 'assets/images/machine/chargeuse.png',
                    'additionnel_images' => [],
                    'price' => 250000,
                    'model' => 'L956F, 165Kw',
                    'capacity' => '1500m³/jour',
                    'productor_name' => 'SDLG',
                    'production_year' => '2022',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Niveleuse',
                    'description' => 'Système motorisé pour transport de colis en ligne droite.',
                    'image' => 'assets/images/machine/niveuse.png',
                    'additionnel_images' => [],
                    'price' => 350000,
                    'model' => 'CAT 140H, 154Kw',
                    'capacity' => '780m³/jour',
                    'productor_name' => 'CATERPILLAR',
                    'production_year' => '2007',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Compacteur',
                    'description' => 'Système motorisé pour transport de colis en ligne droite.',
                    'image' => 'assets/images/machine/compacteur2.png',
                    'additionnel_images' => [],
                    'price' => 30000,
                    'model' => 'Kohler KD15-440',
                    'capacity' => '0,50/0,25mm-25/13 kN-63/63hz',
                    'productor_name' => 'DYNAPAC',
                    'production_year' => '2024',
                    'technical_sheet' => null,
                ],
            ],
            'Levage' => [
                [
                    'name' => 'Tractopelle',
                    'description' => 'Transpalette robuste pour entrepôt intensif.',
                    'image' => 'assets/images/machine/tractopelle.png',
                    'additionnel_images' => [],
                    'price' => 180000,
                    'model' => '3DXPLUS, 55Kw',
                    'capacity' => 'Godet 1m³',
                    'productor_name' => 'JCB',
                    'production_year' => '2023',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Tractopelle',
                    'description' => 'Transpalette compact avec grande manœuvrabilité.',
                    'image' => 'assets/images/machine/tractopel.png',
                    'additionnel_images' => [],
                    'price' => 180000,
                    'model' => 'B877F, 70Kw',
                    'capacity' => 'Godet 1m³',
                    'productor_name' => 'SDLG',
                    'production_year' => '2022',
                    'technical_sheet' => 'eje116.pdf',
                ],
            ],
            'Transport' => [
                [
                    'name' => 'Camion Benne 12 roues',
                    'description' => 'Gerbeur électrique avec levée initiale.',
                    'image' => 'assets/images/machine/12roues.png',
                    'additionnel_images' => [],
                    'price' => 140000,
                    'model' => 'F2000',
                    'capacity' => '25m³',
                    'productor_name' => 'SHACMAN',
                    'production_year' => '2023',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Camion Benne 10 roues',
                    'description' => 'Gerbeur électrique avec levée initiale.',
                    'image' => 'assets/images/machine/10roues.png',
                    'additionnel_images' => [],
                    'price' => 120000,
                    'model' => 'F2000',
                    'capacity' => '20m³',
                    'productor_name' => 'SHACMAN',
                    'production_year' => '2023',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Camion grue',
                    'description' => 'Gerbeur électrique avec levée initiale.',
                    'image' => 'assets/images/machine/grue.png',
                    'additionnel_images' => [],
                    'price' => 80000,
                    'model' => 'PK140.1',
                    'capacity' => '6T',
                    'productor_name' => 'RENAULT-ATLAS',
                    'production_year' => '1996',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Camion grue',
                    'description' => 'Gerbeur électrique avec levée initiale.',
                    'image' => 'assets/images/machine/grue2.png',
                    'additionnel_images' => [],
                    'price' => 80000,
                    'model' => 'PK14080',
                    'capacity' => '5T',
                    'productor_name' => 'RENAULT-PALFINGER',
                    'production_year' => '1996',
                    'technical_sheet' => null,
                ],
            ],
            'Équipements complémentaires' => [
                [
                    'name' => 'Auto-bétonnière',
                    'description' => 'Système motorisé pour transport de colis en ligne droite.',
                    'image' => 'assets/images/machine/auto-betonniere.png',
                    'additionnel_images' => [],
                    'price' => 300000,
                    'model' => '3500EE',
                    'capacity' => '50 m³/jour (8 heures)',
                    'productor_name' => 'DBM',
                    'production_year' => '2023',
                    'technical_sheet' => 'roller-conveyor.pdf',
                ],
                [
                    'name' => 'Tour d’éclairage',
                    'description' => 'Convoyeur à bande pour lignes de production.',
                    'image' => 'assets/images/machine/tour.png',
                    'additionnel_images' => [],
                    'price' => 30000,
                    'model' => 'HILIGHT V4',
                    'capacity' => '50HZ, 6KVA',
                    'productor_name' => 'ATLAS COPCO',
                    'production_year' => '2020',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Groupe électrogène',
                    'description' => 'Convoyeur à bande pour lignes de production.',
                    'image' => 'assets/images/machine/groupe.png',
                    'additionnel_images' => [],
                    'price' => 100000,
                    'model' => 'DB80GF 80Kw',
                    'capacity' => '100KVA',
                    'productor_name' => 'VOLVO',
                    'production_year' => '2022',
                    'technical_sheet' => null,
                ],
                [
                    'name' => 'Groupe électrogène',
                    'description' => 'Convoyeur à bande pour lignes de production.',
                    'image' => 'assets/images/machine/groupe2.png',
                    'additionnel_images' => [],
                    'price' => 80000,
                    'model' => '3305GM',
                    'capacity' => '20KVA',
                    'productor_name' => 'POWEROL',
                    'production_year' => '2023',
                    'technical_sheet' => null,
                ],
            ],
        ];

        foreach ($machines as $categoryName => $items) {
            $category = Category::where('name', $categoryName)->first();
            if (!$category) continue;

            foreach ($items as $item) {
                Machine::create([
                    'category_id' => $category->id,
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'image' => $item['image'],
                    'additionnel_images' => json_encode($item['additionnel_images']),
                    'price' => $item['price'],
                    'model' => $item['model'],
                    'capacity' => $item['capacity'],
                    'productor_name' => $item['productor_name'],
                    'production_year' => $item['production_year'],
                    'technical_sheet' => $item['technical_sheet'],
                ]);
            }
        }
    }
}
