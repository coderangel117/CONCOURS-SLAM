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
        <br>
        <label> Veuillez cocher la case pour continuer
            <input type="checkbox" name="rgpd" id="rgpd" onchange="Accept_RGPD()">
        </label><br>
        <p>     En créant votre compte vous acceptez le traitement de vos données.
        Pour rappel vous avez le droit d'accès de consultation, de modification et de suppression à tout moment </p>
        <br>
        <button type="submit" name="btnconfirmlogin" id="btnconfirmlogin" disabled > Valider</button> <!--le bouton est désactivé tant que la case au dessus n'est pas cochée-->
    </form>
    <script>
        let check_RGPD = document.getElementById('rgpd');
        let validate = document.getElementById('btnconfirmlogin');
        function Accept_RGPD() {
            if (check_RGPD) {
                validate.removeAttribute('disabled')
            }
        }
    </script>
<?php
require_once __DIR__ . '/elements/footer.php';?>