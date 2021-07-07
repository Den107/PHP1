<?php
function getGalleryImages()
{
    return queryAll("SELECT * FROM gallery");
}

function getImageById(int $id)
{
    return queryOne("SELECT * FROM gallery WHERE id={$id}");
}

function createImage(string $path, string $description)
{
    $sql = "INSERT INTO gallery (path, description) VALUES ('{$path}', '{$description}')";
    execute($sql);
}
