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
                        <h3>Mise à jour de la base de données.</h3>
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

                        $type=$_GET["maj"];

                        // verification du type de chaine
                        if ($type=="add") {
                                echo '<form action="ajout.php" method="GET">';
                                echo "Ajout d'un livre:<br><br>";

                                echo "Entrer le nom du livre.<br>";
                                echo '<input type="text" name="nomlivre"/><br>';

                                echo "Entrer l'auteur du livre.<br>";
                                echo '<input type="text" name="authlivre"/><br>';

                                echo "Entrer le prix du livre.<br>";
                                echo '<input type="text" name="prixlivre"/><br>';

                                 echo "Entrer l'ISBN du livre.<br>";
                                echo '<input type="text" name="isbnlivre"/><br>';

                                echo '<p><input type="reset" value="Annulez"><input type="submit" value="Valider"></p>';
                                echo '</form>';
                        } else { 
                                if ($type=="mod") {
                                    echo '<form action="maj2.php" method="GET">' ;
                                    echo "Modification d'un livre:<br><br>";

                                    echo "Choisir le livre à modifier.<br>";
                                    $sql = "SELECT * FROM books;";
                                    $requete = $connection->query($sql);
                                    echo '<select name="type">' ;
                                    while ($ligne = $requete->fetch()) {
                                    echo "<option value='$ligne[isbn]'>" . $ligne['title'] . "</option>";
                                }
                                $requete->closeCursor();

                                echo ( "</select><br><br>" );

                                echo '<p><input type="reset" value="Annulez"><input type="submit" value="Valider"></p>';
                                echo '</form>';
                        } else {
                                echo '<form action="suppr.php" method="GET">';
                                echo "Suppression d'un livre:<br><br>";

                                echo "Choisisser le livre à supprimer.<br>"; 
                                $sql = "SELECT * FROM books;";
                                $requete = $connection->query($sql);
                                echo '<select name="type">' ;
                                while ($ligne = $requete->fetch()) {
                                        echo "<option value='$ligne[isbn]'>" . $ligne['title'] . "</option>";
                                }
                                $requete->closeCursor();
                                echo "</select><br><br>";
        
                                echo '<p><input type="reset" value="Annulez"><input type="submit" value="Valider"></p>';
                                echo '</form>';
                                }
                        }

                        ?>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>
