<?php

// Validation du formulaire

if (isset($_POST['email']) &&  isset($_POST['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
            ];
        } else {
            $errorMessage = sprintf
            ('Les informations envoyées ne permettent pas de vous identifier : 
                (%s/%s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}
?>

<!--
   Si utilisateur est non identifié on affiche ce formulaire
-->
<?php if(!isset($loggedUser)): ?>
<form action="home.php" method="post">

<!-- si message d'erreur on l'affiche -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Votre adresse mail</label>
        <input type="email" class="form-control" id="email" 
        name="email" aria-describedby="email-help" placeholder="email@exemple.com">
        <br>
        <div id="email-help" class="form-text">
        Vous devez entrer l'adresse mail utilisé 
        lors de l'activation de votre compte.</div>
    </div>
    <br>
    <br>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<!-- 
    connectée. on affiche un message de succès à la connection. 
-->
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $loggedUser['email']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>
