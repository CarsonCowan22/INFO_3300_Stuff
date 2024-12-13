<?php
$errors = array();
$user_data = array();

$first_name = filter_input(INPUT_GET, 'first_name');
if($first_name == null) {
    $errors[] = "first_name_error=First name is required";
} elseif (strlen($first_name) < 3) {
    $errors[] = "first_name_error=First name must be longer than 2 chars";
}
$user_data[] = "first_name=$first_name";

$last_name = filter_input(INPUT_GET, 'last_name');
if($last_name == null) {
    $errors[] = "last_name_error=Last name is required";
} elseif (strlen($last_name) < 3) {
    $errors[] = "last_name_error=Last name must be longer than 2 chars";
}
$user_data[] = "last_name=$last_name";


$minor_name = filter_input(INPUT_GET, 'minor_name');
if($minor_name == null) {
    $errors[]= "minor_name_error=Minor's name is required";
}
$user_data[] = "minor_name=$minor_name";

$minor_age = filter_input(INPUT_GET, 'minor_age', FILTER_VALIDATE_INT);
if($minor_age == null) {
    $errors[] = "minor_age_error=Minor's age is required";
} elseif (!$minor_age) {
    $errors[] = "minor_age_error=Minor's must be all numbers";
} elseif($minor_age > 17) {
    $errors[] = "minor_age_error=Minor is NOT a minor";
}
$user_data[] = "minor_age=$minor_age";


$minor_birth_date = filter_input(INPUT_GET, 'minor_birth_date');
if($minor_birth_date == null) {
    $errors[] = 'minor_birth_date_error=Minor birth date is required';
}
$user_data[] = "minor_birth_date=$minor_birth_date";

$street = filter_input(INPUT_GET, 'street');
if($street == null) {
    $errors[] = "street_error=Street is required";
}
$user_data[] = "street=$street";

$city = filter_input(INPUT_GET, 'city');
if($city == null) {
    $errors[] = "city_error=City is required";
}
$user_data[] = "city=$city";


$state = filter_input(INPUT_GET, 'state');
if($state == null) {
    $errors[] = "state_error=State is required";
}
$user_data[] = "state=$state";


$zip = filter_input(INPUT_GET, 'zip', FILTER_VALIDATE_INT);
if($zip == null) {
    $errors[] = "zip_error=Zip is required";
} elseif(!$zip) {
    $errors[] = "zip_error=Zip must be numbers";
}
$user_data[] = "zip=$zip";


$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
if($email == null) {
    $errors[] = "email_error=Email is required";
} elseif(!$email) {
    $errors[] = "email_error=Email must be a valid email";
}
$user_data[] = "email=$email";


$signature = filter_input(INPUT_GET, 'signature');
if($signature == null) {
    $errors[] = "signature_error=Signature is required";
} elseif (strlen($signature) < 3) {
    $errors[] = "signature_error=Signature must be longer than 3 chars";
}
$user_data[] = "signature=$signature";


$authorize_play = filter_input(INPUT_GET, 'authorize_play', FILTER_VALIDATE_BOOLEAN);

$page = 'waiver.php?';
if (count($errors) > 0)
{
    foreach ($errors as $value)
    {
        $page .= $value . '&';
    }
    foreach ($user_data as $data)
    {
        $page .= $data . '&';
    }
    header("Location: $page");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>:Carnival Games Waiver</title>
</head>

<body>
    <h1 id="head_waiver">CRC-Carnival Waiver Result&nbsp;&nbsp;</h1> <img src="./ferris_wheel.jpg" alt="ferris wheel">
    <div id="result">
        <?php
        if ($authorize_play) {
            echo "Congratulations your minor ($minor_name) is cleared to play";
        } else {
            echo "Sorry, your permission is required :(";
        }
        ?>
    </div>
</body>

</html>