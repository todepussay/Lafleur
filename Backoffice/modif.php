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
                <h1>FNAC : Mise à jour</h1>
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
                        $conv=$_GET["prixlivre"];
                        $prix=(float) $conv;
                        $ID=$_GET['isbn'];

                        if ($nom!='') {
                                $sql= 'UPDATE books SET title= :param01 WHERE isbn= "'. $ID . '";';
                                $requete = $connection->prepare($sql);
                                $requete->bindValue(":param01", $nom);
                                $requete->execute();
                        } else {
                                echo "Erreur, champ vide.";
                        }

                        if ($autheur!='') {
                                $sql= 'UPDATE books SET author= :param01 WHERE isbn= "'. $ID . '";';
                                $requete = $connection->prepare($sql);
                                $requete->bindParam(":param01", $autheur);
                                $requete->execute();
                        } else {
                                echo "Erreur, champ vide.";
                        }

                        if ($prix!='') {
                                $sql= 'UPDATE books SET price = :param01 WHERE isbn= "'. $ID . '";';
                                $requete = $connection->prepare($sql);
                                $requete->bindParam(":param01", $prix);
                                $requete->execute();
                        } else {
                                echo "Erreur, champ vide.";
                        }

                        echo 'Le livre a bien été modifié.'; 

                        ?>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
