<?php
include'utils.inc.php';
start_page('TD2');



end_page();
?>
<form action="data-processing.php" method="post">
    <input  type="text" name="Identifiant" value="identifiant"/><br>
    <input  type="radio" name="Civilité" value="M"/>
    <input  type="radio" name="Civilité" value="F"/>
    <input  type="text" name="E-mail" VALUE="Adresse Email"/><br>
    <input  type="password" name="Mot de passe"value="mot de passe"/><br>
    <input  type="password" name="Vérification mot de passe" value="vérification mdp"/><br>
    <input  type="text" name="Téléphone" value="numéro de téléphone"/><br>
    <select name="Pays"><br>
        <option value='France'>France</option>
        <option value='Slovénie'>Slovénie</option>
        <option value='Italie'>Italie</option>
    </select>
    <input type="checkbox" name="conditions générales"/><br>
    <input type="submit" name ="action" value="mailer"/><br>




