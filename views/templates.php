<?php

function generateHeader($title = 'CASA San Miguel | PEACE Program', $css = array()) {
    ?>
    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
            <title><?php echo $title; ?></title>
            <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.ico">
            <link rel="stylesheet" href="public/vendor/bootstrap/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="public/vendor/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="public/stylesheets/styles.css">
            <link rel="stylesheet" href="public/stylesheets/responsive.css">
            <?php
            foreach ($css as $stylesheet) {
                ?>
                <link rel = "stylesheet" href = "public/stylesheets/<?php echo $stylesheet; ?>.css">
                <?php
            }
            ?>


        </head>
        <body>
            <!-- do this #wrapper>#scroller thing for stellar in mobile-->
            <div id="wrapper">
                <div id="scroller">
                    <!-- navigation starts here -->
                    <nav id="navigation">
                        <div class="container">
                            <section class="branding col-md-4">
                                <img class="logo" src="public/images/logo.png" class="feature-image" alt="">
                                <h1 class="logo"> CASA San Miguel</h1>
                            </section>
                            <ul id="primary-nav" class="col-md-8">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="arts.php">Arts</a></li>
                                <li><a href="hotel.php">Hotel</a></li>
                                <li><a href="museum.php">Museum</a></li>
                                <li><a href="cafe.php">Cafe</a></li>
                                <li><a href="investor.php">Help</a></li>
                            </ul>
                        </div>
                    </nav>

                    <?php
                }

                function generateFooter() {
                    ?>
                    <div class="footer">
                        <div class="container">
                            <p>CASA San Miguel, Evangelista Street, Barangay San Miguel, San Antonio, Zambales, 2206 Philippines </p>
                        </div>
                    </div>

                    <?php
                }

                function generateJS($js = array()) {
                    ?>
                    <script src = "public/vendor/jquery/jquery.min.js"></script>
                    <script src = "public/vendor/jquery/jquery.nicescroll.js"></script>
                    <script src="public/vendor/jquery/jquery.stellar.js"></script>
                    <script src="public/vendor/jquery/jquery.sticky.js"></script>
                    <script src="public/javascripts/ticker.js"></script>
                    <script src="public/javascripts/core.js"></script>
                    </body>
                    </html>
                    <?php
                    foreach ($js as $javascript) {
                        ?> <script src="public/javascripts/<?php echo $javascript; ?>.js"></script> <?php
                    }
                }