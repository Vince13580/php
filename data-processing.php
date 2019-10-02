<?php

$dbLink=mysqli_connect('mysql-thouvenelvincent.alwaysdata.net','174321','Vincent13580')
or die('Erreur de connexion au serveur:'.mysqli_connect_error());

mysqli_select_db($dbLink,'thouvenelvincent_td2')
or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));
$today=date('Y-m-d');




$Id=$_POST['Identifiant'];
$Civ=$_POST['Civilité'];
$email=$_POST['E-mail'];
$mdp=$_POST['Mot_de_passe'];
$vmdp=$_POST['Vérification_mot_de_passe'];
$tel=$_POST['Téléphone'];
$pays=$_POST['Pays'];
$action=$_POST['action'];
$Cg=$_POST['conditions_générales'];






if($action=='mailer'){
    $query= "INSERT INTO user (IDENTIFIANT, CIVILITÉ,MAIL,MOT_DE_PASSE, TÉLÉPHONE, PAYS,DATE) VALUES ('$Id', '$Civ','$email','$mdp','$tel','$pays','$today')";


    $message='Voici vos identifiants d\'inscription:'.PHP_EOL;
    $message.='Email:'.$email.PHP_EOL;
    $message.='Mot de passe:'.$mdp.PHP_EOL;
    mail('thouvenel.vincent@gmail.com', 'test' , $message);
}
else {
    echo '<br/><strong>Bouton non géré!</strong><br/>';
}
if(!($dbResult=mysqli_query($dbLink, $query))) {
    echo 'Erreurdansrequête<br/>';
//Affiche le type d'erreur.
    echo 'Erreur:' . mysqli_error($dbLink) . '<br/>';
//Affiche la requête envoyée.
    echo 'Requête:' . $query . '<br/>';
    exit();
}
else
    echo 'Vous êtes enregistré dans notre base de données!'.PHP_EOL;



?>