<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    $temperature = "";
    $conversion_type = "";
    $converted_temperature = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion_type = $_POST["conversion_type"];

        if (is_numeric($temperature)) {
            if ($conversion_type == "celsius_to_fahrenheit") {
                $converted_temperature = ($temperature * 9/5) + 32;
            } elseif ($conversion_type == "fahrenheit_to_celsius") {
                $converted_temperature = ($temperature - 32) * 5/9;
            }
        } else {
            echo "<p>Please enter a valid temperature value.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="text" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>
        <br>
        <label for="conversion_type">Select Conversion:</label>
        <select name="conversion_type" id="conversion_type" required>
            <option value="celsius_to_fahrenheit" <?php if ($conversion_type == "celsius_to_fahrenheit") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius" <?php if ($conversion_type == "fahrenheit_to_celsius") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($converted_temperature !== "") {
        echo "<p>Converted Temperature: $converted_temperature</p>";
    }
    ?>

</body>
</html>