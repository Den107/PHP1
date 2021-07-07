<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . 'db.php';
include ENGINE_DIR . 'gallery.php';

$id = $_GET['id'];

$res = getImageById($id);

$imgUrl = "/photo/{$res['path']}";
$descr = $res['description'];

include VIEWS_DIR . 'photo/photo.php';
