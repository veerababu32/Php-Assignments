<?php
    include("db.php");
    if(isset($_POST['regis'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $city=$_POST['city'];
        $gender=$_POST['r1'];
        $tmp=$_FILES['att']['tmp_name'];
        $fname=$_FILES['att']['name'];
        $ext=pathinfo($fname,PATHINFO_EXTENSION);
        if(empty($email) || empty($pass) || empty($name || empty($age) || empty($city) || empty($gender) || empty($tmp))){
            $errMsg="Please fill blank fields";
        }
        else {
            if(mysqli_query($connection, "insert into userdetails(email, password, name, age, city, gender, image) values('$email', '$pass', '$name', $age, '$city', '$gender', '$email.jpg')")){
                header("location:login.php");
                echo"success";
            }
            // if(is_dir("users/$email")){
            //     $errMsg="Email already registerd";
            // }
            // else {
            //     if(mysqli_query($connection, "insert into userdetails(email, password, name, age, city, gender, image) values('$email', '$pass', '$name', $age, '$city', '$gender', '$email.jpg')")){
            //         if(move_uploaded_file($tmp,"users/$email.jpg")){
            //             header("location:login.php");
            //             echo"success";
            //         }
            //     }
            // }
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
        <style>
            .error{
                color: red;
            }
        </style>
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
                    <a href="login.php" class="btn btn-outline-dark">Login</a>
                </div>
            </nav>
            <form method="post" class="row">
                <div class="form-floating mb-2 col-6">
                    <input type="email" name="email" id="floatingEmail" class="form-control" placeholder="Email" onblur="validate1()"/>
                    <label for="floatingEmail" style="padding: 1rem 1.25rem;">Email</label>
                    <p id="error1" class="error"></p>
                </div>
                <div class="form-floating mb-2 col-6">
                    <input type="password" name="password" id="floatingPass" class="form-control" placeholder="Password" onblur="validate2()"/>
                    <label for="floatingPass" style="padding: 1rem 1.25rem;">Password</label>
                    <p id="error2" class="error"></p>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="name" id="floatingName" class="form-control" placeholder="Name" onblur="validate3()"/>
                    <label for="floatingName" style="padding: 1rem 1.25rem;">Name</label>
                    <p id="error3" class="error"></p>
                </div>
                <div class="form-floating mb-2 col-6">
                    <input type="text" name="age" id="floatingAge" class="form-control" placeholder="Age" onblur="validate4()"/>
                    <label for="floatingAge" style="padding: 1rem 1.25rem;">Age</label>
                    <p id="error4" class="error"></p>
                </div>
                <div class="form-floating mb-2 col-6">
                    <input type="text" name="city" id="floatingCity" class="form-control" placeholder="City" onblur="validate5()"/>
                    <label for="floatingAge" style="padding: 1rem 1.25rem;">City</label>
                    <p id="error5" class="error"></p>
                </div>
                <div class="form-group mb-2">
                    <label>Gender:</label>
                    <input type="radio" name="r1" value="male" />Male
                    <input type="radio" name="r1" value="female" />Female
                </div>
                <div class="form-group mb-3">
                    <label>Image:</label>
                    <input type="file" name="att" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark" value="Register" name="regis"/>
                </div>
            </form>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="validate.js"></script>
    </body>
</html>