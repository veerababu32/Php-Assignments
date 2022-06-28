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
            <table class="table">
                <?php
                if($count>0){
                    $sn=1;
                    while($arr=mysqli_fetch_assoc($sel)){
                        ?>
                        <tr>
                        <td><?= $sn;?></td>
                        <td><?= $arr['name'];?></td>
                        <td><?= $arr['email'];?></td>
                        <td><?= $arr['age'];?></td>
                        <td>
                        <a href="edit.php?eid=<?= $arr['id'];?>" class="btn btn-info">Edit</a>
                            <a href="?del=<?= $arr['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                        <?php
                        $sn++;
                    }
                }
                else {
                    ?>
                <tr>
                    <td colspan="5" class="text-center"> No record found </td>
                </tr>
                    <?php
                }
                ?>
            </table>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>