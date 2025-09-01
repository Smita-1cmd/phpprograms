<?php
$numbers = array(50, 10, 40, 20, 30);

sort($numbers);
echo "Ascending: ";
foreach($numbers as $n) echo $n." ";
echo "<br>";

rsort($numbers);
echo "Descending: ";
foreach($numbers as $n) echo $n." ";
?>
