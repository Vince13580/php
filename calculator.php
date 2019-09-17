<?php
include 'index.php';
start_page("calculatrice");
?>
 <form action="calcul.php" method="post">
     <input type="text" name="op1" value="num 1">
     <input type="text" name="op2" value="num 2"></br>
     <input checked="checked"type="radio"name="op"value="*"/>*<br/>
     <input type="radio"name="op"value="+"/>+<br/>
     <input type="radio"name="op"value="-"/>-<br/>
     <input type="radio"name="op"value="/"/>/<br/>
     <input type="submit">


        </form>

<?php
end_page();
?>

