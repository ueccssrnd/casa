<?php
include 'views/templates.php';

generateHeader('Music', array('type', 'arts', 'refineslide'));
?>
<!-- navigation ends here -->
<!-- start different pages of my parallax thing -->
<div id="arts-banner" class="parallax-1 screen-1 banner" data-stellar-background-ratio="0.3">
    <div class="container">
        <h1 class="title">Playing It Forward.</h1>
    </div>
</div>
<div id="edu-content" class="content screen-2 parallax-2">
    <div class="container">
        <h1>Arts Education</h1>
        <div class="col-md-12">
            <p class="lead">A child who is able to draw is able to draw their 
                future. Casa San Miguel provides weekend workshops for over 100 
                local children in the Performing Arts, Visual Arts and Writing. 
                The Pundaquit Peace Virtuosi will server as Peace Ambassadors 
                through community and outreach programs.
            </p>
        </div>
        <div class="col-md-12 photo-gallery">
            <ul class="rs-slider">
                <li><img src="public/images/casa-house.jpg" alt="Historical Photographs"/>
                    <div class="rs-caption rs-bottom">
                        <h3>5 Beautifully Appointed Guest Rooms</h3>
                        <p>Historical photographs (1905) of Aetas by American researcher William Allen Reed as well as videos and artifacts reflecting the rich Aeta heritage.</p>
                    </div>
                </li>
                <li><img src="public/images/banner-museum.jpg" alt=""/>
                    <div class="rs-caption rs-bottom">
                        <h3>Amenities</h3>
                        <p>These include fans, air conditioning, complimentary Internet access – LAN, and a shower. </p>
                    </div>
                </li>
                <li><img src="public/images/casa-food.jpg" alt=""/>
                    <div class="rs-caption rs-bottom">
                        <h3>That Beach Dinner</h3>
                        <p>Copy about eating food sa beach.</p>
                    </div>
                </li>
                <li><img src="public/images/casa-beach-dinner.jpg" alt=""/>
                    <div class="rs-caption rs-bottom">
                        <h3>Beach Dinner</h3>
                        <p>The hotel offers many unique recreational opportunities such as garden. When you are looking for comfortable and convenient accommodations in Subic (Zambales), make Casa San Miguel Bed and Breakfast your home away from home.</p>
                    </div>
                </li>
            </ul>
        </div> <!--end photo gallery-->
        <div class="faces">
            <h1>Resident Artists</h1>
            <div class="col-md-2 col-xs-4">
                <img src="public/images/art-coke.jpg" class="img-responsive img-circle"/>
                <h3 class="text-center">Coke Bolipata</h3>
            </div>
            <div class="col-md-2 col-xs-4">
                <img src="public/images/art-carlo.jpg" class="img-responsive img-circle" />
                <h3 class="text-center">Carlo Gabuco</h3>
            </div>
            <div class="col-md-2 col-xs-4">
                <img src="public/images/art-geloy.jpg" class="img-responsive img-circle"/>
                <h3 class="text-center">Geloy Concepcion</h3>
            </div>
            <div class="col-md-2 col-xs-4">
                <img src="public/images/art-jazel.jpg" class="img-responsive img-circle"/>
                <h3 class="text-center">Jazel Kristin</h3>
            </div>
            <div class="col-md-2 col-xs-4">
                <img src="public/images/art-jeric.jpg" class="img-responsive img-circle"/>
                <h3 class="text-center">Geric Cruz</h3>
            </div>
            <div class="col-md-2 col-xs-4">
                <img src="public/images/art-ruelo.jpg" class="img-responsive img-circle"/>
                <h3 class="text-center">Ruelo Lozendo</h3>
            </div>
        </div>


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
