<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Your Cards- Home</title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/carousel.css" rel="stylesheet">
         <link href="../css/tabs.css" rel="stylesheet">

    </head>

   <body id="body-main">

        <!-- NAVBAR
        ================================================== -->
        <?php
        include_once('../Cards/Header.php');
        ?>

        
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" id='img-class1'>
            <div class="container">
                <h1 style="color:#fff;">Are you excited, we are too ... </h1>
                <p style="color:#fff;"> Soon to come, many exciting news which you always love to see and hear. Come back again!!!!</p>
                
            </div>
        </div>
       

         <div class="container">
             <?php
            include_once('../Cards/Footer.php');
            ?>
        </div> <!-- /container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>
