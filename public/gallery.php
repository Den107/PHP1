<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . 'db.php';
include ENGINE_DIR . 'gallery.php';
include ENGINE_DIR . 'filesystem.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    uploadFile('image', PUBLIC_DIR . "photo");
    $path = $_FILES['image']['name'];
    $description  = $_POST['descr'];
    createImage($path, $description);
    header("Location: /gallery.php");
}

$files = getGalleryImages();
include VIEWS_DIR . 'gallery/gallery.php';
