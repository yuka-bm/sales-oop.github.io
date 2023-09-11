<?php
    include "../classes/Product.php";

    $product = new Product;
    $product_id = $_GET['product_id'];
    $product->delete($product_id);
?>