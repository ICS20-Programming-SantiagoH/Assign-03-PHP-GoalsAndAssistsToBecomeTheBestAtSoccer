<?php

function calculateGoalsAndAssists() {  
  // get the goals, assists and game playes from the textfields
  $goalsPerGame = $_POST['goalsPerGame'];
  $gamesPlayedGoalsAndAssists = $_POST['gamesPlayedGoalsAndAssists'];
  $assistsPerGame = $_POST['assistsPerGame'];

  // calculate goals and assists
  $goals = $goalsPerGame * $gamesPlayedGoalsAndAssists;
  $goalsToBeTheBestAtGoals = $goals - 834;
  $assists = $assistsPerGame * $gamesPlayedGoalsAndAssists;
  $assistsToBeTheBestAtAssists = $assists - 300;
  
  // if statments for goals
  if ($goalsToBeTheBestAtGoals > "834") {
    echo "Congratulations, you are already the best goal scorer!";
  }
  
  if ($goalsToBeTheBestAtGoals < "0") {
    $goalsToBeTheBestAtGoals * -1;
    echo "<h3>Results:</h3> You need " . $goalsToBeTheBestAtGoals . " to become the best goal scorer of all time";
  }
  else {
  echo "<h3>Results:</h3> You need " . $goalsToBeTheBestAtGoals . " to become the best goal scorer of all time";
}

  // if statments for assists
  if ($assistsToBeTheBestAtAssists > "300") {
    echo "Congratulations, you are already the best assister!";
  }
  
  if ($assistsToBeTheBestAtAssists < "0") {
    $assistsToBeTheBestAtAssists * -1;
    echo "<h3>Results:</h3> You need " . $assistsToBeTheBestAtAssists . " to become the best assister of all time";
  }
  else {
  echo "<h3>Results:</h3> You need " . $assistsToBeTheBestAtAssists . " to become the best assister of all time";
}
}
?>