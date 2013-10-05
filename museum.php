<?php
include 'views/templates.php';

generateHeader('Museum', array('type', 'museum', 'refineslide'));
?>
<!-- navigation ends here -->
<!-- start different pages of my parallax thing -->
<div id="museum-banner" class="parallax-1 screen-1 banner" data-stellar-background-ratio="0.3">
    <div class="container">
        <h1 class="title">You are a piece of me.</h1>
    </div>
</div>
<div id="edu-content" class="content screen-2 parallax-2">
    <div class="container">
        <h1>The Casa San Miguel Museum</h1>
        <div class="col-md-12">
            <p class="lead">The Museum of Community Heritage is a unique experience that focuses on the rich local heritage of San Antonio as a town and San Miguel as a barrio. Visitors will be presented with a view of history from the perspective of a provincial town and barrio, from its founding to present day, relate it to Philippine history and World events as well as highlight the rich natural heritage. Visitors will see actual artifacts as well as visual representations of events and stories. 
            </p>
        </div>
        <div class="col-md-12">
            <ul class="rs-slider" style="">
                <li><img src="public/images/museum-photographs.jpg" alt="Historical Photographs"/>
                    <div class="rs-caption rs-bottom">
                        <h3>Historical photographs</h3>
                        <p>Historical photographs (1905) of Aetas by American researcher William Allen Reed as well as videos and artifacts reflecting the rich Aeta heritage.</p>
                    </div>
                </li>
                <li><img src="public/images/banner-museum.jpg" alt=""/>
                    <div class="rs-caption rs-bottom">
                        <h3>Fishy Friends</h3>
                        <p>Exhibit of a 400 gallon aquarium showcasing a coral reef consisting of species of fish and coral  taken from the nearby reef of San Antonio.</p>
                    </div>
                </li>
                <li><img src="public/images/museum-nico.jpg" alt=""/>
                    <div class="rs-caption rs-bottom">
                        <h3>Nico Sepe's Historical Photographs</h3>
                        <p>Exhibit of photographs by Filipino veteran photojournalist Nico Sepe documenting the lives of fishermen from 1996 to the present.</p>
                    </div>
                </li>
                <li><img src="public/images/museum-heritage.jpg" alt=""/>
                    <div class="rs-caption rs-bottom">
                        <h3>Our Cultural Heritage</h3>
                        <p>Exhibit of traditional fishing equipment and paraphernalia, including bancas, nets, baskets, knives, lanterns, and other related artifacts.</p>
                    </div>
                </li>
                <li><img src="public/images/museum-history.jpg" alt=""/>
                    <div class="rs-caption rs-bottom">
                        <h3>Historical photographs</h3>
                        <p>Exhibit of lifestyle objects such as furniture and clothing from the local community, including kimonos, shoes, chairs and other period objects.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <h2>Rates and Tours</h2>
            <p>Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo </p>
            <p>Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo </p>
            <p>Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo </p>
            <p>Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo </p>
        </div>
    </div>
</div>
<div id="edu-register" class="parallax-4 screen-4 forms">
    <div class="container">
        <div class="col-md-6">
            <h1 class="title">Inquiry</h1>
            <form action="mail.php" role="form">
                <fieldset disabled>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" value="Register for Education" class="form-control">
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="message">Short Message</label>
                    <textarea class="form-control" id="message"></textarea>
                </div>
                <!-- <button type="submit" class="btn btn-default btn-social facebook"><i class="icon-facebook"></i>Register via Facebook</button> -->
                <button type="submit" class="btn btn-default btn-large btn-casa"><i class="icon-envelope"></i>Submit</button>
            </form>
        </div>
        <!-- <div class="overlay"></div> -->
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

<?php generateFooter(array('jquery.refineslide.min', 'museum')); ?>
