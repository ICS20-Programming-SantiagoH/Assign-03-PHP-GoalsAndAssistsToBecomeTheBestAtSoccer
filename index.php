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
echo "<h3>This program will calculate the goals and assists needed to become the greatest soccer player of all time.</h3>";
?>
<!-- form to get the goals per game from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=goalsPerGame">Enter your goals per game:</label>
      <input type="text" id="goalsPerGame" placeholder="Enter your goals per game" name="goalsPerGame"><br>
    </form>

    <!-- form to get the games played for goals from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblgamesPlayedGoalsAndAssists">Enter your games played:</label>
      <input type="text" id="gamesPlayedGoalsAndAssists" placeholder="Enter your games played" step="1" min="1" name="gamesPlayedGoalsAndAssists"><br>
    </form>

    <!-- form to get the assists per game from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblassistsPerGame">Enter your assists per game:</label>
      <input type="text" id="assistsPerGame" placeholder="Enter your assists" name="assistsPerGame"><br>
      <input type="submit" name="button" class="button" value="Calculate" />
    </form>
    
    <!-- iframe for the results to show on the web page for goals and assists -->
    <iframe id="results" name="results">			
      You need " + $goalsToBeTheBestAtGoals + " to become the best goal scorer of all time"<br>
      You need " + $assistsToBeTheBestAtAssists . " to become the best assister of all time"
    </iframe>
  </body>
</html>