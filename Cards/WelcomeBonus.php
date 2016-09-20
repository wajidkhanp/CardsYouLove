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
                </br></br>
                <h2 style="color: #fff;">Credit Card Sign Up Bonuses : Master List</h2>
                <p style="color: #fff;"> Please select one or more check box to view Credit Card Sign Up Bonuses </p>
                <div class="checkbox-inline">
                    <input type="checkbox" value="American Express" id="amex" onclick="toggle_display('amextxt');" >
                    <label style=" margin-left: 20px; margin-top: 10px; color: #fff;">American Express</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" value="Chase" id='chase' onclick="toggle_display('chasetxt');">
                    <label style="margin-left: 20px; margin-top: 10px; color: #fff;">Chase</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" value="Bank of America" id='boa' onclick="toggle_display('boatxt');">
                    <label style="margin-left: 20px; margin-top: 10px; color: #fff;">Bank of America</label>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row" id='amextxt' style="display:" hidden>
                <div class="col-md-4">
                    <h2>Amex EveryDay</h2>
                    <p>10,000 membership rewards points after you make $1,000 in purchases within the first three months, no annual fee (we have seen bonus of 25K points, which is mostly targeted).</p>
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>AmEx EveryDay Preferred</h2>
                    <p> 15,000 membership rewards points after you make $1,000 in purchases, annual fee of $95 not waived first year (we have seen bonus of 30K points, which is mostly targeted).</p>
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2>Blue Cash Everyday® </h2>
                    <p> $25 after your first purchase and another $100 when you spend $1,000 within three months, no annual fee (We have seen $250 welcome bonus as well, however it is mostly targeted.)</p> 
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2>Blue Cash Everyday® Preferred </h2>
                    <p> $25 after your first purchase and another $150 when you spend $1,000 within three months, annual fee $75 not waived first year(We have seen $300 welcome bonus as well, however it is mostly targeted.)</p> 
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2> Premier Rewards Gold Card: </h2>
                    <p> 50,000 Membership Rewards points when you spend $1,000 within the first three months. Annual fee of $195 is waived for the first year (Highest sign up bonus has been 75,000 points). </p>
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2> Platinum Card® from American Express</h2>
                    <p> Receive 40,000 Membership Rewards® pointsafter you use your new Card to make $3,000 in purchases in your first 3 months, annual fee $450 not waived first year(We have seen 100K points welcome bonus as well, however it is mostly targeted.)</p> 
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2>Starwood Preferred Guest® Card</h2>
                    <p> Earn 25,000 bonus Starpoints® after you use your new Card to make $3,000 in purchases within the first 3 months.  $0 introductory annual fee for the first year, then $95(We have seen $30K points welcome bonus as well, however it is mostly targeted.)</p> 
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2>Gold Delta SkyMiles® Card</h2>
                    <p> Earn 30,000 Bonus Miles after you make $1,000 in purchases on your new Card within your first 3 months† and a $50 statement credit after you make a Delta purchase with your new Card within your first 3 months.  $0 introductory annual fee for the first year, then $95(We have seen $60K points welcome bonus as well, however it is mostly targeted.)</p> 
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2>Hilton HHonorsTM Card </h2>
                    <p> Earn 40,000 Hilton HHonors™ Bonus Pointsafter you spend $750 in purchases on the Card within your first 3 months of Card Membership. (We have seen $60K points welcome bonus as well, however it is mostly targeted.)</p> 
                    <p><a class="btn btn-primary" href="https://www.americanexpress.com/us/credit-cards/compare" role="button">View details &raquo;</a></p>
                </div>
            </div>



            <div class="row" id='boatxt' style="display:" hidden >
                <div class="col-md-4">
                    <h2>BankAmericard Cash Rewards™ credit card</h2>
                    <p> $100 cash rewards bonus after making at least $500 in purchases in the first 90 days of your account opening. No Annual fee.(We have seen $200 welcome bonus offer in past, however it is mostly targeted.)</p>
                    <p><a class="btn btn-success" href="https://www.bankofamerica.com/credit-cards/view-all-credit-cards.go" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>BankAmericard Travel Rewards® credit card</h2>
                    <p> 20,000 bonus points after making least $1,000 in purchases in the first 90 days of your account opening. No Annual Fee. </p>
                    <p><a class="btn btn-success" href="https://www.bankofamerica.com/credit-cards/view-all-credit-cards.go" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2>BankAmericard® Better Balance Rewards™ credit card</h2>
                    <p> Earn $25 per quarter to pay down your balance faster when you pay more than the monthly minimum on time each month–that can be up to $100 each year with no annual fee</p> 
                    <p><a class="btn btn-success" href="https://www.bankofamerica.com/credit-cards/view-all-credit-cards.go" role="button">View details &raquo;</a></p>
                </div>

            </div>

            <div class="row" id='chasetxt' style="display:" hidden>
                <div class="col-md-4">
                    <h2>Chase Freedom® </h2>
                    <p> Earn a $150 bonus after you spend $500 on purchases in your first 3 months from account opening. 0% intro APR for 15 months & $0 annual fee. </p>
                    <p><a class="btn btn-info" href="https://creditcards.chase.com" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Chase Sapphire Preferred®</h2>
                    <p> 50,000 bonus points after spending $4,000 on purchases in the first 3 months from account opening. $0 intro annual fee, after that $95† </p>
                    <p><a class="btn btn-info" href="https://creditcards.chase.com" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2>United MileagePlus® Explorer card</h2>
                    <p> Earn 30,000 bonus miles after you spend $1,000 on purchases in the first 3 months your account is open. $0 intro annual fee, after that $95† </p>
                    <p><a class="btn btn-info" href="https://creditcards.chase.com" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Southwest Airlines® Rapid Rewards® Premier card</h2>
                    <p> Earn 25,000 points after you spend $1,000 on purchases in the first 3 months your account is open. $95 annual fee. </p>
                    <p><a class="btn btn-info" href="https://creditcards.chase.com" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>British Airways Visa Signature® card</h2>
                    <p> Earn 50,000, 75,000 or 100,000 bonus Avios. $95 annual fee. </p>
                    <p><a class="btn btn-info" href="https://creditcards.chase.com" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" >
                    <h2>United MileagePlus® Club card</h2>
                    <p> $100 statement credit after your first purchase. $450 annual fee with United ClubSM membership </p>
                    <p><a class="btn btn-info" href="https://creditcards.chase.com" role="button">View details &raquo;</a></p>
                </div>

            </div>

        </div> <!-- /container -->

        <!--- Footer ---->
        
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
        <script src="../js/cashback.js"></script>

    </body>
</html>

