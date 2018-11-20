<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exo9</title>
    </head>
    <body>
        <?php
        //Création du tableau associatif
        $deptArray = array(
            02 => 'Aisne',
            59 => 'Nord',
            60 => 'Oise',
            62 => 'Pas-de-Calais',
            80 => 'Somme',
        );
        //Boucle foreach qui permet d'afficher le contenu du tableau
        //On va chercher $month dans le tableau $monthArray, puis afficher le résultat avec un echo
        foreach ($deptArray as $deptNb => $deptName) {
            echo $deptNb . ' ' . $deptName;
            ?><br />
            <?php
        }
        ?>
    </body>
</html>