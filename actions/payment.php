<?php
    include "../classes/Product.php";

    $product = new Product;
    $product_id = $_GET['product_id'];
    $buy_quantity = $_GET['buy_quantity'];
    $product->pay($product_id, $buy_quantity, $_POST);
?>