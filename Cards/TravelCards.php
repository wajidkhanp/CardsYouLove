<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Travel Credit Cards</title>

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
        <div id="myCarousel" class="carousel slide" data-ride="carousel"  >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner" role="listbox" >

                <div class="item active" id='img-class1' >
                    <div class="container">
                        <div class="carousel-caption">
                             </br>
                            <p> Welcome !!!! </p>
                            <p> Lets find a best Travel Credit Card for your World trip </p>
                            <p> Here are some features of travel credit cards that help you save money: </p>
                                    <p> Opportunities to earn points you can use to pay for travel </p>
                                    <img class="card-img" src="https://home.barclaycardus.com/content/dam/bcuspublic/card-plastic/card-front/bcus-arrival-plus1.png" alt="CITI Double Cash">
                        </div>
                    </div>
                </div>
                <div class="item" id='img-class4'>
                    <div class="container">
                        <div class="carousel-caption">
                            </br>
                            <p> Welcome !!!! </p>
                            <p> Lets find a best Travel Credit Card for your World trip </p>
                            <p> Here are some features of travel credit cards that help you save money: </p>
                                <p> Flexible choices for redeeming points across travel networks</p>
                                <img class="card-img" src="https://creditcards.chase.com/T-Marketplace/1110001/images/cardart/sapphire_preferred_card.png" alt="CITI Double Cash">

                        </div>
                    </div>
                </div>
                <div class="item" id='img-class2'>
                    <div class="container">
                        <div class="carousel-caption">
                            </br> </br>
                            <p> Welcome !!!! </p>
                            <p> Lets find a best Travel Credit Card for your World trip </p>
                            <p> Here are some features of travel credit cards that help you save money: </p>
                                <p> No foreign transaction fees</p>
                                <img class="card-img" src="https://www.capitalone.com/media/graphic-logo/credit-cards/card-art/www-venture-visa-sig-flat-9-14.png" alt="CITI Double Cash">

                        </div>
                    </div>
                </div>
                <div class="item" id='img-class1'>
                    <div class="container">
                        <div class="carousel-caption">
                            </br> </br>
                            <p> Welcome !!!! </p>
                            <p> Lets find a best Travel Credit Card for your World trip </p>
                            <p> Here are some features of travel credit cards that help you save money: <p>
                                    <p> Travel insurance and extra protections</p>
                                    <img class="card-img" src="http://www.thesimpledollar.com/wp-content/uploads/2016/02/bankofamericatravelrewards-BIG.jpg" alt="CITI Double Cash">

                        </div>
                   </div>
                </div>
                <div class="item" id='img-class4'>
                    <div class="container">
                        <div class="carousel-caption">
                            </br>
                            <p> Welcome !!!! </p>
                            <p> Lets find a best Travel Credit Card for your World trip </p>
                            <p> Here are some features of travel credit cards that help you save money: <p>
                                    <p> Large sign-up bonus incentives</p>
                                    <img class="card-img" src="https://icm.aexp-static.com/Internet/Acquisition/US_en/AppContent/CreditCards/img/Comparecards/chg_plat_176x111.gif" alt="CITI Double Cash">

                        </div>
                    </div>
                </div>
                <div class="item" id='img-class2'>
                    <div class="container">
                        <div class="carousel-caption">
                            </br>
                            <p> Welcome !!!! </p>
                            <p> Lets find a best Travel Credit Card for your World trip </p>
                            <p> Here are some features of travel credit cards that help you save money: </p>
                                    <p> No Annual Fee or Annual fee waived for the first year</p>
                                    <img class="card-img" src="https://www.penfed.org/uploadedImages/Products/Credit_Cards/_images/AMEX-Travel-Card-Art@2x.png" alt="CITI Double Cash">

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



        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing" >


            <?php
            include ("TravelCardDetails.php");


            for ($x = 0; $x <= 8; $x++) {

                echo '  <div class="col-lg-4"> <h4> ' . $cardDetails[$x][cardName] . ' </h4>'
                . '<img class="img-rounded" width="140" height="90" src=' . $cardDetails[$x][cardImage] . '>'
                . '<div class="features">
                                         <div class="key"> Rewards and Benefits: </div>
                                         <ul>' .
                '<li class="featext">' . $cardDetails[$x][feature1] . ' </li>
                                    <li class="featext">' . $cardDetails[$x][feature2] . ' </li>
                                    <li class="featext">' . $cardDetails[$x][feature3] . ' </li>
                                    <li class="featext">' . $cardDetails[$x][feature4] . ' </li>
                                    <li class="featext">' . $cardDetails[$x][feature5] . ' </li>
                                         <li class="featext">' . $cardDetails[$x][feature6] . ' </li> </ul>
                                     <a class="btn  btn-success btn-md" href=' . $cardDetails[$x][cardLink] . ' target="_blank">Learn More</a>    
                                   </div> </div> ';
            }
            ?>

        </div><!-- /.container -->

        <div class="container">
            <?php
            include_once('../Cards/Footer.php');
            ?>
        </div> <!-- /container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="js/bootstrap.min.js"></script>

    </body>
</html>

