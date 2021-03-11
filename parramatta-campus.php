<?php $page = 'page';
include('include/header.php'); ?>
<div class="inner-page">
    <section class="title-overlap-post-wrp">
        <div class="title-overlap-green-bg"></div>
        <div class="container">
            <div class="title-overlap-post">
                <figure class="title-overlap-img">
                    <img src="assets/img/about.png" alt="">
                </figure>
                <div class="title-overlap-content">
                    <h1 class="title">Parramatta <br> Campus</h1>
                    <p>It's Sydney's second CBD as well as being the historic heart of Western Sydney, which means you have the best of both worlds. Parramatta has the kind of restaurants, culture and festivals you'll find in town as well as UNESCO World Heritage, the natural beauty of the river and a quality of life that's just a little more chilled out.</p>
                    <p>Discover more about <a href="#">Parramatta</a></p>
                </div>
                <div class="single-column-gallery">
                    <figure class="video-gallery-img"><img src="./assets/img/important-links.png" alt=""></figure>
                    <div class="video-gallery-content">
                        <a class="vimeo-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                            <svg width="103" height="102" viewBox="0 0 103 102">
                                <g fill="none">
                                    <g transform="translate(-199 -4107)translate(0 3902)translate(130 206)translate(70.5 0)">
                                        <circle cx="50" cy="50" r="50" style="stroke-width:2;stroke:#FFF" />
                                        <g transform="translate(40 34)" fill="#F5F9FC">
                                            <polygon points="2 28.6 23.1 15.7 2 4" />
                                            <path d="M0 0L26 16 0 32 0 0ZM3 26.6L20.3 16 3 5.4 3 26.6Z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex company-location light-green-bg section-padding">
                <div class="col-sm-12 col-md-5">
                    <div class="company-location-detail">
                        <h4 class="company-location-title">College Address</h4>
                        <h5 class="company-location-sub-title">Level 2, 17 Macquarie Street, Parramatta, NSW 2150</h5>

                        <h5 class="company-location-sub-title mb-2">Opening Hours</h5>
                        <p class="company-location-time">9 am to 5 pm <br> <span>(Closed during public holidays)</span></p>
                        <ul class="list-inline company-detail">
                            <li><span>Call us on:</span> 0 2 8872 0435</li>
                            <li><span>Email:</span> <a href="#">info@sccm.edu.au</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26511.83242824247!2d151.04939468572974!3d-33.83865081643791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a4b8ce599c85%3A0x5017d681632bac0!2sSydney%20Olympic%20Park%20NSW%202127%2C%20Australia!5e0!3m2!1sen!2snp!4v1614492734169!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <!-- ========== SECTION GALLERY SLIDER ================= -->
            <?php include('components/gallery-slider.php'); ?>

            <div class="text-center">
                <a href="#" class="btn btn-outline-danger btn-lg mb-10">Browse our courses</a>
            </div>
        </div>
    </section>

    <!-- ========== SECTION BLOG POST ================= -->
    <?php include('components/campuses.php'); ?>

    <!-- ========== SECTION LATEST NEWS ================= -->
    <?php include('components/latest-news.php'); ?>

</div>

<?php include('include/footer.php'); ?>