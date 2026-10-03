<?php
require_once __DIR__ . '/product.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-4">

    <h2 class="text-center mb-4">Products</h2>

    <div class="row">

        <?php
        $products = [$product1, $product2, $product3];

        foreach ($products as $product):?>

            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->getName() ?>" onerror="this.onerror=null; this.src='https://placehold.co/400x250/e9ecef/495057?text=' + encodeURIComponent('<?= addslashes($product->getName()) ?>');">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->getName() ?></h5>
                        <p class="text-muted">Brand: <?= $product->brand ?></p>
                        <p class="card-text"><?= $product->content ?></p>
                        <p>Price: <strong><?= $product->price ?> EGP</strong></p>
                        <p>Price After Discount: <strong><?= $product->priceafterDiscount(10) ?> EGP</strong></p>
                        <p class="final-price">Final Price: <strong><?= $product->getfinalPrice(10) ?> EGP</strong></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>