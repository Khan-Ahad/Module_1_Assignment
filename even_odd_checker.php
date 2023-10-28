<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Checker</title>
</head>
<body>
    <h1>Even/Odd Checker</h1>

    <?php
    $number = "";
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                $message = "The number $number is even.";
            } else {
                $message = "The number $number is odd.";
            }
        } else {
            $message = "Please enter a valid number.";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="number">Enter a Number:</label>
        <input type="text" name="number" id="number" value="<?php echo $number; ?>" required>
        <br>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($message !== "") {
        echo "<p>$message</p>";
    }
    ?>

</body>
</html>