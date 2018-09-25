<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      include 'co_bdd.php';

      if ( isset($_POST['connexion']) ) {

        $pseudo_connexion = htmlspecialchars($_POST['pseudo_connexion']);
        $pass_connexion = htmlspecialchars($_POST['pass_connexion']);
        // if (isset($_POST['connexion_auto'])) {
        //   $connexion = $_POST['connexion_auto'];
        // }

        



      }

     ?>

  </body>
</html>
