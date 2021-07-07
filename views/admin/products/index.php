<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="conteiner">
        <div class="row">
            <?php include VIEWS_DIR . "menu/menu.php"; ?>
            <main class="col">
                <h1>Управление товарами</h1>
                <p>
                    <a class="btn btn-success" href="/admin/products/view.php">
                        Создать
                    </a>
                </p>
                <div class="list-group">
                    <?php foreach ($products as $product) : ?>
                        <div class="list-group-item">
                            <h2><?= $product['title'] ?></h2>
                            <p>
                                <a class="btn btn-primary" href="/admin/products/view.php?id=<?= $product['id'] ?>">
                                    Изменить
                                </a>
                                <a class="btn btn-danger" href="/admin/products/delete.php?id=<?= $product['id'] ?>">
                                    Удалить
                                </a>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>