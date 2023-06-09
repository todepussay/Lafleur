<?php

session_start();

require_once "connect.php";

if (!isset($_GET["ref"])){
    header("Location: index.php");
} else {

    $sql = "SELECT * FROM produit WHERE pdt_ref = :ref";
    $sql = $connect->prepare($sql);
    $sql->bindValue(":ref", $_GET["ref"]);
    $sql->execute();
    $result = $sql->fetchAll();

    if (count($result) != 1){
        header("Location: index.php");
    } else {
        $produit = $result[0];
    }

}

$existant = false;

if (isset($_POST['quantite'])){
    if (!isset($_SESSION['user'])){
        header("Location: connexion.php");
    } else {
        if (!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }

        for ($i = 0; $i < count($_SESSION['panier']); $i++){
            if ($_SESSION['panier'][$i]["ref"] == $_GET["ref"]){
                $_SESSION['panier'][$i]["quantite"] += $_POST["quantite"];
                $existant = true;
            }
        }

        if (!$existant){
            $_SESSION['panier'][] =  array("ref" => $_GET["ref"], "quantite" => intval($_POST["quantite"]));
        }
    }
    var_dump($_SESSION);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/produit.css">
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

                    <h2>Produit</h2>

                    <div class="box">
                        <div class="img-box">
                            <img src="images/<?= $produit["pdt_image"] ?>.jpg" alt="Image Produit">
                        </div>
                        <div class="content-box">
                            <h3><?= $produit["pdt_designation"] ?></h3>
                            <p><?= $produit["pdt_prix"] ?>€</p>
                        </div>
                    </div>

                    <form action="#" method="post">
                        <input type="number" name="quantite" id="quantite" min="1" max="100" value="1">
                        <input type="submit" value="Ajouter au panier">
                    </form>




                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
    
</body>
</html>