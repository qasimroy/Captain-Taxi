<?php include('header.php'); ?>
<div class="separator">   
</div>
<header>
    <div style="text-align: center; padding: 100px; letter-spacing: 3rem; background-image: url(Images/background-faq.jpg);">
        <h2>
            FAQs
        </h2>
    </div>
</header>
<section>
    <div class="py-5">
        <div class="text-center">
            <h3>TOP FREQUENTLY ASKED QUESTIONS</h3>
        </div>
        <?php include('top-FAQs.php'); ?>
        <!-- airport -->
        <div class="text-center">
            <h3>AIRPORT</h3>
        </div>
        <?php include('air-FAQs.php'); ?>
        <!-- charges -->
        <div class="text-center">
            <h3>CHARGES</h3>
        </div>
        <?php include('charges-FAQs.php'); ?>
        <!-- Drive with us -->
        <div class="text-center">
            <h3>DRIVE WITH US</h3>
        </div>
        <?php include('driveFAQs.php'); ?>
        <!-- driver -->
        <div class="text-center">
            <h3>DRIVERS</h3>
        </div>
        <?php include('driverFAQs.php'); ?>
        <!-- event -->
        <div class="text-center">
            <h3>EVENTS</h3>
        </div>
        <?php include('event-FAQs.php'); ?>

    </div>
</section>





<?php include('footer.php'); ?>