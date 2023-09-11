<?php
    require_once "Database.php";

    class Product extends Database {

        public function getAllProducts() {
            $sql = "SELECT * FROM products";

            if ($result = $this->conn->query($sql)) {
                return $result;
            }
            else {
                die('Error retreiving all products');
            }
        }

        public function add($request) {
            $product_name = $request['product_name'];
            $price = $request['price'];
            $quantity = $request['quantity'];

            $sql = "INSERT INTO products (`product_name`, `price`, `quantity`) 
                    VALUES ('$product_name', $price, $quantity)";

            if ($this->conn->query($sql)) {
                header('location: ../views/dashboard.php');
                exit;
            }
            else {
                die('Error adding the product');
            }
        }

        public function edit($product_id, $request) {
            $product_name = $request['product_name'];
            $price = $request['price'];
            $quantity = $request['quantity'];
            
            $sql = "UPDATE products 
                    SET product_name = '$product_name', price = $price, quantity = $quantity
                    WHERE id = $product_id";

            if ($this->conn->query($sql)) {
                header('location: ../views/dashboard.php');
                exit;
            }
            else {
                die('Error editing the product');
            }
        }

        public function getProduct($product_id) {
            $sql = "SELECT * FROM products WHERE id = $product_id";

            if ($result = $this->conn->query($sql)) {
                return $result->fetch_assoc();
            }
            else {
                die('Error retreiving the product');
            }
        }

        public function delete($product_id) {
            $sql = "DELETE FROM products WHERE id = $product_id";

            if ($this->conn->query($sql)) {
                header('location: ../views/dashboard.php');
                exit;
            }
            else {
                die('Error deleting the product');
            }
        }

        public function pay($product_id, $buy_quantity, $request) {
            $payment = $request['payment'];
            $product = $this->getProduct($product_id);

            if ($payment < $buy_quantity * $product['price']) {
                die('Payment amount is not enough');
            }
            else {
                $new_quantity = $product['quantity'] - $buy_quantity;
                $this->setQuantity($product_id, $new_quantity);
            }
        }

        private function setQuantity($product_id, $quantity) {
            $sql = "UPDATE products 
                    SET quantity = $quantity
                    WHERE id = $product_id";

            if ($this->conn->query($sql)) {
                header('location: ../views/dashboard.php');
                exit;
            }
            else {
                die('Error updating the product');
            }
        }
    }
?>