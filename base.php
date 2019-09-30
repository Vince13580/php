<?php
 $dbLink=mysqli_connect('mysql-thouvenelvincent.alwaysdata.net','174321','Vincent13580')
    or die('Erreur de connexion au serveur:'.mysqli_connect_error());

mysqli_select_db($dbLink,'thouvenelvincent_td2')
or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));

$query='SELECT ID,E-MAIL,DATE FROM user';

if(!($dbResult=mysqli_query($dbLink, $query)))
{
    echo'Erreur de requête<br/>';
    //Affiche le type d'erreur.
    echo'Erreur:'.mysqli_error($dbLink).'<br/>';
    //Affiche la requête envoyée.
    echo'Requête:'.$query.'<br/>';exit();}

while($dbRow=mysqli_fetch_assoc($dbResult))
{
    echo$dbRow['ID'].'<br/>';
    echo$dbRow['E-MAIL'].'<br/>';
    echo$dbRow['DATE'].'<br/>';
    echo'<br/><br/>';

}
echo date('d.m.Y',strtotime($dbRow['DATE']))

?>

