<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "user.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "auth.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    if ($password == $confirmPassword) {
        $userId = createUser($login, getHash($password));
        authByUserId($userId);
        redirect("/");
    }
}
include_once VIEWS_DIR . "registration/registration.php";
