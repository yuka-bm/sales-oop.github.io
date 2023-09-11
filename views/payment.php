<?php
    session_start();

    require "../classes/Product.php";

    $product_obj = new Product;
    $product_id = $_GET['product_id'];
    $product = $product_obj->getProduct($product_id);
    $buy_quantity = $_POST['buy_quantity'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="container w-50">
        <h1 class="text-success fw-bold text-center mb-3"><i class="fa-solid fa-hand-holding-dollar"></i> Payment</i></h1>
        <div class="row mt-5">
            <div class="col">
                Product name
                <h2 class="fw-bold"><?= $product['product_name'] ?></h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                Total Price
                <h2 class="fw-bold">$ <?= $product['price'] * $buy_quantity ?></h2>
            </div>
            <div class="col">
                Buy Quantity <span class="text-danger">*</span>
                <h2 class="fw-bold"><?= $buy_quantity ?></h2>
                <span class="text-danger">Maximum of <?= $product['quantity'] ?></span>
            </div>
        </div>
        <div class="row mt-3">
            <form action="../actions/payment.php?product_id=<?= $product_id ?>&buy_quantity=<?= $buy_quantity ?>" method="post">
                <div class="col">
                        Payment
                        <div class="input-group mb-3 mt-2 w-75 mx-auto">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="pay">$</span>
                            </div>
                            <input type="number" name="payment" id="payment" class="form-control text-danger fw-bold" step="0.01" min="<?= $product['price'] * $buy_quantity ?>" aria-describedby="pay" required>
                        </div>
                        <input type="submit" name="pay" id="pay" class="form-control bg-success mt-3 text-white" value="Pay">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- script -->
    <script src="https://kit.fontawesome.com/2a92be50d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
