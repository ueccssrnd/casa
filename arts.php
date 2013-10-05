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
                        <h3>Furniture</h3>
                        <p>Exhibit of lifestyle objects such as furniture and clothing from the local community, including kimonos, shoes, chairs and other period objects.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-8">
            <h2>Rates and Hours</h2>
            <p class="lead" style="text-indent: 0;">Opening Hours: Tuesdays-Sundays, 9AM-5PM.</p>
            <table class="table">
                <thead>
                    <tr>
                        <td></td>
                        <td>Regular Visitors (Adult/9 years old/below)</td>
                        <td>Zambales Private Schools</td>
                        <td>Zambales Public Schools</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ticket A (Entrance Only)</td>
                        <td>P125.00/P75.00</td>
                        <td>P75.00</td>
                        <td>P30.00</td>
                    </tr>
                    <tr>
                        <td>Ticket B (Entrance with Passport)</td>
                        <td>P150.00/P100.00</td>
                        <td>P100.00</td>
                        <td>P50.00</td>
                    </tr>
                    <tr>
                        <td>Ticket C (Entrance with Guided Tour)</td>
                        <td>P200.00/P150.00</td>
                        <td>P150.00</td>
                        <td>P75.00</td>
                    </tr>
                    <tr>
                        <td>Passport</td>
                        <td>P40.00</td>
                        <td>P30.00</td>
                        <td>P25.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h2>Promos</h2>
            <p>The <strong>activity</strong> is a 30-minute classroom activity moderated by a teacher using various teaching tools including essay writing, drawing, audio-visual tools as well as an informative Q&A forum. </p>
            <p>The <strong>passport</strong> is an interactive tool engaging the visitor through coloring and drawing activities, stimulating curiosity and critical thinking. The passport also serves as a souvenir for the visitor, with a poster design included ideal for hanging on the wall.</p>
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
