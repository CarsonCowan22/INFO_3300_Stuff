<?php
$first_name = filter_input(INPUT_GET, 'first_name');
$last_name = filter_input(INPUT_GET, 'last_name');
$minor_name = filter_input(INPUT_GET, 'minor_name');
$minor_age = filter_input(INPUT_GET, 'minor_age');
$minor_birth_date = filter_input(INPUT_GET, 'minor_birth_date');
$street = filter_input(INPUT_GET, 'street');
$city = filter_input(INPUT_GET, 'city');
$state = filter_input(INPUT_GET, 'state');
$zip = filter_input(INPUT_GET, 'zip');
$email = filter_input(INPUT_GET, 'email');
$signature = filter_input(INPUT_GET, 'signature');
$authorize_play = filter_input(INPUT_GET, 'authorize_play');

$first_name_error = filter_input(INPUT_GET, 'first_name_error');
$last_name_error = filter_input(INPUT_GET, 'last_name_error');
$minor_name_error = filter_input(INPUT_GET, 'minor_name_error');
$minor_age_error = filter_input(INPUT_GET, 'minor_age_error');
$minor_birth_date_error = filter_input(INPUT_GET, 'minor_birth_date_error');
$street_error = filter_input(INPUT_GET, 'street_error');
$city_error = filter_input(INPUT_GET, 'city_error');
$state_error = filter_input(INPUT_GET, 'state_error');
$zip_error = filter_input(INPUT_GET, 'zip_error');
$email_error = filter_input(INPUT_GET, 'email_error');
$signature_error = filter_input(INPUT_GET, 'signature_error');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Carnival Waiver</title>
</head>

<body>
    <h1 id="head_waiver">CRC Carnival Waiver&nbsp;&nbsp;</h1> <img src="./ferris_wheel.jpg" alt="ferris wheel">
    <div id="waiver">
        <form action="result.php" method="get">
            Guardians first name <input name="first_name" type="text" placeholder="first name" value="<?=$first_name?>"><br>
            <div class="errors"><?= $first_name_error ?></div>
            Guardians last name <input name="last_name" type="text" placeholder="last name" value="<?=$last_name?>"><br>
            <div class="errors"><?= $last_name_error ?></div>
            Minor's name <input name="minor_name" type="text" placeholder="minor's name"value="<?=$minor_name?>"><br>
            <div class="errors"><?= $minor_name_error ?></div>
            Minor's age <input name="minor_age" type="text" size="3" placeholder="age"value="<?=$minor_age?>"><br>
            <div class="errors"> <?= $minor_age_error ?></div>
            Minor's birth date <input name="minor_birth_date" type="text"value="<?=$minor_birth_date?>"><br>
            <div class="errors"> <?= $minor_birth_date_error ?></div>
            Street: <input name="street" type="text" size="30" placeholder="street"value="<?=$street?>"><br>
            <div class="errors"> <?= $street_error ?></div>
            City: <input name="city" type="text" placeholder="City"value="<?=$city?>"><br>
            <div class="errors"> <?= $city_error ?></div>
            State: <input name="state" type="text" size="2" placeholder="state"value="<?=$state?>"><br>
            <div class="errors"><?= $state_error ?></div>
            Zip: <input name="zip" type="text" size="5" placeholder="zip"value="<?=$zip?>"><br>
            <div class="errors"><?= $zip_error ?></div>
            Guardian's email Address: <input name="email" type="email" placeholder="email"value="<?=$email?>"><br>
            <div class="errors"><?= $email_error ?></div>
            Please type your name in the text area <textarea name="signature" cols="50" rows="3"value="<?=$signature?>"></textarea><br>
            <div class="errors"><?= $signature_error ?></div>
            I agree to allow my child to play Dial-A-Fortune games <input type="radio" name="authorize_play" value="true"> Yes <input type="radio" name="authorize_play" value="false" checked> No<br>
            <input type="submit" value="submit"><br>
        </form>
    </div>
</body>

</html>