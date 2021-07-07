<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . 'db.php';
include ENGINE_DIR . 'product.php';
include ENGINE_DIR . 'comments.php';


$id = $_GET['id'];
$comment = $_GET['comment'];
$item = getProductById($id);
$comments = getCommentsForProduct($id);



include VIEWS_DIR . 'products/product.php';
