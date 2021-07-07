<?php
include_once __DIR__ . '/../config/main.php';
include_once ENGINE_DIR . 'comments.php';
include_once ENGINE_DIR . 'base.php';



$product_id = (int) $_POST['product_id'];
$body = $_POST['comment'];

createFeedback($product_id, $body);
redirect($_SERVER['HTTP_REFERER']);
