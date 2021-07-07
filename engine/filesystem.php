<?php
include __DIR__ . '/../config/main.php';

/**
 * принимает название файла .csv,
 * возвращает массив с данными из файла
 */
function readCsv(string $source)
{
    $f = fopen($source, 'r');
    $data = [];
    while ($row = fgetcsv($f, 0, ';')) {
        $data[] = $row;
    }
    fclose($f);
    return $data;
}

/**
 * принимает аргумент в виде строки, папку с файлами,
 * возвращает массив файлов в этой папке
 */
function getFiles(string $directory)
{
    return array_filter(
        scandir($directory),
        function ($item) use ($directory) {
            return !is_dir($directory . '/' . $item);
        }
    );
}
/**
 * функция загружает файл на сервер, 
 * принимает название файла, тоже что в атрибуте name туга input,
 * вторым параметром принимает папку назначения
 */
function uploadFile(string $name, string $destination)
{
    if (isset($_FILES[$name])) {
        $tmpPath = $_FILES[$name]['tmp_name'];
        $destination .= "/{$_FILES['image']['name']}";
        move_uploaded_file($tmpPath, $destination);
    }
}
