<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfficheFleur</title>
</head>
<body>
    <h1>Sélection de fleurs</h1>
    <?php

        /**
         * Modification
         *
         * PHP version 7.4.26
         *
         * @category   CategoryName
         * @package    PackageName
         * @author     StevenT <StevenT@example.com>
         * @copyright  2023 StevenT
         * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
         * @link       http://pear.php.net/package/PackageName
         * @see        NetOther, Net_Sample::Net_Sample()
         * @since      File available since Release 1.2.0
         * @deprecated File deprecated in Release 2.0.0
         */

        // Connection au serveur
        
        require_once 'sqlconnect.php';

        $filtre = $_REQUEST['Selection']
        
        $Recherche = "SELECT pdt_image FROM produit WHERE pdt_categorie = $filtre";
        $table = $connection->query($Recherche);
        $table->execute();

        while ($ligne = $table->fetch()) {
            echo $ligne;
        }

    ?>

</body>
</html>

