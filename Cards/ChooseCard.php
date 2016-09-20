<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Choose Cash Back Card </title>


        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/choosecard.css" rel="stylesheet">
        <link href="../css/carousel.css" rel="stylesheet">
        <link href="../css/tabs.css" rel="stylesheet">


    </head>

    <body >

        <!-- NAVBAR
        ================================================== -->
        <?php
        include_once('../Cards/Header.php');
        ?>
        
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" id='img-class3'>
            <div class="container">
                </br></br>
                <h1 style="color: #fff;">CHOOSE YOUR CASH BACK CARD</h1>
                <p style="color: #fff;"> This tool gives you a fair idea of which CASH BACK credit card best suites your life style. Please enter how much your spend on each of the below categories each month. </p>


                <form  name="myForm" class="form-horizontal" method="post" action="CashBackCardsList.php" data-toggle="validator" onsubmit="return validateForm();">
                    <div class="form-group">
                        <label for="grocery" class="col-sm-2 control-label" >Grocery</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="grocery" id="grocery" placeholder="Grocery" data-toggle = "tooltip" 
                                   data-placement = "right" title = "supermarkets and grocery stores" required="true"></input>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbill" class="col-sm-2 control-label" >Telephone Bill</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="tbill" id="tbill" placeholder="Telephone Bill" data-toggle = "tooltip" 
                                   data-placement = "right" title = "Home or cell phone bills" required="true">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="restuarant" class="col-sm-2 control-label" >Restaurant</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="restuarant" id="restuarant" placeholder="Restuarant" data-toggle = "tooltip" 
                                   data-placement = "right" title = "resturants and coffee shopes " required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gas" class="col-sm-2 control-label" >Gas</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="gas" id="gas" placeholder="Gas" data-toggle = "tooltip" 
                                   data-placement = "right" title = "purchases made at pump" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="others" class="col-sm-2 control-label" >Others</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="others" id="others" placeholder="Others" data-toggle = "tooltip" 
                                   data-placement = "right" title = "online and other transactions" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">

                            <input type="submit" name="submit" id="submitbtn" class="btn btn-primary btn-lg" value="My Savings!">
                        </div>
                    </div>

                </form>

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
        <script src="../Cards/js/bootstrap.min.js"></script>
        <script src="../Cards/js/cashback.js"></script>

    </body>
</html>
