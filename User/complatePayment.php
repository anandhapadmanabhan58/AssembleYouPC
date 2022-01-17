<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Helthza - Easy sanitization on your finger tip | Home : lcc</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Payment Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <!-- js -->
        <script type="text/javascript" src="js/creditly.js"></script>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
            $(function () {
                var creditly = Creditly.initialize(
                        '.creditly-wrapper .expiration-month-and-year',
                        '.creditly-wrapper .credit-card-number',
                        '.creditly-wrapper .security-code',
                        '.creditly-wrapper .card-type');

                $(".creditly-card-form .submit").click(function (e) {
                    e.preventDefault();
                    var output = creditly.validate();
                    if (output) {
                        // Your validated credit card output
                        console.log(output);
                    }
                });
            });
        </script>
        <!-- //js -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <style>
            .button {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #3d3d5c;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
            }

            .button:hover {background-color: #3d3d5c}

            .button:active {
                background-color: #3d3d5c;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
        </style>

    </head>
    <body>
        <div class="main">



            <h1>Complete Your Payment</h1>
            <div class="agileits_main_grid w3layouts_main w3_main_grid">
                <div class="agileits_main_grid_right agileits_w3layouts_grid_right">
                    <?php
                    $amt = $_GET['id'];
                    ?>
                    <h2>Amount To Pay</h2>
                    <p>&#8377; <?php echo $amt ?>/-</p>
                </div>
                <div class="agileits_main_grid_left w3l_main w3ls_main_grid_left">
                    <div class="agileits_main_grid_left1 agileits_main_grid_left1">
                        <form method="POST" class="creditly-card-form agileinfo_form">
                            <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="credit-card-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <a href="ViewCart.php"><h1>Cancel Payment</h1></a>
                                        </div>
                                        <div class="controls">
                                            &nbsp;

                                        </div>

                                        <div class="controls">
                                            <label class="control-label">Card Number</label>
                                            <input class="billing-address-name form-control" type="text" name="number" maxlength="16"
                                                   inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
                                                   placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" required="Please fill the details">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">CVV</label>
                                            <input class="security-code form-control"
                                                   inputmode="numeric"
                                                   type="text" name="security-code"
                                                   placeholder="&#149;&#149;&#149;"required="Please fill the details">
                                        </div>
                                    </div>
                                    <div class="second-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Name on Card</label>
                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith" required="Please fill the details">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Expiration</label>
                                            <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY" required="Please fill the details">
                                        </div>

                                    </div>
                                   
                                </div>
                            </section>

                        </form>
                        <a href="../Action/ProceedToPay.php"> <button class="button" name="submit">PAY</button></a>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="agileits_copyright agile_copy">
                <p>© 2021 Helthza. All rights reserved | Design by <a href="http://www.lcckochi.com/" target="_blank"> LCC.</a> </p>
            </div>
        </div>
    </body>
</html>