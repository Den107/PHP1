<?php
include_once ENGINE_DIR . "db.php";

function getCommentsForProduct(int $id)
{
    $sql = "SELECT * FROM comments_for_products WHERE product_id=$id";
    return queryAll($sql);
}

function createFeedback(int $product_id, string $body)
{
    $sql = "INSERT INTO comments_for_products (product_id, body) VALUES ('{$product_id}', '{$body}')";
    execute($sql);
    return getLastInsertId();
}
