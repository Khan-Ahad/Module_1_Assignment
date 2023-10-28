<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php

    $temperature = 11; 

    $weather_condition = "";
    
    if ($temperature <= 32) {
        $weather_condition = "It's freezing!";
    } elseif ($temperature <= 50) {
        $weather_condition = "It's cool.";
    } elseif ($temperature <= 80) {
        $weather_condition = "It's warm.";
    } else {
        $weather_condition = "It's hot!";
    }
    ?>

    <p>The current temperature is <?php echo $temperature; ?> degrees Fahrenheit.</p>
    <p><?php echo $weather_condition; ?></p>

</body>
</html>