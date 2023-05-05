<?php

session_start();

require_once "connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Accueil Société Lafleur</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="css/accueil.css" />
</head>

<body>

    <div id="bloc_page">
        <header>
        	<p id="logo"><img width=50 height="50" src="images/ACCUEIL.JPG"  /></p>
                <h1>Société Lafleur</h1>
                <h4>6, cloitre St Aignan</h4>
                <h4>45000 Orléans</h4>
        </header>
        <div id="centre">
                <nav>
                        <p id="accueil"><a href="index.php" >Accueil</a></p> 
                        <p id="pdt">Nos produits</p>
                        <?php
                            $sql = "SELECT * FROM categorie";
                            $sql = $connect->prepare($sql);
                            $sql->execute();
    
                            if ($sql->rowCount() == 0) {
                                echo"<p>Il n'y a aucune catégorie(s) disponible</p>";
                            } else {
                                echo"<p>Nombre de catégori(e) : ".$sql->rowCount()."</p>";
                            }
                    
                            while ($ligne = $sql->fetch()) { 
                                echo'<div>
                                        <table>
                                            <tr>
                                                <strong><a href=categorie.php?id='.$ligne['cat_code'].'>'.$ligne['cat_libelle'].'</a></strong>
                                            </tr>
                            
                                        </table>
                                    </div>';
                            }    
                            $sql->closeCursor(); // enlève le curseur de la requête de $requete
                        ?>
                        </br>
                        </br> 
                        </br> 
                        </br> 
                        </br>
                        <?php if(!isset($_SESSION['user'])): ?>
                        <p id="accueil"><a href="connexion.php" >Connexion</a></p>
                        <?php else : ?>
                        <p id="accueil"><a href="logout.php">Deconnexion</a></p>
                        <?php endif; ?>
                </nav>
                <section>
                        <h3>"Dites-le avec Lafleur"</h3>
                        <p><img  src="images/accueil.jpg"  /></p>
                        <h4> pour recevoir un bon de commande</h4>
                        <h4> Appelez notre service commercial au 03.22.84.65.74 </h4>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
