<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listeCategorie</title>
</head>
<body>
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
</body>
</html>