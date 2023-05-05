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
                <h1>FNAC : Mise à jour de la base de données.</h1>
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


                        echo '<form action="modif.php" method="GET">';
                        echo "Modification d'un livre:<br><br>";

                        $isbn=$_GET["type"];
    

                        $sql= "SELECT title FROM books WHERE isbn='$isbn' ;";
                        $titre = $connection->query($sql);
                        $ligne=$titre->fetch();

                        echo "<form method='get' action='modif.php'>";
                        echo "Entrer le nouveau nom du livre.<br>";
                        echo '<input type="text" name="nomlivre" value="' . $ligne['title'] .'" ><br>';

                        $sql= "SELECT author FROM books WHERE isbn='$isbn' ;";
                        $autheur = $connection->query($sql);
                        $ligne=$autheur->fetch();

                        echo "Entrer le nouvel auteur du livre.<br>";
                        echo '<input type="text" name="authlivre" value="' . $ligne['author'] .'" ><br>';

                        $sql= "SELECT price FROM books WHERE isbn='$isbn' ;";
                        $prix = $connection->query($sql);
                        $ligne=$prix->fetch();

                        echo "Entrer le nouveau prix du livre.<br>";
                        echo '<input type="text" name="prixlivre" value="' . $ligne['price'] .'" ><br>';

                        echo '<p><input type="submit" value="Valider"></p>';
                        ?>
                        <input type='hidden' name='isbn' value="<?php echo $isbn;?>">
                        </form>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
