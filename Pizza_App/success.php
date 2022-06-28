<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <title>Login Page</title>
    </head>
    <body>
        <section class="container my-5">
            <nav class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <a href="index.php">
                        <img src="images/pizza-img.png" alt="pizza-img" style="height:80px; width:80px; border-radius:100px;">
                    </a>
                </div>
                <div>
                    <a href="menu.php" class="text-decoration-none me-2 text-dark">Menu</a>
                    <a href="cart.php" class="text-decoration-none me-2 text-dark">Cart<span class="badge bg-dark ms-1">4</span></a>
                    <a href="profile.php" class="text-decoration-none me-2 text-dark">Profile</a>
                    <a href="login.php" class="btn btn-outline-dark">Logout</a>
                </div>
            </nav>
            <div>
                <h1 class="text-dark mb-3">Order has been placed successfully!</h1>
                <h4 class="text-success p-3 mb-3" style="background-color: aliceblue;">You will receive notificationby email with order details.</h4>
                <a href="menu.php" class="btn btn-secondary fs-4">Go an order some more</a>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>