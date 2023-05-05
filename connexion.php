<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/connexion.css">
</head>
</html>
<?php
// Connexion à la base de données

require "connect.php";

// Vérification de la connexion
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Traitement du formulaire de connexion
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    // Requête SQL pour vérifier le login et le mot de passe dans la base de données
    $sql = "SELECT * FROM users WHERE email= '$login' AND password= '$password'";
    $sql = $connect->prepare($sql);
    $sql->execute();
    $result = $sql->fetchAll();
    
    // Vérification du résultat de la requête
    if (count($result) > 0) {
        $_SESSION['user'] = $login;
        // Si les informations de connexion sont valides, rediriger vers la page d'accueil
        header("Location: accueil.php");
    } else {
        // Si les informations de connexion sont invalides, afficher un message d'erreur
        echo "<p style='color:#FF0000';>Nom d'utilisateur ou mot de passe incorrect.</p>";
    }
}

// Fermeture de la connexion à la base de données
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <form method="post">
        <titre for="titre">Connexion</titre>
        <br>
        <label for="login">Nom d'utilisateur :</label>
        <input type="text" name="login" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Se connecter">
        <a href="inscription.php">Inscription</a>
        
    </form>
</body>
</html>