<?php
include 'index.php';
start_page("calculatrice");
?>
 <form action="calcul.php" method="post">
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

