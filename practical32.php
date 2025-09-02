<?php
$students = array(
    "Smita" => 85,
    "Snehika" => 78,
    "Srishti" => 92,
    "Sukanya" => 88,
    "Khushi" => 76
);

// Updated Snehika marks
$students["Snehika"] = 95;

echo "Updated Students Marks:<br>";
foreach ($students as $name => $marks) {
    echo "$name : $marks <br>";
}
?>
