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
		<h1><small></small></h1>
	</div></div>

	<div class="container">
		<p> <?php echo $randChoice[0]; ?> </p>
		<form action="survey.php" method="post">
			<input type="hidden" name=<?= $randID[0]; ?>>
			<input type="range" name="response" min="1" max="10">
			<br><br>
			<input class="btn btn-primary btn-lg" input type="submit" name="next" value="Next"> 
		</form>
	</div>
</body>
</html>
