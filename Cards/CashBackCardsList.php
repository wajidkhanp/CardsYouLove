<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CASH BACK Cards</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/carousel.css" rel="stylesheet">
        <link href="../css/choosecard.css" rel="stylesheet">
        <link href="../css/tabs.css" rel="stylesheet">

    </head>

    <body id="body-main">

       <!-- NAVBAR
        ================================================== -->
        <?php
        include_once('../Cards/Header.php');
        ?>

        <div class="jumbotron" id='img-class4'>
            <div class="container">
                </br> </br>
                <h2 style="color: #fff;">Best 'Cash Back' Credit Cards </h2>
                <p style="color: #fff; font-weight: bold"> Below is the list of credit cards arranged in the order of highest Annual Savings based on your spent. Also, Annual savings are calculated by deducting annual fee for a given credit card. </p>

            </div>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">


            <?php
            $grocery = filter_input(INPUT_POST, 'grocery', FILTER_SANITIZE_SPECIAL_CHARS);
            $tbill = filter_input(INPUT_POST, 'tbill', FILTER_SANITIZE_SPECIAL_CHARS);
            $restuarant = filter_input(INPUT_POST, 'restuarant', FILTER_SANITIZE_SPECIAL_CHARS);
            $gas = filter_input(INPUT_POST, 'gas', FILTER_SANITIZE_SPECIAL_CHARS);
            $others = filter_input(INPUT_POST, 'others', FILTER_SANITIZE_SPECIAL_CHARS);
            include ("CardCatSave.php");

            $categoryObj = new CardCatSave($grocery, $tbill, $restuarant, $gas, $others);
            $CitiDCAnnualSaving = $categoryObj->getCitiDCAnnualSaving();
            $BlueCashPrefAnnaulSavings = $categoryObj->getBlueCashPrefAnnaulSavings();
            $CapitaloneQSAnnualSaving = $categoryObj->getCapitaloneQSAnnualSaving();
            $PenfedVisaPlatAnnualSaving = $categoryObj->getPenfedVisaPlatAnnualSaving();
            $BOACashRewardsAnnualSaving = $categoryObj->getBOACashRewardsAnnualSaving();
            $USbankCashAnnualSaving = $categoryObj->getUSbankCashAnnualSaving();
            $BarclayCashForwardAnnualSaving = $categoryObj->getBarclayCashForwardAnnualSaving();
            $BlueCashAnnualSaving = $categoryObj->getBlueCashAnnualSaving();
            $DiscoverChromeAnnualSaving = $categoryObj->getDiscoverChromeAnnualSaving();


            include ("CardDetails.php");

            function cmp_by_annaulSavings($a, $b) {
                return $a["annaulSavings"] - $b["annaulSavings"];
            }

            usort($cardDetails, "cmp_by_annaulSavings");
            ?>




            <?PHP
            $y = 0;
            for ($x = 8; $x >= 0; --$x) {
                ++$y;

                echo '  <div class="col-lg-4"> <h4> ' . $y . '.' . $cardDetails[$x][cardName] . ' </h4>'
                . '<img class="img-rounded" width="140" height="90" src=' . $cardDetails[$x][cardImage] . '>'
                . '<div class="valuey">ANNUAL SAVINGS:</div> <div id="annualSavings"> $' . $cardDetails[$x][annaulSavings] . '</div>'
                . '<a class="btn  btn-success btn-sm" href=' . $cardDetails[$x][cardLink] . ' target="_blank">Learn More</a>    
                </div> ';
            }
            ?>


        </div><!-- /.container -->
        <!-- Footer -->
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

    </body>
</html>
