<?php 
error_reporting(0);
require '/dbConnection/connect.php';

?>
<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">	<div class="page-header">
		<h1><small>Login</small></h1>
	</div></div>

	<div class="container">
		<form class="form-inline" action="survey.php" method="post">
			<div class="form-group">
				<label class="sr-only" for="userID">User ID</label>
				<input name="userID" type="text" class="form-control" id="userID" placeholder="User ID">
			</div>
			
			<div class="checkbox">
			</div>
			<button type="submit" class="btn btn-default" name="submit">Sign in</button>
		</form>
	</div>
</body>
</html>

