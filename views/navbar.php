<nav class="navbar navbar-expand bg-light mb-4">
    <div class="row w-100" style="height: 35px;">
        <div class="col ms-4">
            <a href="dashboard.php" class="navbar-brand">
                <h3 class="h3"><i class="fa-solid fa-house"></i></h1>
            </a>
        </div>
        <div class="col text-center">
            <span class="navbar-text fw-bold">Welcome, <?= $_SESSION['username'] ?></span>
        </div>
        <div class="col">
            <form action="../actions/logout.php" method="post" class="d-flex">
                <button type="submit" class="btn text-danger bg-transparent border-0 ms-auto"><i class="fa-solid fa-user-xmark h3"></i></button>
            </form>
        </div>
    </div>
</nav>
