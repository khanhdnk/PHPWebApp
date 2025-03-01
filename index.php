<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post">
        <input type="number" name="num1" required placeholder="Enter first number">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required placeholder="Enter second number">
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $result = "";

        if ($operator == "+") {
            $result = $num1 + $num2;
        } elseif ($operator == "-") {
            $result = $num1 - $num2;
        } elseif ($operator == "*") {
            $result = $num1 * $num2;
        } elseif ($operator == "/") {
            if ($num2 == 0) {
                $result = "Error: Cannot divide by zero";
            } else {
                $result = $num1 / $num2;
            }
        } else {
            $result = "Invalid operator";
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>

    <a href="index.html">Go to HTML Page</a>
</body>
</html>