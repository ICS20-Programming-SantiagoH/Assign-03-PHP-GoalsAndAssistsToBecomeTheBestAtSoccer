<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Goals and assists to become the greatest soccer player">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Goals and assists to become the greatest soccer player</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Goals and Assists to Become the Greatest Soccer Player</h1>";
echo "<h3>This program will calculate the goals needed to become the greatest goal scorer.</h3>";
?>
<!-- form to get the goals per game from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=goalsPerGame">Enter your goals per game:</label>
      <input type="text" id="goalsPerGame" placeholder="Enter your goals per game" name="goalsPerGame"><br>
    </form>

    <!-- form to get the games played for goals from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblgamesPlayedGoals">Enter your games played:</label>
      <input type="text" id="gamesPlayedGoals" placeholder="Enter your games played" name="gamesPlayedGoals"><br><br>
      <input type="submit" name="button1" class="button" value="Calculate" />
    
      
    </form>
    
    <!-- iframe for the results to show on the web page for goals -->
    <iframe id="results1" name="results1">			
      You need " + $goalsToBeTheBestAtGoals + " to become the best goal scorer of all time"
    </iframe>

    <!-- php echo to print the html to the page -->
<?php 
echo "<h3>This program will calculate the assists needed to become the greatest assister.</h3>";
?>
<!-- form to get the assists per game from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblassistsPerGame">Enter your assists:</label>
      <input type="text" id="assistsPerGame" placeholder="Enter your assists" name="assistsPerGame"><br>
    </form>

    <!-- form to get the games played for assists from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblgamesPlayedAssists">Enter your games played:</label>
      <input type="text" id="gamesPlayedAssists" placeholder="Enter your games played" name="gamesPlayedAssists"><br><br>
      <input type="submit" name="button1" class="button" value="Calculate" />
    </form>
    
    <!-- iframe for the results to show on the web page for assists -->
    <iframe id="results2" name="results2">			
      You need " + $assistsToBeTheBestAtAssists . " to become the best assister of all time"
    </iframe>
  </body>
</html>