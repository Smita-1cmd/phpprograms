<?php
$students = array(
    "Smita" => 85,
    "Prachi" => 78,
    "Neha" => 92
);

if (array_key_exists("Radha", $students)) {
    echo "Key Radha exists in the array.";
} else {
    echo "Key Radha does not exist in the array.";
}
?>
