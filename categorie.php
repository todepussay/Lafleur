<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/accueil.css" />
    <title>categorieFleur</title>
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
                    <?php
                        require 'connect.php';
                        $id = $_GET['id'];

                        //echo"<p>id = $id</p>";//DEBUG : affiche l'id de la catégorie

                        $sql = "SELECT * FROM produit WHERE pdt_categorie = :id";
                        $sql = $connect->prepare($sql);
                        $sql->bindParam(':id', $id);
                        $sql->execute();

                        if ($sql->rowCount() == 0) {
                            echo"<p>Aucun produit dans cette catégorie</p>";
                        } else {
                            echo"<p>Nombre de résultat : ".$sql->rowCount()."</p>";
                        }
                    
                        while ($ligne = $sql->fetch()) { 
                            echo'<div class="tableauSQL">
                                    <table>
                                        <tr>
                                            <td><strong>'.$ligne['pdt_designation'].'</strong></td>
                                            <td>'.$ligne['pdt_prix'].'€'.'</td>
                                            <td>'."<img src='images/".$ligne['pdt_image']."' width='100' height='100'>".'</td>
                                            <td><a href="produit.php?ref='.$ligne['pdt_ref'].'">Voir le produit</a></td>
                                        </tr>
                        
                                    </table>
                                </div>';
                        }    
                        $sql->closeCursor(); // enlève le curseur de la requête de $requete
                    ?>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
    
</body>
</html>