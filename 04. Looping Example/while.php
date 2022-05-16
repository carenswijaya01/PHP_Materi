<?php
$i = 25;
while ($i <= 75) {
    if ($i % 2 == 1) {
        echo "<b><font color ='blue'>", $i, "</font></b><br>";
    } else {
        echo $i, "<br>";
    }
    $i++;
}
