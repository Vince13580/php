<?php

$Id=$_GET['Identifiant'];
$Civ=$_GET['Civilité'];
$email=$_GET['E-mail'];
$mdp=$_GET['Mot de passe'];
$vmdp=$_GET['Vérification mot de passe'];
$tel=$_GET['Téléphone'];
$pays=$_GET['Pays'];




if($action=='mailer'){

    $message='Voici vos identifiants d\'inscription:'.PHP_EOL;
    $message.='Email:'.$email.PHP_EOL;
    $message.='Motdepasse:'.PHP_EOL.$mdp;
    mail('thouvenel.vincent@gmail.com', 'test' , $message);
}
else {
    echo '<br/><strong>Boutonnongéré!</strong><br/>';
}
?>