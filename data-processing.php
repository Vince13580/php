<?php

$Id=$_POST['Identifiant'];
$Civ=$_POST['Civilité'];
$email=$_POST['E-mail'];
$mdp=$_POST['Mot de passe'];
$vmdp=$_POST['Vérification mot de passe'];
$tel=$_POST['Téléphone'];
$pays=$_POST['Pays'];
$action=$_POST['action'];




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