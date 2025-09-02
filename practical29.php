<?php
$numbers = array(10, 20, 30, 20, 40, 10, 50);

echo "Original Array: ";
print_r($numbers);

$uniqueNumbers = array_unique($numbers);

echo "<br>Array after removing duplicates: ";
print_r($uniqueNumbers);
?>
