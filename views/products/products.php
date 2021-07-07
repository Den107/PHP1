<?php
include ENGINE_DIR . 'products.php';

$products = getProducts();
?>

<div class="container">
    <div class="row d-flex justify-content-between">
        <?php foreach ($products as $product) : ?>
            <div class="card col-md-4 me-3" style="width: 18rem;">
                <img src="photo/<?= $product['img'] ?>" class="card-img-top" alt="<?= $product['img'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['title'] ?></h5>
                    <p class="card-text"><?= $product['description'] ?></p>
                    <h2 class="card-title"><?= $product['price'] ?></h2>
                    <a href="product.php?id=<?= $product['id'] ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>