<?php
function getMenu(): array
{
    $sql = "SELECT * FROM menu ORDER BY menu_order";
    return queryAll($sql);
}
