<?php
include 'index.php';
start_page("calcul");
?>


<?php
$res = 0;
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op=$_POST['op'];

<?php
if('*'==$op){

}
elseif('+'==$op){
   $res = $op1+$op2;
}
else{echo'<br/><strong>opérateur'.$op.'nongéré</strong>';}?>
?>

