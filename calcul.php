<?php
include 'index.php';
start_page("calcul");

$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op=$_POST['op'];

echo $op;

if('*'==$op){
  echo $op1 * $op2;
}
//elseif('+'==$op){
   //echo $op1+$op2;
//}
else{echo'<br/><strong>opérateur'.$op.'nongéré</strong>';}
?>

