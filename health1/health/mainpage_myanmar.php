<?php 
include "mainpage_myanmarfont.php";
include "myanmar.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<title>အာရောဂျံ</title>
<meta charset="utf-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="footercss.css">
<link rel="stylesheet" type="text/css" href="department.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/css" href="servicestesting.css">
<link rel="stylesheet" type="text/css" href="cta.css">

<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
</head>
<body>

<div class="super_container">

	
	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="mainpage_myanmar.php"><?=_Home ?></a></li>
				<li class="menu_item"><a href="#"><?=_login ?></a></li>
				<li class="menu_item"><a href="mmbook.php"><?=_Services ?></a></li>
				<li class="menu_item"><a href="specialist_dirmyan.php"><?=_News ?></a></li>
				<li class="menu_item"><a href="aboutusmyan.php"><?= _Aboutus?></a></li>
				<li class="menu_item"><a href="contactusmyan.php"><?=_Contact ?></a></li>

			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	

	

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-left justify-content-start">
									<div class="logo" style="margin-left:-10px;" >
										<img src="img/logomya.png">	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="mainpage.php">English</a></li>
												<li><a href="mainpage_myanmar.php">မြန်မာ</a></li>
												
											</ul>
										</div>
										<div class="header_top_phone">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>၀၉၁၁၂၂၀၀၀၀၀</span>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li class="active"><a href="mainpage_myanmar.php"><?=_Home ?></a></li>
													<li ><a href=" ../../pharmacy2/loginform.php"><?=_login ?></a></li>
				<li ><a href="mmbook.php"><?=_Services ?></a></li>
				<li ><a href="specialist_dirmyan.php"><?=_News ?></a></li>
				<li ><a href="aboutusmyan.php"><?= _Aboutus?></a></li>
				<li ><a href="contactusmyan.php"><?=_Contact ?></a></li>
			
												</ul>
											</nav>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
		
		</header>

	  <!-- section intro -->
    <section id="intro">
      <div class="intro-content">

        <h2><?=_Welcome ?></h2>
        <h3><?=_Booking ?></h3>
        <div >
          <a href="#content" class="btn-get-started scrollto" style="background: #32c69a; color:white;"><?=_Getstarted ?></a>
        </div>
      </div>
    </section>
    <!-- /section intro -->

  <!-- Services -->

	<div class="services" id="content">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"><?=_OurServices ?></div>
					<div class="section_subtitle"><?=_Tochoosefrom ?></div>
				</div>
			</div>
			<div class="row icon_boxes_row">
				
				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_1.svg" alt=""></div>
							<div class="icon_box_title"><?=_RecoveryRoom ?></div>
						</div>
						<div class="icon_box_text"><?=_RecoveryText ?></div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_2.svg" alt=""></div>
							<div class="icon_box_title"><?=_OperationThreatre ?></div>
						</div>
						<div class="icon_box_text"><?=_OperationText ?></div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_3.svg" alt=""></div>
							<div class="icon_box_title"><?=_ImagingUnit ?></div>
						</div>
						<div class="icon_box_text"><?=_ImagingText ?></div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_4.svg" alt=""></div>
							<div class="icon_box_title"><?=_PharmancyCounter ?></div>
						</div>
						<div class="icon_box_text"><?=_PharmanvyText ?></div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_5.svg" alt=""></div>
							<div class="icon_box_title"><?=_CustomerCareServices ?></div>
						</div>
						<div class="icon_box_text"><?=_CustomerText ?></div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/icon_6.svg" alt=""></div>
							<div class="icon_box_title"><?=_InternationalServices ?></div>
						</div>
						<div class="icon_box_text"><?=_InternationalText ?></div>
					</div>
				</div>

			</div>
			
		</div>
	</div>

	<!-- Boxes -->

	<div class="boxes d-flex flex-lg-row flex-column align-items-start justify-content-start">
		
		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/box_1.jpg)"></div>
			<div class="box_title"><?=_OurVision ?></div>
			
			<div class="box_text"><?=_VisionText ?></div>
			
		</div>

		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/box_2.jpg)"></div>
			<div class="box_title"><?=_OurCentre ?></div>
			
			<div class="box_text"><?=_CentreText ?>
</div>
		
		</div>

		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/box_3.jpg)"></div>
			<div class="box_title"><?=_OurMission ?></div>
			
			<div class="box_text"><?=_MissionText ?></div>
			
		</div>

	</div>

