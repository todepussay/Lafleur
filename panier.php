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
                        <p id="accueil"><a href="#" >Accueil</a></p> 
                        <p id="pdt">Nos produits</p>
                        <p id="accueil" ><a href="categorie.php?id=bul" >Bulbes</a></p>
                        <p id="accueil"><a href="categorie.php?id=mas" >Plantes à massif</a></p>
                        <p id="accueil"><a href="categorie.php?id=ros" >Rosier</a></p> 
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
                        
                    <h3>Mon panier</h3>

                            

                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
