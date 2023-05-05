<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conn = mysqli_connect('localhost', 'root', '', 'login');
  if (!$conn) {
    die('Erreur de connexion à la base de données: ' . mysqli_connect_error());
  }
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $query = "SELECT * FROM login_password WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('Location: index.html');
    exit();
  } else {
    echo "Nom d'utilisateur ou mot de passe incorrect";
  }
  mysqli_close($conn);
}
?>