<!-- Features -->

  <section class="features" id="features">
    <div class="container">
      <h1 class="section_title text-center" style="margin-top:40px; margin-bottom: 60px;">
          <?=_Choose ?>
        </h1>

      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12" >
          <div class=" text-center">
            <div>
              <div class="feature-icon " style="background: #32c69a;">
                <span class="fa fa-rocket"></span>
              </div>
            </div>

            <div>
              <h3 style="color: #32c69a;">
                  <?=_Secure ?>
                </h3>

              <p>
               <?=_SecureText ?>
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class=" text-center">
            <div>
              <div class="feature-icon" style="background : #32c69a;">
                <span class="fa fa-envelope"></span>
              </div>
            </div>

            <div>
              <h3 style="color: #32c69a;">
                 <?=_Price ?>
                </h3>

              <p>
               <?=_PriceText ?>
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class=" text-center">
            <div>
              <div class="feature-icon" style="background : #32c69a;">
                <span class="fa fa-bell"></span>
              </div>
            </div>

            <div>
              <h3 style="color: #32c69a;">
                  <?=_SuccessRate ?>
                </h3>

              <p>
                <?=_SuccessText ?>
              </p>
            </div>
          </div>
        </div>
      </div>


        

       
      </div>
  
   </section>

  <!-- /Features -->

<!-- CTA -->

	<div class="cta" style="margin-top: 75px;">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="cta_content text-xl-left text-center">
							<div class="cta_title"><?=_Makeappointment ?></div>
							<!-- <div class="cta_subtitle">Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas.</div> -->
						</div>
						<div class="button cta_button ml-xl-auto"><a href="mmbook.php"><span><?=_MakeappointmentButton ?></span><span><?=_MakeappointmentButton ?></span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Departments -->

	<div class="departments">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"><?=_department ?></div>
				
				</div>
			</div>
			<div class="row dept_row">
				<div class="col">
					<div class="dept_slider_container_outer">
						<div class="dept_slider_container">

							<!-- Slider -->
							<div class="owl-carousel owl-theme dept_slider">
								
								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/cardic_surgeons.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_cardiacsur ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Cardiologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_cardiolo ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Dermatologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_derma ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Ear.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_ent ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/General_Physicians.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_generalphy ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/General_Surgeons.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_generalsur ?></div>
										
									</div>
								</div>

							

									<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Gestroenterologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_gestro ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Haematologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_haemato ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Hepatologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_hepato ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/facial.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_maxillofacial ?> </div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Nephrologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_nephro ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Neuro_Surgeons.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_neurosur ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Neurologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_neurolo ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Nutrition_Specialist.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_nutrispe ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Obstetricians_&_Gynecologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_obstegyne ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Oncologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_oncolo ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Orthopedics.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_orthosur ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Orthopaedic_Surgeons.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_pediasur ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Pediatric_Surgeons.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_pediatri ?></div>
										
									</div>
								</div>

								

							

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Psychiatrists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_psycho ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Radiologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_radio ?></div>
										
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item dept_item">
									<div class="dept_image"><img src="img/Urologists.jpg" alt=""></div>
									<div class="dept_content">
										<div class="dept_title"><?=_uro ?></div>
										
									</div>
								</div>


							</div>
							
						</div>

						<!-- Dept Slider Nav -->
						<div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

					</div>
						
				</div>
			</div>
		</div>
	</div>




>
  



	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">Aryawjan<span>+</span></a>	
							</div>
							<div class="footer_about_text"><?=_address ?></div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title"><?=_quick ?></div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="<?=_namequick ?>" required="required">
										<input type="email" class="footer_contact_input" placeholder="Email" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="<?=_msgquick ?>" required="required"></textarea>
									<button class="footer_contact_button"><?=_send ?></button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
					
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div><?=_openinghour ?></div>
									<div class="ml-auto"><?=_hour ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div><?=_add ?>:</div>
									<div class="ml-auto"><?=_address ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div><?=_phno ?>:</div>
									<div class="ml-auto"><?=_phone ?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Email:</div>
									<div class="ml-auto">Aryawjan@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li class="active"><a href="mainpage.php"><?=_Home ?></a></li>
				
				<li ><a href="mmbook.php"><?=_Services ?></a></li>
				<li ><a href="specialist_dirmyan.php"><?=_News ?></a></li>
				<li ><a href="aboutusmyan.php"><?= _Aboutus?></a></li>
				<li><a href="contactusmyan.php"><?=_Contact ?></a></li>
								</ul>
							</nav>
							<div class="footer_links">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="#">English</a></li>
									<li><a href="#">မြန်မာ</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span><?=_phone ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>