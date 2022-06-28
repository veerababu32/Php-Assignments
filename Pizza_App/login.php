<?php
    include("db.php");
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];
        if(empty($email) || empty($pass)){
            $errMsg="Please fill blank fields";
        }
        else {
            $sel = mysqli_query($connection, "select email, password from userdetails where email='$email' and password='$pass'");
            $arr = mysqli_fetch_assoc($sel);
            if($email === $arr['email'] && $pass === $arr['password']){
                session_start();
                $_SESSION['sid']=$email;
                if(!empty($check)){
                    setcookie("email",$email,time()+3600);
                    setcookie("pass",$password,time()+3600);
                }
                header("location:menu.php");
                echo"success";
            }
            else{
                $errMsg="Enter correct Email or Password";
            }
        }
    }
?>
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
            <?php if(isset($errMsg)) { ?>
                <div class="alert alert-danger"><?= $errMsg;?></div>
            <?php } ?>
            <nav class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <a href="index.php">
                        <img src="images/pizza-img.png" alt="pizza-img" style="height:80px; width:80px; border-radius:100px;">
                    </a>
                </div>
                <div>
                    <a href="signup.php" class="btn btn-outline-dark">Sign Up</a>
                </div>
            </nav>
            <form method="post">
                <h3 class="mb-2">Login</h3>
                <div class="form-floating mb-2">
                    <input type="email" name="email" id="floatingEmail" class="form-control" placeholder="Email"/>
                    <label for="floatingEmail">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" id="floatingPass" class="form-control" placeholder="Password"/>
                    <label for="floatingPass">Password</label>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark" value="Login" name="login"/>
                </div>
            </form>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>