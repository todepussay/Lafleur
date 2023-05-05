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
                        <form action="miseajour.php" method="GET">
                                <h3>Choisissez votre mise à jour:</h3>

                                <input type="radio" name="maj" value="add">
                                <label for="Ajouter">Ajouter</label><br>

                                <input type="radio" name="maj" value="mod">
                                <label for="Modifier">Modifier</label><br>

                                <input type="radio" name="maj" value="del">
                                <label for="Supprimer">Supprimer</label><br>

                                <p><input type="reset" value="Annulez"><input type="submit" value="OK"></p>
                        </form>
                </section>
        </div>
        <footer>
                <h2>&reg; copyrights Groupe 1 r&eacute;alis&eacute; le 07/04/2023 </h2>
        </footer>
    </div>
</body>
</html>