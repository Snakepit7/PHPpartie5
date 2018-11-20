<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo7</title>
  </head>
  <body>
      <?php
        $departements = array (
                            02 => 'Aisne',
                            59 => 'Nord',
                            60 => 'Oise',
                            62 => 'Pas-de-Calais',
                            80 => 'Somme',
        );
       
        $departements [51] = 'Reims';
        
        echo $departements [51];
        
      ?>
  </body>
</html>