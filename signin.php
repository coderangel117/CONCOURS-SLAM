<?php
require_once __DIR__ . '/elements/header.php';
?>
    <form method="POST">
        <label for="login">Entrez votre identifiant</label>
        <input id="login" type="text"><br>
        <label for="password">Entrez votre mot de passe</label>
        <input id="password" type="password"><br>
        <label for="confirmPassword">Confirmer votre mot de passe</label>
        <input id="confirmPassword" type="password"><br>
        <button type="submit" name="btnconfirmlogin" id="btnconfirmlogin"> Valider</button>
        <br>
        <label> Veuillez cocher la case pour continuer
            <input type="checkbox" name="rgpd">
        </label><br>
        <p>     En créant votre compte vous acceptez le traitement de vos données.
        Pour rappel vous avez le droit d'accès de consultation, de modification et de suppression à tout moment </p>
        <br>
    </form
<?php
require_once __DIR__ . '/elements/footer.php';