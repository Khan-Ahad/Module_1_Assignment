<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <?php

    $number1 = "";
    $number2 = "";
    $operation = "";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];

        if (is_numeric($number1) && is_numeric($number2)) {

            switch ($operation) {
                case "addition":
                    $result = $number1 + $number2;
                    break;
                case "subtraction":
                    $result = $number1 - $number2;
                    break;
                case "multiplication":
                    $result = $number1 * $number2;
                    break;
                case "division":
                    if ($number2 != 0) {
                        $result = $number1 / $number2;
                    } else {
                        $result = "Division by zero is not allowed.";
                    }
                    break;
            }
        } else {
            $result = "Please enter valid numeric values.";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="number1">Enter Number 1:</label>
        <input type="text" name="number1" id="number1" value="<?php echo $number1; ?>" required>
        <br>
        <label for="number2">Enter Number 2:</label>
        <input type="text" name="number2" id="number2" value="<?php echo $number2; ?>" required>
        <br>
        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="addition">Addition (+)</option>
            <option value="subtraction">Subtraction (-)</option>
            <option value="multiplication">Multiplication (*)</option>
            <option value="division">Division (/)</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php

    if ($result !== "") {
        echo "<p>Result: $result</p>";
    }
    ?>

</body>
</html>