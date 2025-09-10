<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>
    <h2>Enter Two Numbers</h2>
    <form method="get">
        Number1:<input type="text" name="num1"><br><br>
        Number2:<input type="text" name="num2"><br><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $sum = $num1 + $num2;
        echo "<h2>The sum of $num1 and $num2 is: $sum</h2>";
    }
    ?>
</body>
</html>
