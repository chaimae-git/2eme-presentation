<?php

namespace Database\Seeders;

use App\Models\Piece_a_preparer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PieceAPreparerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('piece_a_preparers')->delete();

        $pieces_a_preparer = [
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Déclaration sur l’honneur en 1ex / feuille, signer et approuver.'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Pouvoirs du (des) signataires (Conseil Administratif/AG).'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Attestation du Percepteur (Moins d’un an ), copie certifiée conforme.'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Attestation CNSS (Moins 1an), copie certifiée conforme.'
            ],

            [
                'partie_id'=>'1',
                'nom_fichier'=>'Récépissé caution provisoire (Délivrée par la banque).'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Certificat d’immatriculation au RC datant de moins d’un an.'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'CPS parapher et cacheter chaque page et signer + lu et approuvé la dernière page.'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Renseignements administratifs : Fiche de présentation de la société : coordonnées.'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Capacité financière (votre banque : vérifier l’exigence du CPS.'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Assurance : Attestation de la responsabilité civile professionnelle des Ingénieurs Géomètres Topographes datant de moins d’un an.'
            ],
            [
                'partie_id'=>'1',
                'nom_fichier'=>'Attestation de visite des lieux.'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Moyens humains et techniques.'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Liste des cadres.'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'CV (signés par l’intéressé et le soumissionnaire si demandé).	'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Copie conforme à l’original du des diplômes.'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Copie conforme à l’original du contrat ANAPEC pour les personnes sous contrat ANAPEC.'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Liste de matériel nécessaire'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Références techniques : résumé des réalisations + copie des références des clients avec détail.'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Description de la société : historique de l’activité et autres exigences du CPS.'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Planning de réalisations et des livraisons : en fonctions des délais du CPS.'
            ],
            [
                'partie_id'=>'2',
                'nom_fichier'=>'Méthodologie si exigée par CP.'
            ],
            [
                'partie_id'=>'3',
                'nom_fichier'=>'L’acte d’engagement (voir modèle dans l’ouvrage), cacher et signer + lu et approuver Enveloppe.'
            ],
            [
                'partie_id'=>'3',
                'nom_fichier'=>'Bordereau des prix et détail estimatif (voir modèle), parapher et signer, approuver (voir CPS).	'
            ],
            [
                'partie_id'=>'3',
                'nom_fichier'=>'Caution provisoire (si la CP est un pourcentage du montant de l’acte d’engagement).	'
            ]
        ];

        foreach($pieces_a_preparer as $piece){
            Piece_a_preparer::create($piece);
        }
    }
}
