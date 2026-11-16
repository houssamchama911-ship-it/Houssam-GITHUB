<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Todo List</title>
  <link rel="stylesheet" href="Ex8.css">
</head>
<body>
<header class="en-tete">
    <img class="img1" alt="falseimg" src="image/calendar-check.png">
    <div class="texte1">
            <h2 class="titre1">Ma Todo List</h2>
             <p class="p1">Gérez et suivez vos tàche quotidiennes</p>
     </div>


</header>

<section class="cartes">
    <div class="carte1">
        <img class="img2" alt="#" src="image/layers.png">
        <div class="c1">
        <span>Total</span>
        <strong><?= $totalTaches ?></strong>
        <small>tâches</small>
        </div>
    </div>
    <div class="carte2">
        <img class="img2" alt="#" src="image/circle-check-big.png">
        <div class="c2">
        <span>Terminées</span>
        <strong><?= $tachesTerminees ?></strong>
        <small>tâches</small>
        </div>

    </div>
    <div class="carte3">
        <img class="img2" alt="#" src="image/circle.png">
        <div class="c3">
        <span>Non terminées</span>
        <strong><?= $tachesRestantes ?></strong>
        <small>tâches</small>
        </div>

    </div>
</section >



    <div class="final">
    <img class="img3" alt="imagefalse" src="image/list.png">
     <h2 class="titre2">Liste des tache ___________________________________________________________________________________</h2>
    </div>
    


<?php foreach($taches as $tache):?>


    
    <div class="liste-tudo <?=  $tache['terminee'] ? 'terminee' : 'a-faire'; ?>">
            <div class="liste">
                
                
                <div class="content-tach">
                    <input type="checkbox" <?= $tache['terminee'] ? 'checked' : '' ?> >
                    <div class="description">
                        <h4><?= $tache['titre']; ?></h4>
                        <p><?= $tache['description']; ?></p>
                    </div>
                </div>

                <div class="badge-right">
                <span class="badge <?=  $tache['priorite'] === "Haute"? "Haute": ($tache['priorite'] === "Moyenne"? "Moyenne" : "Basse"); ?>">
                    
                    <?= htmlspecialchars($tache['priorite']) ?>
                </span>

                <span class="date">
                    <img class="img3" alt="falseimg" src="image/calendar.png">
                    <i data-lucide="calendar"></i> <?= date('d/m/Y', strtotime($tache['date_limite'])); ?>
                </span>
                </div>
               
                
                

                </span>
                 </div>
            </div>

            
        </div>

        <?php endforeach;?>
        
  </body>
</html>



    

