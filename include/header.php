<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
	<meta name="description" content="Bootstrap navbar examples for any type of project, Bootstrap 4" />

	<title>Sydney City College Of Management </title>
	<!-- Bootstrap CSS -->
	<link href="assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Mega Menu CSS -->
	<link href="assets/plugins/menu/mega_menu.css" rel="stylesheet" type="text/css" />

	<!-- Owl Carousel CSS -->
	<link href="assets\plugins\owl-carousel\assets\owl.carousel.min.css" rel="stylesheet" type="text/css" />

	<!-- Select Picker -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />

	<!-- Font Awesome CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" type="text/css" />

	<!-- Fancy Box CSS -->
	<link rel="stylesheet" href="assets/plugins/magnific-popup/magnific-popup.css" />

	<!-- Default CSS -->
	<link rel="stylesheet" href="assets/css/normalize.css">

	<!-- Custom Css -->
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/form.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/pages.css">
	<link rel="stylesheet" href="assets/css/banner.css">
	<link rel="stylesheet" href="assets/css/responsive.css">


	<!-- Plugins -->

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="http://iprototype.thecommunitycloud.com/community/assets/plugins/jquery-ui-1.10.3.min.js"></script>

	<!-- Magnific Pop Up -->
	<script src="assets/plugins/magnific-popup/jquery.magnific-popup.js"></script>

	<!-- Bootstrap Js -->
	<!-- <script src="assets/plugins/bootstrap/popper.min.js"></script> -->
	<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>

	<!-- Owl Carousel -->
	<script src="assets\plugins\owl-carousel\owl.carousel.min.js"></script>

	<!-- Seelct Picker -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

	<!-- Smooth Scroll -->
	<script src="assets/plugins/jquery.easings.min.js" type="text/javascript"></script>

	<!-- Parrallax JS -->
	<!-- <script src="assets\plugins\parallax.js\parallax.min.js" type="text/javascript"></script> -->
	<script src="assets\plugins\paroller.js\dist\jquery.paroller.js" type="text/javascript"></script>

	<!-- Mega Menu -->
	<script src="assets/plugins/menu/mega_menu.js" type="text/javascript"></script>

	<!-- Custom Js-->
	<script src="assets/js/main.js"></script>
</head>

