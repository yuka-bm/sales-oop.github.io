<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75 my-4">
        <h1 class="text-info fw-bold text-center mb-3"><i class="fa-solid fa-box"></i> Add Product</i></h1>
        <form action="../actions/add-product.php" method="post">
            <div class="row">
                <div class="col text-start">
                    <label for="product-name">Product Name</label>
                    <input type="text" name="product_name" id="product-name" class="form-control mb-3" required>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3 text-start">
                    <label for="price">Price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="doller">$</span>
                        </div>
                        <input type="number" name="price" id="price" step="0.01" min="0.01" class="form-control"  aria-describedby="doller" required>
                    </div>
                </div>
                <div class="col mb-3 text-start">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" min="0" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="add" class="btn btn-info w-100">Add</button>
                </div>
            </div>
        </form>
    </div>

    <!-- script -->
    <script src="https://kit.fontawesome.com/2a92be50d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
