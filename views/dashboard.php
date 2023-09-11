<?php
    session_start();

    require "../classes/Product.php";

    $product_obj = new Product;
    $products = $product_obj->getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include "navbar.php" ?>
    <main class="row justify-content-center gx-0 w-75 mx-auto">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold">Product List</h1>
            </div>
            <div class="col text-end">
                <!-- <a href="../views/add-product.php" class="h1 text-info"><i class="fa-solid fa-plus"></i></a> -->
                <!-- Modal -->
                <div type="submit" data-bs-toggle="modal" data-bs-target="#addProductModal" class="h1 text-info">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content py-4">
                            <?php include "add-product.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($product = $products->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td>
                            <a href="edit-product.php?product_id=<?= $product['id'] ?>" class="btn btn-warning" title="Edit">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a href="delete-product.php?product_id=<?= $product['id'] ?>" class="btn btn-danger" title="Delete">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </td>
                        <td>
                            <a href="buy-product.php?product_id=<?= $product['id'] ?>" class="btn btn-success" title="Buy">
                                <i class="fa-solid fa-cash-register"></i>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </main>

    <!-- script -->
    <script src="https://kit.fontawesome.com/2a92be50d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
