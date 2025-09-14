<!DOCTYPE html>
<html>
<head>
    <title>Welcome Form</title>
</head>
<body>
<form method="POST" action="">
    Enter Your Name: 
    <input type="text" name="username" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['username'])) {
    $name = $_POST['username'];
    echo "<h2>Welcome, " . $name. "!</h2>";
}
?>
</body>
</html>
