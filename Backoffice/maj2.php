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
                        $ref=$_GET["type"];
                        echo '<input type="hidden" name="ref" value=' . $ref . '>';
                        echo "Modification d'une fleur:<br><br>";
    

                        $sql= "SELECT pdt_designation FROM produit WHERE pdt_ref='$ref' ;";
                        $titre = $connection->query($sql);
                        $ligne=$titre->fetch();

                        echo "<form method='get' action='modif.php'>";
                        echo "Entrer le nouveau nom de la fleur.<br>";
                        echo '<input type="text" name="nomfleur" value="' . $ligne['pdt_designation'] .'" ><br>';

                        $sql= "SELECT pdt_prix FROM produit WHERE pdt_ref='$ref' ;";
                        $prix = $connection->query($sql);
                        $ligne=$prix->fetch();

                        echo "Entrer le nouveau prix de la fleur.<br>";
                        echo '<input type="text" name="prixfleur" value="' . $ligne['pdt_prix'] .'" ><br>';

                        $sql= "SELECT pdt_image FROM produit WHERE pdt_ref='$ref' ;";
                        $prix = $connection->query($sql);
                        $ligne=$prix->fetch();

                        echo "Entrer la nouvelle image de la fleur.<br>";
                        echo '<input type="text" name="imagefleur" value="' . $ligne['pdt_image'] .'" ><br>';

                        echo '<p><input type="submit" value="Valider"></p>';
                        ?>
                        <input type='hidden' name='pdt_ref' value="<?php echo $ref;?>">
                        </form>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
