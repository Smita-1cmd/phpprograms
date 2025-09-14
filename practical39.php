<!DOCTYPE html>
<html>
<head>
    <title>Result Check</title>
</head>
<body>
<form method="GET" action="">
    Enter Marks: <input type="number" name="marks" required><br><br>
    <input type="submit" value="Check Result">
</form>

<?php
if (isset($_GET['marks'])) {
    $marks = $_GET['marks'];

    if ($marks >= 40) {
        echo "<h2>PASS</h2>";
    } else {
        echo "<h2>FAIL</h2>";
    }
}
?>

</body>
</html>
