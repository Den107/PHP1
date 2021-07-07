<?php
include_once __DIR__ . "/../../../config/main.php";
include_once ENGINE_DIR . "products.php";

if ($id = $_GET['id']) {
    $product = getProductById($id);
}

include  VIEWS_DIR . 'admin/products/view.php';
