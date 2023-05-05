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
                        <h3>Ajout d'un produit</h3>
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

                        $nom=$_GET["nomlivre"];
                        $autheur=$_GET["authlivre"];
                        $prix=$_GET["prixlivre"];
                        $isbn=$_GET["isbnlivre"];

                        $param01=$isbn;
                        $param02=$autheur;
                        $param03=$nom;
                        $param04=$prix;

                        $sql= "INSERT INTO books (isbn, author, title, price) VALUES (:recher01, :recher02, :recher03, :recher04);";

                        $requete = $connection->prepare($sql);
                        $requete->bindParam(":recher01", $param01);
                        $requete->bindParam(":recher02", $param02);
                        $requete->bindParam(":recher03", $param03);
                        $requete->bindParam(":recher04", $param04);
                        $requete->execute();

                        echo '<p class="thick"> Titre: ' . $nom . ' </p> Auteur: ' . $autheur . ' </br> ISNB: ' . $isbn . ' </br> Prix: ' . $prix . "</br>";

                        ?>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
