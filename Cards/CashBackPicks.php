<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CASH BACK Cards</title>

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

        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active" id='img-class1'>
                    <div class="container" >
                        <div class="carousel-caption">
                            <img class="card-img" src="https://icm.aexp-static.com/Internet/Acquisition/US_en/AppContent/CreditCards/CardArts/Angled/BlueCashEveryday.png" alt="Blue Cash Preferred® Card from American Express">
                            <h1>Blue Cash Preferred® Card </h1>
                            <p>Note: This card has two version, one with Annual fee of $75 and another with no Annual Fee. If you spend more on grocery, this one will yield you more savings.</p>
                            <p><a class="btn btn-lg btn-primary" href="https://www.americanexpress.com/us/credit-cards/blue-cash-preferred?nc=yes&linknav=us-ccsg-cardshop-cm-viewallcards-learnmore" role="button">Apply Today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item" id='img-class4'>
                    <div class="container">
                        <div class="carousel-caption">
                            <img class="card-img1" src="https://www.penfed.org/uploadedImages/Products/Credit_Cards/_images/Platinum-Rewards-Visa-Signature-Card-Art@2x.png" alt="Penfed Platinum Visa Signature Card">
                            <h1>Penfed Platinum Rewards Card</h1>
                            <p> This card is one of the favorites of many credit card holders. It gives 5% Cash Back on gas purchases with no limit and quarterly rotations.  </p>
                            <p><a class="btn btn-lg btn-primary" href="https://www.penfed.org/platinum-rewards-visa-signature/" role="button">Apply Today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item" id='img-class2'>
                    <div class="container">
                        <div class="carousel-caption">
                            <img class="card-img" src="http://creditcards.citicards.com/usc/doublecash/2015/Mar/PS/images/card.png" alt="CITI Double Cash">
                            <h1>Citi® Double Cash Card.</h1>
                            <p> Cash Back earning structure is simple and easy with no hassle of category selection each quarter. </p>
                            <p><a class="btn btn-lg btn-primary" href="http://creditcards.citicards.com/usc/doublecash/2015/Mar/PS/default.htm?BT_SC=J.PB.BkM.vw.HgS.be6.iOX.A.F!T&m=23S3111111W&BT_TRF=171461&BT_MKWD=i4kJciML|d{Device}_pcrid_{AdId}_pmt_{BidMatchType}_pkw_{keyword}&ProspectID=E95C0043AE264289A7704A848B61FDBB" role="button">Apply Today</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                
                <span class="sr-only">Next</span>
            </a>
            
        </div><!-- /.carousel -->

        <div class="container">
            
            <p style="text-align: center;"><a class="btn btn-md btn-primary" href="../Cards/ChooseCard.php" role="button">Click Here !!! To know your Annual Savings</a></p>
            
        </div>
        <!-- Marketing messaging and features
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <?php
            include ("CardDetails.php");

            
            for ($x = 0; $x <= 8; $x++) {

                echo '  <div class="col-lg-4"> <h4> ' . $cardDetails[$x][cardName] . ' </h4>'
                . '<img class="img-rounded" width="140" height="90" src=' . $cardDetails[$x][cardImage] . '>'
                . '<div class="features">
                    <div class="key"> Key Features: </div>
                     <ul>' .
                '<li class="featext">' . $cardDetails[$x][feature1] . ' </li>
                <li class="featext">' . $cardDetails[$x][feature2] . ' </li>
                <li class="featext">' . $cardDetails[$x][feature3] . ' </li>
                <li class="featext">' . $cardDetails[$x][feature4] . ' </li>
                <li class="featext">' . $cardDetails[$x][feature5] . ' </li> </ul>
                 <a class="btn  btn-success btn-md" href=' . $cardDetails[$x][cardLink] . ' target="_blank">Learn More</a>    
               </div> </div> ';
            }
            ?>
        </div><!-- /.container -->
        
        <div class="container">
            
            <p style="text-align: center;"><a class="btn btn-md btn-primary" href="../Cards/ChooseCard.php" role="button">Click Here !!! To know your Annual Savings</a></p>
            
        </div>

          <!-- FOOTER -->
          <div class="container">
            <?php
            include_once('../Cards/Footer.php');
            ?>
        </div>
         
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/cashback.js"></script>
     

    </body>
</html>
