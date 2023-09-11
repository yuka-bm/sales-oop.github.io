<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mt-5">
        <h1 class="text-primary fw-bold text-center">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
        <form action="../actions/login.php" method="post">
            <div class="row">
                <div class="col-3">
                    <label for="username">Username</label>
                </div>
                <div class="col">
                    <input type="text" name="username" id="username" class="form-control mb-3" required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="password">Password</label>
                </div>
                <div class="col">
                    <input type="password" name="password" id="password" class="form-control mb-3" required>
                </div>
            </div>
            <div class="row">
                <div class="col-9 ms-auto">
                    <button type="submit" class="btn btn-primary w-100">Log in</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-9 ms-auto text-center">
                <a href="register.php" class="btn btn-danger text-white mt-3 mx-auto">Create an Account</a>
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="https://kit.fontawesome.com/2a92be50d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
