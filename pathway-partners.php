<?php $page = 'page';
include('include/header.php'); ?>
<div class="inner-page">
    <section class="title-overlap-post-wrp">
        <div class="title-overlap-green-bg"></div>
        <div class="container">
            <div class="title-overlap-post">
                <figure class="title-overlap-img">
                    <img src="assets/img/pathway.png" alt="">
                </figure>
                <div class="title-overlap-content">
                    <h1 class="title">Pathway <br>Partners</h1>
                    <h4><b>Unlocking your potential</b></h4>
                    <p><b>We believe a person’s potential is defined by an attitude of mind: a willingness to learn and collaborate.</b> </p>
                    <p>We work closely with all of our pathway partners, colleges and universities, and guarantee that a place is secured on your chosen degree course as long as you successfully complete your course with us.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== SECTION PARTNERS ================= -->
    <section class="light-green-bg section-padding">
        <div class="container">
            <div class="clearfix">
                <h1 class="section-title">Partners</h1>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="job-box">
                        <h5 class="job-location">Macleay college</h5>
                        <figure class="job-img">
                            <img src="./assets/img/macleay-logo.svg" alt="">
                        </figure>
                        <p class="job-decription">SCCM has partnered with Macleay College to provide you with the unique opportunity to gain a Higher Education qualification in your chosen field.</p>
                        <a href="./macleay-college.php" class="btn btn-outline-danger btn-lg btn-block">Know More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="job-box">
                        <h5 class="job-location">Flinders University </h5>
                        <figure class="job-img">
                            <img src="./assets/img/macleay-logo.svg" alt="">
                        </figure>
                        <p class="job-decription">THE World University Rankings 2020 as a percentage of the total number of universities in the world according to the International Association of Universities.</p>
                        <a href="./flinders-university.php" class="btn btn-outline-danger btn-lg btn-block">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SECTION LATEST NEWS ================= -->
    <?php include('components/latest-news.php'); ?>

    <!-- ========== MORE POST ================= -->
    <?php include('components/explore-post.php'); ?>
</div>

<?php include('include/footer.php'); ?>