<?php

    include "utils.inc.php";
    start_page('Connexion')
?>
<form action="test-pass.php" method="post">
    <input  type="text" name="Login" value="Login"/><br>
    <input  type="password" name="Mdp"value="mot de passe"/><br>
    <imput type="submit" value="ok"><br>

</form>
