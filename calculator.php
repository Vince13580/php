<?php
include 'index.php';
start_page("calculatrice");
?>
 <form action="calcul.php" method="get">
     <input type="text" name="op1" value="num 1">
     <input type="text" name="op2" value="num 2"></br>
     <?php
     $operateurs='*+-/';

     for($cpt=0;$cpt<=3;++$cpt)
     {
         echo'<input';
         if($cpt==0)
         {
             echo'checked="checked"';
         }
         echo'type="radio"name="op"value="'.$operateurs[$cpt].'"/>'.$operateurs[$cpt].'<br/>'."\n";
     }
     ?>



     <input type="submit">
     <input type="reset">


        </form>

<?php
end_page();
?>

