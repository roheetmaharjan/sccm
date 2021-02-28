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
                    <h1 class="title">Sydney City College of Management</h1>
                    <p>Sydney City College of Management (SCCM) is a Registered Training Organisation (RTO) that is focused on providing quality education and training in fully- accredited courses. We are currently delivering our programs from three campus locations– Parramatta, Sydney and Darwin.</p>

                    <p>SCCM offers over 20 nationally recognised qualification in from Certificate IV, Diploma, Advanced Diploma and Graduate Diploma. These qualifications are offered in study areas such as Information Technology, Network Telecommunications Engineering, Commercial Cookery, Hospitality Management, Accounting, Project Management, and leadership Management.</p>

                    <p>The vocation courses SCCM offers are all accredited by Australian Skills Quality Authority (ASQA) and the courses meet the national quality assurance requirement in terms of competency outcomes and assessment validity.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== SECTION BLOG POST ================= -->
    <?php include('components/blog-post.php');?>
    
    <!-- ========== SECTION THREE IDEAL LOCATION ================= -->
    <?php include('components/box-with-bg-img-grid.php');?>

    <!-- ========== SECTION LATEST NEWS ================= -->
    <?php include('components/latest-news.php');?>
    
</div>

<?php include('include/footer.php'); ?>