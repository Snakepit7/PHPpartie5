<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo1</title>
  </head>
  <body>
      <?php
        $months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
         
        for ($numero = 0; $numero < 11; $numero++) {

        echo $months[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.

        }
      ?>
  </body>
</html>