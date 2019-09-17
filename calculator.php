<?php
include 'index.php';
start_page("calculatrice");
?>
 <form action="calcul.php" method="get">
            <input type="text" name="op1" value="num 1">
            <input type="text" name="op2" value="num 2"></br>

            <?php
                for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
            {
                echo '<input ';
                echo 'type="submit" name="action" value="' . $operateurs[$cpt] . '"/><br/>' . "\n";
                }
            ?>
        </form>

<?php
end_page();
?>

