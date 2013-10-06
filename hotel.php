<?php
include 'views/templates.php';

generateHeader('Hotel', array('type', 'refineslide'));
?>
<!-- navigation ends here -->
<!-- start different pages of my parallax thing -->
<div id="hotel-banner" class="parallax-1 screen-1 banner" data-stellar-background-ratio="0.3">
    <div class="container">
        <h1 class="title">Experience art and mangoes by the sea...</h1>
    </div>
</div>
<div id="edu-content" class="content screen-2 parallax-2">
    <div class="container">
        <h1>Bed and Breakfast</h1>
        <div class="col-md-12">
            <p class="lead">Designed for both business and leisure travel, Casa San Miguel Bed and Breakfast is ideally situated in Pundaquit - San Antonio; one of the city's most popular locales. From here, guests can enjoy easy access to all that the lively city has to offer. With its convenient location, the hotel offers easy access to the city's must-see destinations.
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
        </div>
        <div class="col-md-6">
            <h2>Rates</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td>Room Type</td>
                        <td>Peak</td>
                        <td>Off-Peak</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Single</td>
                        <td>P900.00</td>
                        <td>P100.00</td>
                    </tr>
                    <tr>
                        <td>Double</td>
                        <td>P1800.00</td>
                        <td>P100.00</td>
                    </tr>
                    <tr>
                        <td>Triple</td>
                        <td>P1800.00</td>
                        <td>P100.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h2>The Fine Print</h2>
            <p>CHECK IN time is 1:00pm. CHECK OUT time is 11:00am.</p>
            <p>Extended hours of stay shall have corresponding extra charges. Bringing electronic appliances will incur additional charges.</p>
            <p>A deposit fee equivalent to half day’s rate will surface for reservation confirmation.</p>
            <p>Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo </p>
        </div>
    </div>
</div>
<?php generateFooter(); ?>
<!-- end different pages of my parallax thing -->
</div>
</div>

<?php generateJS(array('jquery.refineslide.min', 'slider')); ?>
