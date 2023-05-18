<?php
    include 'php.php';
?>
<center>
    <?php
        echo "<table>";
        for ($n2=1;$n2<=8;$n2++) {
            echo "<tr>";
            for ($n1=1;$n1<=20;$n1++) {
                echo "<td>";
                echo $n1;
                echo "</td>"; 
            }
            echo "</tr>"; 
        }
        echo "</table>";
    ?>
</center>