<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . 'db.php';
include ENGINE_DIR . 'user.php';
session_start();
$authUser = null;
// if ($userId  = $_COOKIE['user_id']) {
//     $authUser = getUserById($userId);
// }
if ($userId  = $_SESSION['user_id']) {
    $authUser = getUserById($userId);
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    if (!is_null($authUser)) {
        echo "Привет, {$authUser['login']}";
    }
    ?>
    <?= include VIEWS_DIR . 'menu/menu.php' ?>
    <?= include VIEWS_DIR . 'products/products.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>