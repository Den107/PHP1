<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <header>
                <?php include VIEWS_DIR . "menu/menu.php"; ?>
            </header>
            <main>
                <h2>Создание нового товара</h2>
                <div class="row col-md-12">
                    <form action="/admin/products/save.php" method="post">
                        <?php if (isset($product)) : ?>
                            <input type="hidden" name="product[id]" value="<?= $product['id'] ?>">
                        <?php endif; ?>
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" name="product[title]" value="<?= $product['title'] ?? '' ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <textarea name="product[description]" class="form-control" id="" cols="84" rows="4"><?= $product['description'] ?? '' ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Цена</label>
                            <input type="text" name="product[price]" value="<?= $product['price'] ?? '' ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="<?= isset($product) ? 'Обновить' : 'Создать' ?>">
                        </div>
                    </form>
                </div>
            </main>
            <footer>
            </footer>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>