<?php
include 'views/templates.php';

generateHeader('Museum', array('type', 'museum'));
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
            <ul class="unstyled">
                <li>5 beautifully appointed guest rooms</li>
                <li>each including non smoking rooms, fan, air conditioning, internet access – LAN (complimentary), shower. </li>
                <li>The hotel offers many unique recreational opportunities such as garden. When you are looking for comfortable and convenient accommodations in Subic (Zambales), make Casa San Miguel Bed and Breakfast your home away from home.</li>
            </ul>
        </div>
        <div class="col-md-12">
            <h2>Resident Artists</h2>
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

<?php generateFooter(); ?>
