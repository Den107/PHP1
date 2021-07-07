<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $login = $_POST['login'];
    $password = getHash($_POST['password']);

    if ($user = getUserByLoginAndPassword($login, $password)) {
        // setcookie('user_id', $user['id']);
        $_SESSION['user_id'] = $user['id'];
        redirect("/");
    } else {
        echo "Логин или пароль неверные";
    }
}
