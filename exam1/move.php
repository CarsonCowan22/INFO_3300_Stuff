<?php
session_start();
$random_num = random_int(1,10);
$user_guess = filter_input(INPUT_GET, "guess");
$direction = $random_num < 6 ? "left" : "right";
$_SESSION['user_guess'] = $user_guess;
$_SESSION['actual_direction'] = $direction;
header("Location:index.php");