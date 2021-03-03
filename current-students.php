<?php $page = 'page';
include('include/header.php'); ?>
<div class="inner-page">
    <!-- Inner page banner -->
    <section class="inner-page-banner trans-black-overlay" style="background-image: url(./assets/img/future-students.png);">
        <div class="container">
            <div class="inner-page-banner-content">
                <h1>Current Students</h1>
                <p>All your hard work has paid off and soon you’ll be starting your studies at SCCM.</p>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="section-padding light-grey pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="service-box">
                        <figure class="service-img"><img src="./assets/img/icon/student-portal.png" alt=""></figure>
                        <h3 class="service-title">Student portal</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="resources.php">
                        <div class="service-box">
                            <figure class="service-img"><img src="./assets/img/icon/resources.png" alt=""></figure>
                            <h3 class="service-title">Resources </h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="service-box">
                        <figure class="service-img"><img src="./assets/img/icon/online-training.png" alt=""></figure>
                        <h3 class="service-title">Online Learning</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <?php include('components/latest-news.php'); ?>

</div>
<?php include('include/footer.php'); ?>