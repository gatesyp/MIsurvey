<?php 


?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <title></title>
</head>

<body>
  <div class="container">

    <p id="question"><font size="16">
    <?php echo $promptText ?>
    </font></p>

    <form name="response" method="POST" action="survey.php">
      <input class="btn btn-primary btn-lg" type="submit"  name="response" value=<?= $choicesText[0]; ?>>
      <input class="btn btn-primary btn-lg" type="submit"  name="response" value=<?= $choicesText[1]; ?>>
    </form><br>
  </div>
</body>

</html> 
