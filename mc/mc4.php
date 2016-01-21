   <html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<title></title>
    </head>

    <body>
    	<div class="container">
    		<form name="responseMC" method="POST" action="survey.php">
    			<div class="btn-group" data-toggle="buttons">
    				<p id="first"><font size="13">
    					<?php 
    					echo $promptText;
    					?>
    				</font></p>
    				<br> 

                    <label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="1"><?php echo $choicesText[0]; ?></label> 
    				<label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="2"><?php echo $choicesText[1]; ?></label> 
    				<label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="3"><?php echo $choicesText[2]; ?></label> 
    				<label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="4"><?php echo $choicesText[3]; ?></label> 

    			</div>

    			<center><input class="btn btn-primary btn-lg" input type="submit" name="next" value="Next"> </center>
    		</form></label> 

    	</div>
    </body>

    </html> 
