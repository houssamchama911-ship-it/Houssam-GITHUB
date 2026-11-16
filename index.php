<?php
$taches=[
[
'id' => 1,
'titre' => 'Créer une maquette HTML',
'description' => 'Réaliser la structure HTML de la page d’accueil.',
'date_limite' => '2026-11-15',
'priorite' => 'Moyenne',
'terminee' => false
],
[
'id' => 2,
'titre' => 'Intégrer les styles CSS',
'description' => 'Appliquer les couleurs et les espacements.',
'date_limite' => '2026-12-16',
'priorite' => 'Basse',
'terminee' => true
],
[
'id' => 3,
'titre' => 'Créer les fonctions PHP',
'description' => 'Organiser les traitements de la Todo List.',
'date_limite' => '2026-01-06',
'priorite' => 'Haute',
'terminee' => false
],
[
'id' => 4,
'titre' => 'Tester l application',
'description' => 'Vérifier le bon fonctionnement et corriger les erreurs.',
'date_limite' => '2026-11-15',
'priorite' => 'Moyenne',
'terminee' => false
],
[
'id' => 5,
'titre' => 'Préparer la collection des tâches',
'description' => 'Créer un tableau multidimensionnel avec 8 tâches.',
'date_limite' => '2026-11-15',
'priorite' => 'Haute',
'terminee' => true
],
[
'id' => 5,
'titre' => 'Afficher les statistiques',
'description' => 'Calculer et afficher le total, les taches terminées et non terminées.',
'date_limite' => '2026-11-15',
'priorite' => 'Basse',
'terminee' => false
],
[
'id' => 6,
'titre' => 'Créer une maquette HTML',
'description' => 'Réaliser la structure HTML de la page d accueil.',
'date_limite' => '2026-11-15',
'priorite' => 'Haute',
'terminee' => true
],
[
'id' => 7,
'titre' => 'Organiser les fichiers du projet',
'description' => 'Créer un dossier pour le projet et y placer les fichiers (index.php, style.css).',
'date_limite' => '2026-11-15',
'priorite' => 'Haute',
'terminee' => true
],
[
'id' => 8,
'titre' => 'Vérifier l affichage des tâches',
'description' => 'Tester tous les cas (terminée et non terminée) et corriger le style.',
'date_limite' => '2026-11-15',
'priorite' => 'Moyenne',
'terminee' => false
],

];

$totalTaches = count($taches);
$tachesTerminees = 0;

foreach ($taches as $tache) {
    if ($tache['terminee'] === true) {
        $tachesTerminees++;
    }
}

$tachesRestantes = $totalTaches - $tachesTerminees;





require("time.php");
?>