<?php
include_once('./class/class-auth.php');
$CURRENT_PAGE = "Login";
$PAGE_TITLE = "Login";

session_start();

$msg = '';

if (isset($_POST['login']) && !empty($_POST['username']) 
   && !empty($_POST['password'])) {

   if ($_POST['username'] == 'user' && 
      $_POST['password'] == '1234') {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['username'] = 'user';

      echo "Login Successful";
      header('Refresh: 1; URL = index.php');
   }else {
      $msg = 'Wrong username or password';
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
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" name="login" method="post">
              <div class="form-label-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
              </div>
              <div class="form-label-group">
                <input name="password" type="password" id="password" class="form-control" placeholder="Password"  required>
                <label for="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="login" type="submit">Sign in</button>
              <hr class="my-4">
              Not a member? <a href="register.php">Register</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>