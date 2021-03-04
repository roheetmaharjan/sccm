<?php $page = 'page';
include('include/header.php'); ?>
<div class="inner-page">
    <!-- Inner page banner -->
    <section class="inner-page-banner trans-black-overlay" style="background-image: url(./assets/img/future-students.png);">
        <div class="container">
            <div class="inner-page-banner-content">
                <h1>Admissions</h1>
                <p>Choosing your college degree is one of the most significant times of your life. Your decision is the first step in shaping your career and defining your future. </p>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="section-padding light-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a href="./orientation.php">
                        <div class="service-box">
                            <figure class="service-img"><img src="./assets/img/icon/orientation.png" alt=""></figure>
                            <h3 class="service-title">Orientation</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="./intakes-dates.php">
                        <div class="service-box">
                            <figure class="service-img"><img src="./assets/img/icon/intake-dates.png" alt=""></figure>
                            <h3 class="service-title">Intake dates </h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="./how-to-apply.php">
                        <div class="service-box">
                            <figure class="service-img"><img src="./assets/img/icon/how-to-apply.png" alt=""></figure>
                            <h3 class="service-title">How to apply</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#">
                        <div class="service-box">
                            <figure class="service-img"><img src="./assets/img/icon/how-to-apply.png" alt=""></figure>
                            <h3 class="service-title">Apply now </h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="./pathway-partners.php">
                        <div class="service-box">
                            <figure class="service-img"><img src="./assets/img/icon/pathway.png" alt=""></figure>
                            <h3 class="service-title">Pathways </h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- More Post -->
    <?php include('components/explore-post.php'); ?>

</div>
<?php include('include/footer.php'); ?>