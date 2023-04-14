<!DOCTYPE html>
<html>
  <head>
    <title>Page de connexion</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Page de connexion</h1>
    <form action="login.php" method="post">
      <label for="username">Nom d'utilisateur:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="password">Mot de passe:</label>
      <input type="password" id="password" name="password" required><br><br>
      <input type="reset" value="annuler">
      <br>
      <input type="submit" value="Se connecter">
    </form>
  </body>
</html>
