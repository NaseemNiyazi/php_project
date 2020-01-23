<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>
			Project_php
		</title>
	</head>
	<body>
		<form role="form" method="post" action="index.php">
			<div class="form-group row mt-5 ml-5">
				<label for="inputEmail" class="col-sm-1 col-form-label">password</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  name="email" placeholder="please Enter Your Email">
				</div>
				<div class="col-sm-2">
					<input type="submit" value="Sign in" name="submit" class="btn btn-primary"/>
				</div>
			</div>
		</form>
	</body>
</html>



<?php

	if(isset($_POST['sub'])){
		$email = $_POST['email'];

		$session = $_SESSION['email']=$email;
	}
	include("student.html");
?>