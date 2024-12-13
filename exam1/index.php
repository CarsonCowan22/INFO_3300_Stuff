<?php
session_start();
$user_guess_display = "";
$actual_direction_display = "";
$result = "";

if(isset($_SESSION['user_guess']) && isset($_SESSION['actual_direction'])) {
    $user_guess_display = "Your guess was " . $_SESSION['user_guess'] . "<br>";
    $actual_direction_display = "The actual direction was " . $_SESSION['actual_direction'] . "<br>";
    $result = $_SESSION['user_guess'] == $_SESSION['actual_direction'] ? '<div id="result">Way to go, you guessed it!</div>' : '<div id="result">Good try, do you want to try again?</div>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>RoboMovers</title>
</head>

<body>
    <h1>Guess the robot's movement (left or right)</h1>
    <div id="page_content">
        <?=$user_guess_display?>
        <?=$actual_direction_display?>
        <?=$result?>
        <form action="move.php" method="get">
            <input type="text" name="guess" id="guess">
            <button type="submit">Guess</button>
        </form>
    </div>
</body>

</html>