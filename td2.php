<?php
include'utils.inc.php';
start_page('TD2');



end_page();
?>
<form action="data-processing.php" method="post">
    <input  type="text" name="Identifiant"/>
    <input  type="radio" name="Civilité"/>
    <input  type="text" name="E-mail"/>
    <input  type="password" name="Mot de passe"/>
    <input  type="password" name="Vérification mot de passe"/>
    <input  type="text" name="Téléphone"/>
    <select name="Pays">
        <option value="France"></option>
        <option value="Slovénie"></option>
        <option value="Italie"></option>
    </select>
    <input type="checkbox" name="conditions générales"/>
    <input type="submit" name ="soumettre"/>




