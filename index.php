<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to Celsius">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Fahrenheit to Celsius</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Fahrenheit to Celsius</h1>";
echo "<h3>This program will calculate fahrenheit to celsius.</h3>";
?>
<!-- form to get the measurements from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblFahrenheit">Enter the fahrenheit:</label>
      <input type="text" id="fahrenheit" placeholder="Enter the fahrenheit" name="fahrenheit"><br><br>
      <input type="submit" value="Calculate">
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      The degrees in celsius is " + $celsius + "°"
    </iframe>
  </body>
</html>