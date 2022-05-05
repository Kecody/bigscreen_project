<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
              'title'=> 'Question 2/20',
              'description' => 'Votre âge',
              'type' => 'B',
              'choices' => null,
              'quiz_id' => 1
            ],
            [//3
              'title'=> 'Question 3/20',
              'description' => 'Votre sexe',
              'type' => 'A',
              'choices' =>  json_encode(['Homme', 'Femme', 'Préfère de pas répondre']),
              'quiz_id' => 1  
            ],
            [//4
              'title'=> 'Question 4/20',
              'description' => 'Nombre de personne dans votre foyer (adulte & enfants)',
              'type' => 'C',
              'choices' => null,
              'quiz_id' => 1  
            ],
            [//5
              'title'=> 'Question 5/20',
              'description' => 'Votre profession',
              'type' => 'B',
              'choices' => null,
              'quiz_id' => 1  
            ],
            [//6
              'title'=> 'Question 6/20',
              'description' => 'Quel marque de casque VR utilisez vous ?',
              'type' => 'A',
              'choices' => json_encode(['Occulus Rift/s', 'HTC Vive', 'Windows Mixed Reality', 'PSVR']),
              'quiz_id' => 1  
            ],
            [//7
              'title'=> 'Question 7/20',
              'description' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
              'type' => 'A',
              'choices' => json_encode(['SteamVR', 'Occulus store', 'Viveport', 'Playstation VR', 'Google Play', 'Windows store']),
              'quiz_id' => 1  
            ],
            [//8
              'title'=> 'Question 8/20',
              'description' => 'Quel casque envisagez-vous d’acheter dans un futur proche ?',
              'type' => 'A',
              'choices' => json_encode(['Occulus Quest', 'Occulus Go', 'HTC Vive Pro','Autre', 'Aucun']), 
              'quiz_id' => 1 
            ],
            [//9
              'title'=> 'Question 9/20',
              'description' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?',
              'type' => 'C',
              'choices' => null,
              'quiz_id' => 1  
            ],
            [//10
              'title'=> 'Question 10/20',
              'description' => 'Vous utilisez principalement Bigscreen pour :',
              'type' => 'A',
              'choices' => json_encode(['regarder des émissions TV en direct', 'regarder des films', 'jouer en solo', 'jouer en team']),
              'quiz_id' => 1 
            ],
            [//11
              'title'=> 'Question 11/20',
              'description' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
              'type' => 'C',
              'choices' => null,
              'quiz_id' => 1  
            ],
            [//12
              'title'=> 'Question 12/20',
              'description' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
              'type' => 'C',
              'choices' => null,
              'quiz_id' => 1  
            ],
            [//13
              'title'=> 'Question 13/20',
              'description' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
              'type' => 'C',
              'choices' => null,
              'quiz_id' => 1  
            ],
            [//14
              'title'=> 'Question 14/20',
              'description' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
              'type' => 'C',
              'choices' => null,  
              'quiz_id' => 1
            ],
            [//15
              'title'=> 'Question 15/20',
              'description' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
              'type' => 'C',
              'choices' => null,
              'quiz_id' => 1  
            ],
            [//16
              'title'=> 'Question 16/20',
              'description' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
              'type' => 'A',
              'choices' => json_encode(['oui', 'non']),
              'quiz_id' => 1  
            ],
            [//17
              'title'=> 'Question 17/20',
              'description' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
              'type' => 'A',
              'choices' => json_encode(['oui', 'non']),
              'quiz_id' => 1  
            ],
            [//18
              'title'=> 'Question 18/20',
              'description' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
              'type' => 'C',
              'choices' => null, 
              'quiz_id' => 1
            ],
            [//19
              'title'=> 'Question 19/20',
              'description' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
              'type' => 'C',
              'choices' => null,
              'quiz_id' => 1  
            ], 
            [//20
              'title'=> 'Question 20/20',
              'description' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?',
              'type' => 'B',
              'choices' => null,
              'quiz_id' => 1  
            ], 
        ]);
    }
}
