<!DOCTYPE html>
<html lang="ru">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $item['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="photo/<?= $item['img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $item['title'] ?></h5>
                <p class="card-text"><?= $item['description'] ?></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item fs-1"><?= $item['price'] ?></li>
                </ul>
            </div>
        </div>
        <ul class="list-group">
            <?php foreach ($comments as $comment) : ?>
                <li class="list-group-item"><?= $comment['body'] ?><span class="ps-5 fw-bold"><?= $comment['created_at'] ?></span></li>
            <?php endforeach; ?>
        </ul>
        <form action="/add_comment.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your comment</label>
                <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="comment">
                <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Add comment</button>
        </form>
    </div>


</body>


</html>