<?php
function getProductById(int $id)
{
    return queryOne("SELECT * FROM products WHERE id=$id");
}
