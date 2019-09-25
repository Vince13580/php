<?php
include'utils.inc.php';
start_page('TD2');



end_page();
?>
<form action="data-processing.php" method="post">
    <input  type="text" name="Identifiant" value="identifiant"/>
    <input  type="radio" name="Civilité" value="M"/>
    <input  type="radio" name="Civilité" value="F"/>
    <input  type="text" name="E-mail" VALUE="Adresse Email"/>
    <input  type="password" name="Mot de passe"value="mot de passe"/>
    <input  type="password" name="Vérification mot de passe" value="vérification mdp"/>
    <input  type="text" name="Téléphone" value="numéro de téléphone"/>
    <select name="Pays">
        <option value='France'>France</option>
        <option value='Slovénie'>Slovénie</option>
        <option value='Italie'>Italie</option>
    </select>
    <input type="checkbox" name="conditions générales" value="accepter les conditions générales"/>
    <input type="submit" name ="action" value="mailer"/>




