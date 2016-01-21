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
                    <label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="5"><?php echo $choicesText[4]; ?></label> 
                    <label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="6"><?php echo $choicesText[5]; ?></label> 
                    <label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="7"><?php echo $choicesText[6]; ?></label> 
                    <label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="8"><?php echo $choicesText[7]; ?></label> 
                    <label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="9"><?php echo $choicesText[8]; ?></label> 
                    <label class="btn btn-primary"> <input type="radio" name="response" autocomplate="off" value="10"><?php echo $choicesText[9]; ?></label> 



                </div>

                <center><input class="btn btn-primary btn-lg" input type="submit" name="next" value="Next"> </center>
            </form></label> 

        </div>
    </body>

    </html> 
