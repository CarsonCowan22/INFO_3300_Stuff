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
    <title>The Utensil Inventory System </title>
    <link rel="stylesheet" type="text/css" href="/exam2/styles.css">
</head>

<!-- the body section -->

<body>
    Welcome Crazy Cooker
    <header>
        <h1>The Utensil Inventory System</h1>
    </header>