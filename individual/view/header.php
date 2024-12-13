<?php
header('Content-Type: text/html; charset=iso-8859-1');
if (!isset($_SESSION['email'])) {
    header("location:loginform.php");
}
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
?>
<!DOCTYPE html>
<html>
<!-- the head section -->

<head>
    <title>The Gear Loan System </title>
    <link rel="stylesheet" type="text/css" href="/individual/styles.css">
</head>

<!-- the body section -->

<body>
    <header>
        <h1>The Gear Loan System</h1>
    </header>