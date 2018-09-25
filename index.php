<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>

    <p>Inscription à l'espace membre :</p>

    <form action="php/verif_inscription.php" method="post">
      <label for="pseudo">Pseudo : </label><br /><input id="pseudo" type="text" name="pseudo" value="" required><br />
      <label for="pass">Mot de passe : </label><br /><input id="pass" type="password" name="pass" value="" required><br />
      <label for="verif_pass">Vérification du mot de passe : </label><br /><input id="verif_pass" type="password" name="verif_pass" value="" required><br />
      <label for="email">E-mail : </label><br /><input id="email" type="email" name="email" value="" required><br />
      <input type="submit" name="inscription" value="Envoyer" style="margin-top: 10px;">
    </form>

    <p>Déjà inscrit ? <a href="php/connexion.php" >Connectez-vous</a></p>

  </body>
</html>
