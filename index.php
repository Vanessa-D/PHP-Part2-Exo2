<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 2</title>
</head>
<body>
    <p>
        Créer deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100.</br>
        Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième et afficher le résultat : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            /* On déclare la variable j qui contient un nombre random entre 1 et 100 */
            $j = mt_rand(1,100);
            /* Boucle tant que i<20... */
            for($i = 0; $i < 20; $i++){
                echo $i. ' x ' .$j. ' = ' .$i*$j. '<br>'; /* ... calcul de i x j qu'on affiche*/
                $j = mt_rand(1,100); /* et on attribue un nouveau random à j */
            }
        ?>
    </div>
</body>
</html>