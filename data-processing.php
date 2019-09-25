<?php

$Id=$_GET['Identifiant'];
$Civ=$_GET['Civilité'];
$email=$_GET['E-mail'];
$mdp=$_GET['Mot de passe'];
$vmdp=$_GET['Vérification mot de passe'];
$tel=$_GET['Téléphone'];
$pays=$_GET['Pays'];




if($action=='mailer'){
 echo $email;
 echo  $Civ;
 echo  $pays;
 echo  $Id;
}
else {
    echo '<br/><strong>Boutonnongéré!</strong><br/>';
}
?>