<?php
include 'index.php';
start_page("calculatrice");
?>
 <form action="calcul.php" method="get">
     <input type="text" name="op1" value="num 1">
     <input type="text" name="op2" value="num 2"></br>
     <inputchecked="checked"type="radio"name="op"value="*"/>*<br/>
     <inputtype="radio"name="op"value="+"/>+<br/>
     <inputtype="radio"name="op"value="-"/>-<br/>
     <inputtype="radio"name="op"value="/"/>/<br/>
     <input type="submit">


        </form>

<?php
end_page();
?>

