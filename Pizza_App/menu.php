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
                <h2>Menu</h2>
                <div class="row justify-content-between">
                    <div class="col-4 card shadow mb-4 ms-3 d-flex flex-column align-items-center" style="height:250px; width:350px;">
                        <img src="images/cheese-pizza.jpg" alt="cheese-pizza" style="height:130px; width:200px;" class="my-3">
                        <h4>Cheeseburger</h4>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-dark me-3">Add to cart</a>
                            <p class="m-auto fw-bold">$18.3</p>
                        </div>
                    </div>
                    <div class="col-4 card shadow mb-4 ms-4 d-flex flex-column align-items-center" style="height:250px; width:350px;">
                        <img src="images/don-bacon.jpg" alt="don-bacon" style="height:130px; width:200px;" class="my-3">
                        <h4>Don Bacon</h4>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-dark me-3">Add to cart</a>
                            <p class="m-auto fw-bold">$24.1</p>
                        </div>
                    </div>
                    <div class="col-4 card shadow mb-4 ms-4 me-3 d-flex flex-column align-items-center" style="height:250px; width:350px;">
                        <img src="images/carne-pizza.jpg" alt="carne-pizza" style="height:130px; width:200px;" class="my-3">
                        <h4>Carne</h4>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-dark me-3">Add to cart</a>
                            <p class="m-auto fw-bold">$26.3</p>
                        </div>
                    </div>
                    <div class="col-4 card shadow ms-3 d-flex flex-column align-items-center" style="height:250px; width:350px;">
                        <img src="images/julienne-pizza.jpg" alt="julienne-pizza" style="height:130px; width:200px;" class="my-3">
                        <h4>Julienne</h4>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-dark me-3">Add to cart</a>
                            <p class="m-auto fw-bold">$12.6</p>
                        </div>
                    </div>
                    <div class="col-4 card shadow ms-4 d-flex flex-column align-items-center" style="height:250px; width:350px;">
                        <img src="images/chicken-pizza.jpg" alt="chicken-pizza" style="height:130px; width:200px;" class="my-3">
                        <h4>5 cheeze</h4>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-dark me-3">Add to cart</a>
                            <p class="m-auto fw-bold">$14.35</p>
                        </div>
                    </div>
                    <div class="col-4 card shadow ms-4 me-3 d-flex flex-column align-items-center" style="height:250px; width:350px;">
                        <img src="images/cipollo-pizza.jpg" alt="cipollo-pizza" style="height:130px; width:200px;" class="my-3">
                        <h4>Cipollo</h4>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-dark me-3">Add to cart</a>
                            <p class="m-auto fw-bold">$10</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>