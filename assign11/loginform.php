<?php
session_start();
if (isset($_SESSION['email'])) {
    header('Location: index.php');
}
$errors = '';
$errors = filter_input(INPUT_GET, 'errors');
?>
<!DOCTYPE html>
<html>
<!-- the head section -->

<head>
    <title>The Utah County Event Tracker</title>
    <link rel="stylesheet" type="text/css" href="/assign11/styles.css">
</head>

<!-- the body section -->

<body>
    <br /><br />
    <form action="/assign11/users/index.php" method="post">
        Email: <input type="text" name="email" placeholder="email" size="10">
        Password: <input type="password" name="password" placeholder="Password" size="10">
        <input type="hidden" name="action" value="login" />
        <input type="submit" value="Submit" />
        <div class="errors"><?= $errors ?></div>
    </form>

    <?php include 'view/footer.php'; ?>