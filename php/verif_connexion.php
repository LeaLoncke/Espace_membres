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

        $pseudo = htmlspecialchars($_POST['pseudo_connexion']);
        $pass = htmlspecialchars($_POST['pass_connexion']);

        // Retrieves the id and password when the form's nickname matches one of the 'members' table nicks
        $req = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
        $req->execute(array(
          'pseudo' => $pseudo
        ));
        $result = $req->fetch();

        // Check that the form's password matches the table's password
        $isPasswordCorrect = password_verify($pass, $result['pass']);

        if ($isPasswordCorrect === false) {
          ?>
          <p>Pseudo ou mot de passe incorrect, <a href="connexion.php">retournez au formulaire de connexion</a>.</p>
          <?php
        } else if ($isPasswordCorrect === true) {
          header("Location: deconnexion.php");
        }


        // if (isset($_POST['connexion_auto'])) {
        //   $connexion = $_POST['connexion_auto'];
        //   ...
        // }


      }

     ?>

  </body>
</html>
