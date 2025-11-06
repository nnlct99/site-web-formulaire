<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealisationsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('realisations')->insert([
            // --- Bardage en alu noir sur façade ---
            [
                'titre' => 'Bardage en alu noir sur façade',
                'description' => 'Pose soignée d’un bardage aluminium noir mat, conférant une esthétique contemporaine et une excellente résistance aux intempéries.',
                'image' => 'bardage-alu1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Bardage en alu noir sur façade',
                'description' => 'Finition homogène et alignement parfait des panneaux pour un rendu architectural élégant.',
                'image' => 'bardage-alu2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Bardage en alu noir sur façade',
                'description' => 'Travail minutieux sur les jonctions et encadrements, alliant précision et esthétisme.',
                'image' => 'bardage-alu3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Bardage en alu noir sur façade',
                'description' => 'Rénovation complète d’une façade avec bardage aluminium noir offrant un contraste moderne et durable.',
                'image' => 'bardage-alu4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Cache moineaux + gouttières ---
            [
                'titre' => 'Cache moineaux et gouttières',
                'description' => 'Installation précise de caches moineaux et gouttières pour une finition propre et fonctionnelle de toiture.',
                'image' => 'goutieres1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Cache moineaux et gouttières',
                'description' => 'Pose harmonieuse alliant esthétique et performance d’évacuation des eaux pluviales.',
                'image' => 'goutieres2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Cache moineaux et gouttières',
                'description' => 'Finition soignée des dessous de toiture et ajustement parfait des éléments d’évacuation.',
                'image' => 'goutieres3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Couvertines ---
            [
                'titre' => 'Couvertines aluminium',
                'description' => 'Réalisation et pose de couvertines sur mesure assurant l’étanchéité et la protection des acrotères.',
                'image' => 'couvertine.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Nettoyage KARCHER ---
            [
                'titre' => 'Nettoyage haute pression',
                'description' => 'Nettoyage complet de toiture et façades au Karcher pour un rendu impeccable.',
                'image' => 'karcher1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Nettoyage haute pression',
                'description' => 'Restauration visuelle grâce à un nettoyage doux et efficace adapté à chaque surface.',
                'image' => 'karcher2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Nettoyage haute pression',
                'description' => 'Élimination des mousses et salissures pour redonner éclat et longévité aux matériaux.',
                'image' => 'karcher3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Pub camion et échafaudage banderole ---
            [
                'titre' => 'Publicité véhicule et chantier',
                'description' => 'Habillage de camion et mise en place de banderole sur échafaudage pour une visibilité optimale sur site.',
                'image' => 'camion-pub.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Publicité véhicule et chantier',
                'description' => 'Communication visuelle cohérente sur supports mobiles et chantiers en cours.',
                'image' => 'echafaudage-banderole.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Réno joint debout alu 7016 ---
            [
                'titre' => 'Rénovation joint debout aluminium 7016',
                'description' => 'Rénovation d’une couverture en aluminium teinte 7016, associant modernité et durabilité.',
                'image' => 'rénovation-joint1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation joint debout aluminium 7016',
                'description' => 'Travaux de précision sur toiture en aluminium gris 7016 avec finitions haut de gamme.',
                'image' => 'rénovation-joint2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation joint debout aluminium 7016',
                'description' => 'Pose des bacs à joint debout selon les normes de résistance au vent et à la pluie.',
                'image' => 'rénovation-joint3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation joint debout aluminium 7016',
                'description' => 'Mise en œuvre complète avec isolation et finitions soignées.',
                'image' => 'rénovation-joint4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Réno lucarne ---
            [
                'titre' => 'Rénovation de lucarne',
                'description' => 'Remise à neuf d’une lucarne avec habillage aluminium et étanchéité renforcée.',
                'image' => 'rénovation-lucarne1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation de lucarne',
                'description' => 'Travaux précis sur les contours et la jonction de toiture pour une intégration parfaite.',
                'image' => 'rénovation-lucarne2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation de lucarne',
                'description' => 'Finitions aluminium garantissant durabilité et esthétique pour les ouvertures de toit.',
                'image' => 'rénovation-lucarne3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Tourelle ---
            [
                'titre' => 'Rénovation tourelle et couverture',
                'description' => 'Travaux de rénovation d’une tourelle avec finitions précises sur éléments arrondis et étanchéité soignée.',
                'image' => 'kiosque1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation tourelle et couverture',
                'description' => 'Pose méticuleuse des éléments courbes pour un rendu élégant et durable.',
                'image' => 'kiosque2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation tourelle et couverture',
                'description' => 'Habillage complet d’une tourelle avec traitement contre l’humidité et corrosion.',
                'image' => 'kiosque3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation tourelle et couverture',
                'description' => 'Reconstruction d’une toiture circulaire complexe en aluminium joint debout.',
                'image' => 'kiosque4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation tourelle et couverture',
                'description' => 'Fabrication sur mesure des bacs arrondis pour épouser la forme unique de la tourelle.',
                'image' => 'kiosque5.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation tourelle et couverture',
                'description' => 'Travaux d’ajustement final et contrôle d’étanchéité complet.',
                'image' => 'kiosque6.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Rénovation tourelle et couverture',
                'description' => 'Pose terminée offrant un rendu architectural remarquable et durable.',
                'image' => 'kiosque7.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Traitement toiture ---
            [
                'titre' => 'Traitement de toiture',
                'description' => 'Application d’un traitement protecteur contre mousses et lichens pour prolonger la durée de vie de la toiture.',
                'image' => 'traitement-toiture1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Traitement de toiture',
                'description' => 'Nettoyage, démoussage et traitement hydrofuge pour toiture tuiles et ardoises.',
                'image' => 'traitement-toiture2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Traitement de toiture',
                'description' => 'Protection efficace et durable des matériaux contre les infiltrations d’eau.',
                'image' => 'traitement-toiture3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Traitement de toiture',
                'description' => 'Résultat final d’un traitement complet : toiture propre, saine et éclatante.',
                'image' => 'traitement-toiture4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Traitement de toiture',
                'description' => 'Application homogène du produit protecteur avec finitions soignées.',
                'image' => 'traitement-toiture5.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Traitement de toiture',
                'description' => 'Travaux terminés : toiture protégée et durablement embellie.',
                'image' => 'traitement-toiture6.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // --- Velux verrière ---
            [
                'titre' => 'Installation Velux et verrière',
                'description' => 'Pose de fenêtres de toit Velux et verrière pour un apport maximal de lumière naturelle.',
                'image' => 'velux1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Installation Velux et verrière',
                'description' => 'Intégration parfaite des Velux dans la couverture existante avec finitions étanches.',
                'image' => 'velux2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Installation Velux et verrière',
                'description' => 'Création d’un puits de lumière naturel pour améliorer le confort intérieur.',
                'image' => 'velux3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Installation Velux et verrière',
                'description' => 'Résultat final : luminosité accrue et finitions intérieures soignées.',
                'image' => 'velux4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
