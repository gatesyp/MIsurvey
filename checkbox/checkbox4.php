<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<h1><small><?php echo $promptText; ?> </small></h1>
		<p>Press all that apply. </p>


		<form action="survey.php" method="post">

			<div class="btn-group" data-toggle="buttons">
				
				<input type="checkbox" name="response[]" value="1"autocomplete="off" /> <label> <?php echo $choicesText[0] ?> </label>

				<input type="checkbox" name="response[]" value="1"autocomplete="off"/> <label> <?php  echo $choicesText[1] ?> </label> 

				<input type="checkbox" name="response[]" value="1"utocomplete="off"/> <label> <?php   echo $choicesText[2]?> </label>

				<input type="checkbox" name="response[]" value="1"autocomplete="off"/> <label> <?php  echo $choicesText[3] ?>  </label> 


			</div>
			<input class="btn btn-primary btn-lg" input type="submit" name="next" value="Next"> 
		</form>
	</div>
</body>

</html> 

