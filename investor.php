<?php
include 'views/templates.php';

generateHeader('How You Can Help', array('type', 'investor', 'refineslide'));
?>
<!-- navigation ends here -->
<!-- start different pages of my parallax thing -->
<div id="investor-banner" class="parallax-1 screen-1 banner" data-stellar-background-ratio="0.3">
    <div class="container">
        <h1 class="title">How You Can Help</h1>
    </div>
</div>
<div id="edu-content" class="content screen-2 parallax-2">
    <div class="container">
        <h1>Corporate Sponsorship</h1>
        <div class="col-md-12">
            <h2></h2>
            <p class="lead">Casa San Miguel would like to thank the following companies for assisting and enabling.
            </p>
        </div>
        
        <table class="table">
                <thead>
                    <tr>
                        <td></td>
                        <td>Operating Budget</td>
                        <td>Infrastructure Budget</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Peace Education</td>
                        <td>P0.25 Million</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Basic Education</td>
                        <td>P0.8 Million</td>
                        <td>P1.2 Million</td>
                    </tr>
                    <tr>
                        <td>Arts Education</td>
                        <td>P1 Million</td>
                        <td>P2.8 Million</td>
                    </tr>
                    <tr>
                        <td>Community Enterprise</td>
                        <td>P0.5 Million</td>
                        <td>P0.3 Million</td>
                    </tr>
                </tbody>
            </table>
        
        <h2 class="text-center">Our Partners and Enablers</h2>
        <div class="col-xs-3"><img src="public/images/logo-starbucks.png" class="img-responsive" /></div>
        <div class="col-xs-3"><img src="public/images/logo-smart.png" class="img-responsive" /></div>
        <div class="col-xs-3"><img src="public/images/logo-siemens.png" class="img-responsive" /></div>
        <div class="col-xs-3"><img src="public/images/logo-citibank.png" class="img-responsive" /></div>
        <div class="col-xs-3"><img src="public/images/logo-ncca.png" class="img-responsive" /></div>
        <div class="col-xs-3"><img src="public/images/logo-dnl.png" class="img-responsive" /></div>
        <div class="col-xs-3"><img src="public/images/logo-metrobank.png" class="img-responsive" /></div>
        <div class="col-xs-3"><img src="public/images/logo-pcso.png" class="img-responsive" /></div>
        
        
        
        
        


    </div>
</div>
<?php generateFooter(); ?>
<!-- end different pages of my parallax thing -->
</div>
</div>

<?php generateJS(array('jquery.refineslide.min', 'slider')); ?>
