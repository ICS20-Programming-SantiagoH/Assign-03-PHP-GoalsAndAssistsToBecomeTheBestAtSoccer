<?php

// get the temperature from the textfields
$fahrenheit = $_POST['fahrenheit'];

// calculate the volume
$celsius = (5/9) * ($fahrenheit - 32);

// Display the volume
echo "<h3>Results:</h3> The degrees in celsius is " . round($celsius, 2) . "°"
?>