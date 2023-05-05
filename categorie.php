<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorieFleur</title>
</head>
<body>
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
                        <td><strong>'.$ligne['pdt_ref'].'</strong></td>
                    </tr>
                    <tr>
                        <td>'.$ligne['pdt_designation'].'</td>
                    </tr>
                    <tr>
                        <td>'.$ligne['pdt_prix'].'</td>
                    </tr>
                    <tr>
                        <td>'.$ligne['pdt_image'].'</td>
                    </tr>
                </table>
            </div>';
    }    
    $sql->closeCursor(); // enlève le curseur de la requête de $requete
    ?>
</body>
</html>