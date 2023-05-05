<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/connexion.css">
</head>
</html>
<?php
// Connexion à la base de données

require_once "connect.php";

// Vérification de la connexion
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Traitement du formulaire d'inscription
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    // Requête SQL pour vérifier si le nom d'utilisateur existe déjà dans la base de données
    $sql = "SELECT * FROM users WHERE email='$login'";
    $sql = $connect->prepare($sql);
    $sql->execute();
    $sql = $sql->fetchAll();
    
    // Vérification du résultat de la requête
    if (count($sql) > 0) {
        // Si le nom d'utilisateur existe déjà, afficher un message d'erreur
        echo "<p style='color:#FF0000';>Ce nom d'utilisateur est déjà pris.</p>";
    } else {
        // Sinon, insérer le nouveau nom d'utilisateur et mot de passe dans la base de données
        $sql2 = "INSERT INTO users (email, password) VALUES ('$login', '$password')";
        $sql2 = $connect->prepare($sql2);
        $result = $sql2->execute();

        if ($result) {
            // Si l'insertion a réussi, rediriger vers la page de connexion
            header("Location: Connexion.php");
        } else {
            // Si l'insertion a échoué, afficher un message d'erreur
        echo "<p style='color:#FF0000';>Erreur lors de l'inscription.</p>";
    }
}
}

// Fermeture de la connexion à la base de données
?>
<!DOCTYPE html>
<html>
<head>
<title>Inscription</title>
</head>
<body>
<form method="post">
    <titre for="titre">Inscription</titre>
    <br>
    <label for="login">Nom d'utilisateur :</label>
    <input type="text" name="login" required>
    <br>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required>
    <br>
    <input type="submit" value="S'inscrire">
    <a href="Connexion.php">retour</a>
</form>
</body>
</html>