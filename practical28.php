<?php
$numbers = array(10, 20, 30, 40, 50);

$value = 20;

if (in_array($value, $numbers)) {
    echo "$value exists in the array.";
} else {
    echo "$value does not exist in the array.";
}
?>
