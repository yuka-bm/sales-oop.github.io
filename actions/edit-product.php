<?php
    include "../classes/Product.php";

    $product = new Product;
    $product_id = $_GET['product_id'];
    $product->edit($product_id, $_POST);
?>