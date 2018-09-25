<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      // Add connexion to the database
      include 'co_bdd.php';
      // Verifications
      if (isset($_POST['inscription'])) {

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pass = htmlspecialchars($_POST['pass']);
        $verif_pass = htmlspecialchars($_POST['verif_pass']);
        $email = htmlspecialchars($_POST['email']);

        if (isset($pseudo) && !empty($pseudo)) {
          if (isset($pass) && !empty($pass)) {
            if ($verif_pass === $pass) {
              if (isset($email) && !empty($email) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {

                // Check if there is already this pseudo in the database 
                $req = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = :pseudo');
                $req->execute(array(
                  'pseudo' => $pseudo
                ));
                $countPseudo = $req->rowCount();
                  if ($countPseudo < 1) {

                    // Hash the password
                    $pass_hache = password_hash($pass, PASSWORD_DEFAULT);

                    // Add into the database
                    $req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, CURDATE() )');
                    $req->execute(array(
                      'pseudo' => $pseudo,
                      'pass' => $pass_hache,
                      'email' => $email
                    ));


                    ?>
                    <p>Vous avez bien été inscrit(e) !</p>
                    <a href="connexion.php">Se connecter</a>
                    <?php

                  } else {
                    ?>
                    <p>Le pseudo que vous avez entré est déjà utilisé, veuillez choisir un autre pseudo.</p>
                    <a href="../index.php">Retour au formulaire d'inscription</a>
                    <?php
                  }

                $req->closeCursor();

              } else {
                ?>
                <p>Vous n'avez pas entré d'adresse email, <a href="../index.php">retournez au formulaire d'inscription</a>. </p>
                <?php
              }
            } else {
              ?>
              <p>Le deuxième mot de passe ne correspond pas au premier, <a href="../index.php">retournez au formulaire d'inscription</a>. </p>
              <?php
            }
          } else {
            ?>
            <p>Vous n'avez pas entré de mot de passe, <a href="../index.php">retournez au formulaire d'inscription</a>. </p>
            <?php
          }
        } else {
          ?>
          <p>Vous n'avez pas entré de pseudo, <a href="../index.php">retournez au formulaire d'inscription</a>. </p>
          <?php
        }
      }

     ?>


  </body>
</html>
