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
        <h1>Corporate Social Responsibility.</h1>
        <div class="col-md-12">
            <p class="lead">A child who is able to draw is able to draw their 
                future. Casa San Miguel provides weekend workshops for over 100 
                local children in the Performing Arts, Visual Arts and Writing. 
                The Pundaquit Peace Virtuosi will server as Peace Ambassadors 
                through community and outreach programs.
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
        
        <h2 class="text-center">Our Investors</h2>
        <div class="col-sm-3"><img src="public/images/logo-starbucks.png" class="img-responsive" /></div>
        <div class="col-sm-3"><img src="public/images/logo-siemens.png" class="img-responsive" /></div>
        <div class="col-sm-3"><img src="public/images/logo-citibank.png" class="img-responsive" /></div>
        <div class="col-sm-3"><img src="public/images/logo-dnl.png" class="img-responsive" /></div>
        
        
        
        


    </div>
</div>

<div class="footer">
    <div class="container">
        <p>CASA San Miguel, Evagelista Street, Barangay San Miguel, San Antonio, Zambales, 2206 Philippines </p>
    </div>

</div>
<!-- end different pages of my parallax thing -->
</div>
</div>

<?php generateFooter(array('jquery.refineslide.min', 'slider')); ?>
