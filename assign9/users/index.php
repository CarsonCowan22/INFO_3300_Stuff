<?php
session_start();
require('../model/users_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_users';
    }
}
if ($action == 'list_users') {
    //implement list_users functionality here
    $users = get_users();
    include('users_list.php');
} elseif ($action == 'login') {
    //implement login functionality here
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $user = login($email, $password);
    if($user == NULL) {
        header('Location: /assign9/loginform.php?errors=Missing login credentials');
    } else {
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_nake'];
        $_SESSION['user_id'] = $user['user_id'];
        header('Location:/assign9/index.php');
    }
}
