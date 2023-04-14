<?php

// get the temperature from the textfields
$goalsPerGame = $_POST['goalsPerGame'];
$gamesPlayedGoals = $_POST['gamesPlayedGoals'];

// calculate the volume
$goals = $goalsPerGame * $gamesPlayedGoals;
$goalsToBeTheBestAtGoals = $goals - 834;

// if statments
if ($goalsToBeTheBestAtGoals > "834") {
  echo "Congratulations, you are already the best goal scorer!";
} else {
  echo "You need $goalsToBeTheBestAtGoals more goals to become the best goal scorer.";
}

// Display the volume
echo "<h3>Results:</h3> You need " . $goalsToBeTheBestAtGoals . " to become the best goal scorer of all time"
?>

<?php

// get the temperature from the textfields
$assistsPerGame = $_POST['assistsPerGame'];
$gamesPlayedAssists = $_POST['gamesPlayedAssists'];

// calculate the volume
$assists = $assistsPerGame * $gamesPlayedAssists;
$assistsToBeTheBestAtAssists = $assists - 300;

// if statments
if ($assistsToBeTheBestAtAssists > "300") {
  echo "Congratulations, you are already the best assister!";
} else {
  echo "You need $assistsToBeTheBestAtAssists more assists to become the best assister.";
}

// Display the volume
echo "<h3>Results:</h3> You need " . $assistsToBeTheBestAtAssists . " to become the best assister of all time"
?>