<?php
include 'views/templates.php';

generateHeader('Education', array('type', 'refineslide'));
?>
<!-- navigation ends here -->
<!-- start different pages of my parallax thing -->
<div id="educ-banner" class="parallax-1 screen-1 banner" data-stellar-background-ratio="0.3">
    <div class="container">
        <h1 class="title">Education </h1>
    </div>
</div>
<div id="edu-content" class="content screen-2 parallax-2">
    <div class="container">
        <h1>Education</h1>
        <div class="col-md-12">
            <p class="lead">A full K-12 program based on the <a href="http://www.waldorfcurriculum.com/">Waldorf curriculum</a> of Rudolf Steiner, localized and adapted to the community, emphasizing the importance of experience and creativity in the learning process. We just recently opened Parent-Toddler, Nursery, and Kinder, which will be followed by Grades One and Two by next year. Our goal is to have all levels available in 6 years. </p>
        </div>
    </div>
</div>

<?php generateFooter(); ?>

<!-- end different pages of my parallax thing -->
</div>
</div>

<?php generateJS(array('jquery.refineslide.min', 'slider')); ?>
