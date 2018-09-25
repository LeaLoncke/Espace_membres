<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>

    <p>Connexion à l'espace membre : </p>

    <form action="verif_connexion.php" method="post">
      <label for="pseudo">Pseudo : </label><br /><input id="pseudo" type="text" name="pseudo_connexion" value="Lapin"><br />
      <label for="pass">Mot de passe : </label><br /><input id="pass" type="password" name="pass_connexion" value="Carotte"><br />
      <label for="connexion_auto">Connexion automatique : </label><input id="connexion_auto" type="checkbox" name="connexion_auto"><br />
      <input type="submit" name="connexion" value="Se connecter" style="margin-top: 10px;">
    </form>

  </body>
</html>
