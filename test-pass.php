<?php
include "utils.inc.php";
start_page('testpass');


$Id=$_POST['Login'];
$MDP=$_POST['Mdp'];

if ($Id == 'admin' && $MDP == 'admin')
    echo 'acces granted';
else
    echo'raté';
?>

