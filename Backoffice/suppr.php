<!DOCTYPE html>
<html lang="en">

<head>
    <title>Accueil Société Lafleur</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="fleursgp1.css" />
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
                        <p id="accueil"><a href="accueillafleur.php" >Accueil</a></p> 
                        <p id="pdt">Nos produits</p>
                        <p id="accueil"><a href="accueillafleur.php" >Bulbes</a></p>
                        <p id="accueil"><a href="accueillafleur.php" >Plantes à massif</a></p>
                        <p id="accueil"><a href="accueillafleur.php" >Rosier</a></p> 
                        </br>
                        </br> 
                        </br> 
                        </br> 
                        </br>
                        <p id="accueil"><a href="accueillafleur.php" >Connexion</a></p>
                </nav>
                <section>
                        <?php
                        /** 
                        * Doc (connection a base donnée sql) @sqlconnect.php 
                        * php version 8.1.0
                        *  
                        * @category Verif_Acset_Base_Donnée
                        *  
                        * @package Pdo
                        * 
                        * @author Adrien Cirade <ZaMonolith@gmail.com>
                        * 
                        * @license GIT: 
                        * 
                        * @link localhost
                        **/
                        require 'sqlconnect.php';
                        $isbn=$_GET["type"];
        
                        $sql= "DELETE FROM book_reviews WHERE isbn='" . $isbn . "' ;";
                        $requete = $connection->prepare($sql);
                        $requete->execute();

                        $sql= "DELETE FROM orders WHERE isbn='" . $isbn . "' ;";
                        $requete = $connection->prepare($sql);
                        $requete->execute();

                        $sql= "DELETE FROM order_items WHERE isbn='" . $isbn . "' ;";
                        $requete = $connection->prepare($sql);
                        $requete->execute();

                        $sql= "DELETE FROM books WHERE isbn='" . $isbn . "' ;";
                        $requete = $connection->prepare($sql);
                        $requete->execute();
                        ?>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
