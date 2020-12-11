<?php include("config/config.php"); ?>
<!DOCTYPE html>
<html>
<!-- Head  -->
<?php include("includes/template/head.php"); ?>

<body>
	<!-- Navigation  -->
	<?php include("includes/template/navigation.php"); ?>

	<!-- Page Content -->
	<div class="jumbotron" id="particles">
		<center> <h1>Hello there!</h1> </center>
	</div>
	<div class="container" id="main-content">
	<center> <h2> Welcome to my Unit Survey System! </h2>
		<br/>
		<p>Using this system it will be possible to evaluate your university units as well as suggest changes and giving feedback.
		I will then generate a Report that the lecturer will be able to view.
	</p>
	<p>Don't worry! I value your privacy for this reason I will not display your name. All surveys are anonymous!
		Only the lecturer will be able to view them as he will need to login</p>
		<button class="btn btn-lg btn-primary btn-block text-uppercase"  onclick="location.href='survey.php';" name="register" value="Sign up"> Start Now!</button>
		</center>
	</div>

	<?php include("includes/template/footer.php"); ?>

</body>

</html>