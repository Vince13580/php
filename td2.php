<?php
include'utils.inc.php';
start_page('TD2');
?>



<form action="data-processing.php" method="post">
    <input  type="text" name="Identifiant" value="identifiant"/><br>
    <input  type="radio" name="Civilité" value="M"/>
    <input  type="radio" name="Civilité" value="F"/><br>
    <input  type="text" name="E-mail" VALUE="Adresse Email"/><br>
    <input  type="password" name="Mot de passe"value="mot de passe"/><br>
    <input  type="password" name="Vérification mot de passe" value="vérification mdp"/><br>
    <input  type="text" name="Téléphone" value="numéro de téléphone"/><br>
    <select name="Pays"><br>
        <option value='France'>France</option>
        <option value='Slovénie'>Slovénie</option>
        <option value='Italie'>Italie</option>
    </select>
    <input type="checkbox" name="conditions_générales"/><br>
    <input type="submit" name ="action" value="mailer"/><br>


<?php
end_page();
?>

