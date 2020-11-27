<?php
include_once('./class/class-auth.php');

$auth = new dbFunction();
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
if ($_POST['register']) {
    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    if ($password == $confirmPassword) {
        $email = $auth->isUser($emailid);
        if (!$email) {
            $register = $auth->UserRegister($username, $emailid, $password);
            if ($register) {
                echo "<script>alert('Registration Successful')</script>";
            } else {
                echo "<script>alert('Registration Not Successful')</script>";
            }
        } else {
            echo "<script>alert('Email Already Exist')</script>";
        }
    } else {
        echo "<script>alert('Password Not Match')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<?php include './includes/template/head.php' ?>

<body>
    <?php include './includes/template/navigation.php' ?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                    <form class="form-signin" name="register" method="post">
                        <div class="form-label-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-label-group">
                            <input type="email" name="emailid" id="email" class="form-control" placeholder="Email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-label-group">
                            <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="form-label-group">
                            <input name="confirm_password" type="password" id="confirm_password" class="form-control" placeholder="Password" required>
                            <label for="confirm_password">Password</label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register" value="Sign up">Sign Up</button>
                        <hr class="my-4">
                        Already a member?<a href="login.php"> Go and log in </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>