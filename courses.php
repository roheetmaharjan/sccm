<?php $page = 'page';
include('include/header.php'); ?>
<div class="inner-page">
    <section class="section-padding radial-green-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h1>Explore our subjects</h1>
                    <p class="w-75">Choose from our selection of internationally recognized undergraduate degrees, and prepare to discover your unique path to success, supported by our expert faculty, innovative teaching methodologies and state-of-the-art installations. </p>
                    <div class="form-group with-custom-icon">
                        <input type="text" class="form-control form-control-lg form-outline" placeholder="What are you looking for?">
                        <button type="button" class="form-icon"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding light-grey">
        <div class="container">
            <h5 class="section-title">Browse our courses by subject</h5>
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-4">
                    <a href="./course-accounting.php">
                        <div class="box-with-bg-img">
                            <figure>
                                <img src="./assets/img/accounting.png" alt="">
                            </figure>
                            <div class="box-with-bg-img-title">
                                <h4 class="font-italic text-capitalize">Accounting</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="box-with-bg-img">
                        <figure>
                            <img src="./assets/img/business-mgmt.png" alt="">
                        </figure>
                        <div class="box-with-bg-img-title">
                            <h4 class="font-italic text-capitalize">Business & Management</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="box-with-bg-img">
                        <figure>
                            <img src="./assets/img/information-technology.png" alt="">
                        </figure>
                        <div class="box-with-bg-img-title">
                            <h4 class="font-italic text-capitalize">Information Technology</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="box-with-bg-img">
                        <figure>
                            <img src="./assets/img/project-mgmt.png" alt="">
                        </figure>
                        <div class="box-with-bg-img-title">
                            <h4 class="font-italic text-capitalize">Project Management</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="box-with-bg-img">
                        <figure>
                            <img src="./assets/img/hospitality.png" alt="">
                        </figure>
                        <div class="box-with-bg-img-title">
                            <h4 class="font-italic text-capitalize">Hospitality</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="box-with-bg-img">
                        <figure>
                            <img src="./assets/img/event-mgmt.png" alt="">
                        </figure>
                        <div class="box-with-bg-img-title">
                            <h4 class="font-italic text-capitalize">Event Management</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog post -->
    <?php include('components/blog-post.php'); ?>

    <!-- Last News -->
    <?php include('components/latest-news.php'); ?>


</div>


<?php include('include/footer.php'); ?>