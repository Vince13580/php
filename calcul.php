<?php
include 'index.php';
start_page("calcul");

$op1=$_GET['op1'];
$op2=$_GET['op2'];
$op=$_GET['op'];


if('*'==$op){
  echo $op1 * $op2;
}
elseif('+'==$op){
   echo $op1+$op2;
}
elseif('/'==$op) {
  echo $op1 / $op2;
}
elseif('-'==$op) {
  echo $op1 - $op2;
}
else{echo'<br/><strong>opérateur'.$op.'nongéré</strong>';}
?>

