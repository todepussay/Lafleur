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
                        <p id="accueil"><a href="accueillafleur.php" >Base de donnée</a></p> 
                        </br>
                        </br> 
                        </br> 
                        </br> 
                        </br>
                        <p id="accueil"><a href="accueillafleur.php" >Deconnexion </a></p>
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

                        $ref=$_GET["reffleur"];
                        $nom=$_GET["nomfleur"];
                        $prix=$_GET["prixfleur"];
                        $image=$_GET["imagefleur"];
                        $categorie=$_GET["catfleur"];

                        $param00=$ref;
                        $param01=$nom;
                        $param02=$prix;
                        $param03=$image;
                        $param04=$categorie;

                        $sql= "INSERT INTO produit (pdt_ref, pdt_designation, pdt_prix, pdt_image, pdt_categorie) VALUES (:recher00, :recher01, :recher02, :recher03, :recher04);";

                        $requete = $connection->prepare($sql);
                        $requete->bindParam(":recher00", $param00);
                        $requete->bindParam(":recher01", $param01);
                        $requete->bindParam(":recher02", $param02);
                        $requete->bindParam(":recher03", $param03);
                        $requete->bindParam(":recher04", $param04);
                        $requete->execute();

                        echo '<p class="thick">Référence: ' . $ref . '</p> Nom: ' . $nom . ' </p> Prix: ' . $prix . ' </br> Image: ' . $image . ' </br> Categorie: ' . $categorie . "</br>";

                        ?>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
