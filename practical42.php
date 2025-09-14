<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<form method="POST" action="">
    Enter First Number: <input type="number" name="num1" required><br><br>
    Enter Second Number: <input type="number" name="num2" required><br><br>

    Select Operation: 
    <select name="operation" required>
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero!";
            }
            break;
        default:
            $result = "Invalid Operation";
    }

    echo "<h2>Result: $result</h2>";
}
?>

</body>
</html>
