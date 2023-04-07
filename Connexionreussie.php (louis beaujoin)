<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
  </head>
  <body>
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>Vous êtes connecté avec succès.</p>
    <form action="logout.php" method="post">
      <input type="submit" value="Se déconnecter">
    </form>
  </body>
</html>
