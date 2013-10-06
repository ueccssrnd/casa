<?php
include 'views/templates.php';

generateHeader('Kapihan', array('type', 'refineslide'));
?>
<!-- navigation ends here -->
<!-- start different pages of my parallax thing -->
<div id="kapihan-banner" class="parallax-1 screen-1 banner" data-stellar-background-ratio="0.3">
    <div class="container">
        <h1 class="title">Healthy Communication</h1>
    </div>
</div>
<div id="edu-content" class="content screen-2 parallax-2">
    <div class="container">
        <h1>Kapihan sa Casa San Miguel</h1>
        <div class="col-md-12">
            <p class="lead">“Kapihan”, which means “coffee break”, is a quarterly forum and creative workshop which allows open discussion of the important topics.
Topics: Gender Sensitivity, Women’s Rights, Child Rights, Human Rights, Community Health, Migrant Workers Protection, and Education and Culture.</p>
        </div>
    </div>
</div>

<?php generateFooter(); ?>

<!-- end different pages of my parallax thing -->
</div>
</div>

<?php generateJS(array('jquery.refineslide.min', 'slider')); ?>
