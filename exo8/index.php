<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exo8</title>
    </head>
    <body>
        <?php
        //Création du tableau
        $monthsArray = array(
            'Janvier',
            'Février',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            'Juillet',
            'Août',
            'Septembre',
            'Octobre',
            'Novembre',
            'Décembre'
        );
        //Boucle foreach qui permet d'afficher le contenu du tableau
        //On va chercher $month dans le tableau $monthArray, puis afficher le résultat avec un echo
        foreach ($monthsArray as $month) {
            echo $month;
            ?><br /><?php
        }
        ?>
    </body>
</html>