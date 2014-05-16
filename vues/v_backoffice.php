<!-- PARTIE DECONNEXION -->

<form action='' method="post">
    <p><input type="submit" name="logout" value="Déconnexion" /></p>
</form>

<?php
if(isset($_POST['logout'])) {   
    session_destroy();
    header("Location: ".dirname($_SERVER['SCRIPT_NAME']).""); /* RETOURNE A L'ACCUEIL */
}
?>