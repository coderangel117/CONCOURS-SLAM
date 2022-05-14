<?php
require_once __DIR__ . '/elements/header.php';
?>
    <form action="">
        <label for="login">Entrez votre identifiant</label>
        <input id="login"  type="text"><br>
        <label for="password">Entrez votre mot de passe</label>
        <input id="password"  type="password"><br>
<button type="submit" name="btnconfirmlogin" id="btnconfirmlogin"> Valider</button>
    </form>
<?php
require_once __DIR__ . '/elements/footer.php';