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
    <title>Buy Product</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="container w-50">
        <h1 class="text-success fw-bold text-center mb-3"><i class="fa-solid fa-cash-register"></i> Buy Product</i></h1>
        <div class="row mt-5">
            <div class="col">
                Product name
                <h2 class="fw-bold"><?= $product['product_name'] ?></h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                Price
                <h2 class="fw-bold">$ <?= $product['price'] ?></h2>
            </div>
            <div class="col">
                Stocks Left
                <h2 class="fw-bold"><?= $product['quantity'] ?></h2>
            </div>
        </div>
         <div class="row mt-3">
            <div class="col">
                <form action="payment.php?product_id=<?= $product_id ?>" method="post">
                    Buy Quantity
                    <input type="number" name="buy_quantity" id="buy_quantity" min="1" max="<?= $product['quantity'] ?>" class="form-control mt-2 w-75 mx-auto" required>
                    <input type="submit" name="buy" id="buy" class="form-control bg-success mt-3 text-white" value="Buy">
                </form>
            </div>
        </div>
    </div>
    
    <!-- script -->
    <script src="https://kit.fontawesome.com/2a92be50d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
