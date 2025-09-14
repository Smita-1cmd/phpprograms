<!DOCTYPE html>
<html>
<head>
    <title>Favorite Language</title>
</head>
<body>
<form method="POST" action="">
    <h3>Which is your favorite programming language?</h3>
    
    <input type="radio" name="language" value="PHP" required> PHP <br>
    <input type="radio" name="language" value="JavaScript"> JavaScript <br>
    <input type="radio" name="language" value="Python"> Python <br><br>
    
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['language'])) {
    $choice = $_POST['language'];
    echo "<h2>Your favorite programming language is: $choice</h2>";
}
?>

</body>
</html>
