<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            //Ajout manuelle de la question email
            [//2
              'description' => 'Votre âge',
              'type' => 'B',
              'choices' => null,  
            ],
            [//3
              'description' => 'Votre sexe',
              'type' => 'A',
              'choices' =>  json_encode(['Homme', 'Femme', 'Préfère de pas répondre']),  
            ],
            [//4
              'description' => 'Nombre de personne dans votre foyer (adulte & enfants)',
              'type' => 'C',
              'choices' => null,  
            ],
            [//5
              'description' => 'Votre profession',
              'type' => 'B',
              'choices' => null,  
            ],
            [//6
              'description' => 'Quel marque de casque VR utilisez vous ?',
              'type' => 'A',
              'choices' => json_encode(['Occulus Rift/s', 'HTC Vive', 'Windows Mixed Reality', 'PSVR']),  
            ],
            [//7
              'description' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
              'type' => 'A',
              'choices' => json_encode(['SteamVR', 'Occulus store', 'Viveport', 'Playstation VR', 'Google Play', 'Windows store']),  
            ],
            [//8
              'description' => 'Quel casque envisagez-vous d’acheter dans un futur proche ?',
              'type' => 'A',
              'choices' => json_encode('Occulus Quest', 'Occulus Go', 'HTC Vive Pro','Autre', 'Aucun'),  
            ],
            [//9
              'description' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?',
              'type' => 'C',
              'choices' => null,  
            ],
            [//10
              'description' => 'Vous utilisez principalement Bigscreen pour :',
              'type' => 'A',
              'choices' => json_encode('regarder des émissions TV en direct', 'regarder des films', 'jouer en solo', 'jouer en team'), 
            ],
            [//11
              'description' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
              'type' => 'C',
              'choices' => null,  
            ],
            [//12
              'description' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
              'type' => 'C',
              'choices' => null,  
            ],
            [//13
              'description' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
              'type' => 'C',
              'choices' => null,  
            ],
            [//14
              'description' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
              'type' => 'C',
              'choices' => null,  
            ],
            [//15
              'description' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
              'type' => 'C',
              'choices' => null,  
            ],
            [//16
              'description' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
              'type' => 'A',
              'choices' => json_encode('oui', 'non'),  
            ],
            [//17
              'description' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
              'type' => 'A',
              'choices' => json_encode('oui', 'non'),  
            ],
            [//18
              'description' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
              'type' => 'C',
              'choices' => null,  
            ],
            [//19
              'description' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
              'type' => 'C',
              'choices' => null,  
            ], 
            [//19
              'description' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?',
              'type' => 'B',
              'choices' => null,  
            ], 
        ]);
    }
}
