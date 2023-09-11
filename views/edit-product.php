<?php
    session_start();

    require "../classes/Product.php";

    $product_obj = new Product;
    $product_id = $_GET['product_id'];
    $product = $product_obj->getProduct($product_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="container w-50">
        <h1 class="text-warning fw-bold text-center mb-3"><i class="fa-solid fa-pen-to-square"></i> Edit Product</i></h1>
        <form action="../actions/edit-product.php?product_id=<?= $product_id ?>" method="post">
            <div class="row">
                <div class="col">
                    <label for="product-name">Product Name</label>
                    <input type="text" name="product_name" id="product-name" class="form-control mb-3" value="<?= $product['product_name'] ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="price">Price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="doller">$</span>
                        </div>
                        <input type="number" name="price" id="price" class="form-control" step="0.01" min="0.01" value="<?= $product['price'] ?>"  aria-describedby="doller" required>
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity'] ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="add" class="btn btn-warning w-100">Edit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- script -->
    <script src="https://kit.fontawesome.com/2a92be50d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