<body>
	<!-- ========================= HEADER ========================= -->

	<header id="header">
		<div class="navbar-absolute-top">
			<div class="header-top clearfix">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3">
							<ul class="social float-left">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-9">
							<ul class="float-right">
								<li><a href="./covid.php">Covid 19</a></li>
								<li><a href="./agent.php">Agents</a></li>
								<li><a href="./campuses.php">Campuses</a></li>
								<li><a href="./about.php">About Us</a></li>
								<li><a href="./library.php">Library</a></li>
								<li><a href="./news.php">News</a></li>
								<li><a href="./careers.php">Careers</a></li>
								<li><a href="./contact.php">Contact Us</a></li>
								<li><a href="./faq.php">Faq</a></li>
								<li><a href="#"><i class="fas fa-search"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="header-nav nav-fixed-scroll clearfix">
				<nav id="navbar" class="mega-menu menuFullWidth <?php if ($page == 'page') {
														echo 'remove-fixed';
													} ?>">
					<!-- menu list items container -->
					<div class="menu-list-items ">
						<div class="container">
							<!-- menu logo -->
							<a href="index.php" class="menu-logo">
								<img src="assets/img/logo-white.svg" class="logo-white" alt="">
								<img src="assets/img/logo.svg" class="logo-main" alt="">
							</a>
							<div class="menu-mobile-collapse-trigger"><span></span></div>
							<div class="menu-nav-right text-right float-right">
								<div class="apply-btn mb-3"><a href="#" class="btn btn-outline-light">Apply</a></div>
								<!-- menu links -->
								<ul class="menu-links menu-links-align-right">
									<!-- active class -->
									<li class="hoverTrigger"><a href="#"> Pathway Partners <i class="fas fa-angle-down fa-indicator"></i>
											<div class="mobileTriggerButton"></div>
										</a>
										<!-- drop down full width -->
										<div class="drop-down grid-col-12 effect-scale">
											<div class="mega-menu-body">
												<div class="container">
													<!-- content -->
													<div class="grid-row">
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="./macleay-college.php"> Macleay College </a></h4>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="./flinders-university.php"> Flinders </a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="mega-menu-footer">
												<div class="container">
													<h3><a href="./pathway-partners.php">Pathway partners <i class="fas fa-chevron-right"></i></a> </h3>
												</div>
											</div>
										</div>
									</li>
									<li class="hoverTrigger"><a href="#">Future Students <i class="fas fa-angle-down fa-indicator"></i>
											<div class="mobileTriggerButton"></div>
										</a>
										<!-- drop down full width -->
										<div class="drop-down grid-col-12 effect-scale">
											<div class="mega-menu-body">
												<div class="container">
													<!-- content -->
													<div class="grid-row">
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#"> Application </a></h4>
															<h4><a href="./eos-framework.php"> EOS framework and visa information </a></h4>
															<h4><a href="./living-australia.php"> Living in Australia </a></h4>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="courses.php"> Courses </a></h4>
															<h4><a href="ohsc.php"> OHSC - Overseas student health cover</a></h4>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="intakes-dates.php"> Intake dates </a></h4>
															<h4><a href="important-links.php"> Important Information </a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="mega-menu-footer">
												<div class="container">
													<h3><a href="./future-students.php">Future Students <i class="fas fa-chevron-right"></i></a></h3>
												</div>
											</div>
										</div>
									</li>
									<li class="hoverTrigger"><a href="#">Current Students <i class="fas fa-angle-down fa-indicator"></i>
											<div class="mobileTriggerButton"></div>
										</a>
										<!-- drop down full width -->
										<div class="drop-down grid-col-12 effect-scale">
											<div class="mega-menu-body">
												<div class="container">
													<!-- content -->
													<div class="grid-row">
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#">Student Portal login</a></h4>
															<ul>
																<li><a href="#"> Application </a></li>
																<li><a href="#"> EOS framework and visa information </a></li>
																<li><a href="#"> Living in Australia </a></li>
															</ul>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#">Resources</a></h4>
															<ul>
																<li><a href="#"> Policies </a></li>
																<li><a href="#"> Handbook </a></li>
																<li><a href="#"> Academic Calendar </a></li>
																<li><a href="#"> Student Forms </a></li>
															</ul>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#">Online learning</a></h4>
															<ul>
																<li><a href="#"> SCCM E-learning </a></li>
																<li><a href="#"> Online Class</a></li>
																<li><a href="#"> Download Teams and Mobile Apps</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="mega-menu-footer">
												<div class="container">
													<h3><a href="current-students.php">Current Students <i class="fas fa-chevron-right"></i></a></h3>
												</div>
											</div>
										</div>
									</li>
									<li class="hoverTrigger"><a href="#">Courses <i class="fas fa-angle-down fa-indicator"></i>
											<div class="mobileTriggerButton"></div>
										</a>
										<!-- drop down full width -->
										<div class="drop-down grid-col-12 effect-scale">
											<div class="mega-menu-body">
												<div class="container">
													<!-- content -->
													<div class="grid-row">
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="./course-accounting.php">Accounting</a></h4>
															<ul>
																<li><a href="course-detail.php"> FNS40217 Certificate IV of Accounting and Book-keeping </a></li>
																<li><a href="#"> FNS50217 Diploma of Accounting </a></li>
																<li><a href="#"> FNS60217 Advance Diploma of Accounting </a></li>
															</ul>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#">Business & Management</a></h4>
															<ul>
																<li><a href="#"> Certificate IV in Leadership and Management </a></li>
																<li><a href="#"> BSB51918 Diploma of Leadership and Management </a></li>
																<li><a href="#"> BSB50618 Diploma of Human Resources Management </a></li>
																<li><a href="#"> BSB61015 Advanced Diploma of Leadership and Management </a></li>
																<li><a href="#"> BSB80615 Graduate Diploma of Management (Learning) </a></li>
															</ul>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#">Information Technology</a></h4>
															<ul>
																<li><a href="#"> ICT40120 Certificate IV in Information Technology (Networking) </a></li>
																<li><a href="#"> ICT50220 Diploma Of Information Technology </a></li>
																<li><a href="#"> ICT60220 Advanced Diploma of Information Technology (Advanced Diploma of Telecommunications Network Engineering / Cyber Security)</a></li>
															</ul>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#">Project Management</a></h4>
															<ul>
																<li><a href="#"> BSB50820 Diploma of Project Management </a></li>
																<li><a href="#">BSB60720 Advanced Diploma of Program Management </a></li>
															</ul>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#">Hospitality</a></h4>
															<ul>
																<li><a href="#"> SIT40516 Certificate IV in Commercial Cookery </a></li>
																<li><a href="#"> SIT40716 Certificate IV in Patisserie</a></li>
																<li><a href="#"> SIT50416 Diploma of Hospitality Management </a></li>
																<li><a href="#"> SIT60316 Advance Diploma of Hospitality Management </a></li>
															</ul>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="#">Event Management</a></h4>
															<ul>
																<li><a href="#"> SIT50316 Diploma of Event Management </a></li>
																<li><a href="#"> SIT60216 Advanced Diploma of Event Management </a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="mega-menu-footer">
												<div class="container">
													<h3><a href="courses.php">Courses <i class="fas fa-chevron-right"></i></a></h3>
												</div>
											</div>
										</div>
									</li>
									<li class="hoverTrigger"><a href="#">Admission <i class="fas fa-angle-down fa-indicator"></i>
											<div class="mobileTriggerButton"></div>
										</a>
										<!-- drop down full width -->
										<div class="drop-down grid-col-12 effect-scale">
											<div class="mega-menu-body">
												<div class="container">
													<!-- content -->
													<div class="grid-row">
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="./orientation.php">Orientation</a></h4>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="./intakes-dates.php">Intake dates</a></h4>
														</div>
														<!--grid column 3-->
														<div class="grid-col-4">
															<h4><a href="./how-to-apply.php">How to apply</a></h4>
														</div>
														<div class="grid-col-4">
															<h4><a href="#">Apply now</a></h4>
														</div>
														<div class="grid-col-4">
															<h4><a href="./pathway-partners.php">Pathways</a></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="mega-menu-footer">
												<div class="container">
													<h3><a href="admissions.php">Admissions <i class="fas fa-chevron-right"></i></a></h3>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>