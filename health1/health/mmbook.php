<?php 
include('config.php');
include "myanmar.php";
include "mainpage_myanmarfont.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>

 

<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="header.css">

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 

 		<link rel="stylesheet" type="text/css" href="style_chukhinkhin.css">

 		<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
 </head>
<body>
<div class="super-container">
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
				<li class="menu_item"><a href="mainpage_myanmar.php"><?=Login ?></a></li>
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
									<div class="logo">
										<img src="img/logomya.png">	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="makeAppoint.php">English</a></li>
												<li><a href="mmbook.php">မြန်မာ</a></li>
												
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
													<li ><a href="mainpage_myanmar.php"><?=_Home ?></a></li>
													<li ><a href=" ../../pharmacy2/loginform.php"><?=_login ?></a></li>
				<li class="active"><a href="mmbook.php"><?=_Services ?></a></li>
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
		
		</header><br><br><br><br><br><br><br>

<div class="bg-img">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="update_appointmentmm.php" method="post">
							<div class="form-header">
								<h2><?=_booking ?></h2>
								</div>	
		
		
 <div class="col-md-8">
		<div class="form-group">
		<span class="form-label"><?=_name ?></span>
		<input type="text" name="name" id="name" class="form-control" value="" placeholder=<?=_tname?>>
	</div>
</div>


<div class="col-md-8">
		<div class="form-group">
		<span class="form-label"><?=_phone1 ?></span>
		<input type="text" name="phone" id="phone_number" class="form-control"
		value="" placeholder=<?=_tphone ?>>
				</div>
			
		</div>
	
		
		<div class="col-md-8">
		<div class="form-group">
		<span class="form-label"><?=_email ?></span>
		<input type="email" name="email" id="email" class="form-control"
		value="" placeholder=<?=_temail ?>>
	
</div>
</div>
			
		
		<div class="col-md-8">
		<div class="form-group">
		<span class="form-label"><?=_dep ?></span>
		<select name="department" id="department" onchange="showUser(this.value)" class="custom-select">
			<option value="">--<?=_dep ?>--</option>
			<?php
 mysqli_set_charset($conn,'utf8');
			$result = mysqli_query($conn, "SELECT * FROM department");
			while($row = mysqli_fetch_assoc($result)):
				?>
			<option value="<?php echo $row['dep_id'] ?>">
				<?php echo $row['dep_namemyan'] ?>
			</option>
		<?php endwhile; ?>
	</select>

</div>
</div>
	
		
		
				
		
		<div class="col-md-8">
		<div class="form-group">
		<span class="form-label"><?=_doctor ?></span>
		<div id="txtHint">
			<select name="doctor" id="department" class="custom-select">
			<option value="">-- <?=_doctor ?> --</option>
			</div>
	</select></div></div>
	
	<div class="form-group col-md-8">
<span class="form-label"><?=_date ?></span>
<input type="date" name="date" id="appo_date" value="" class="form-control" onchange="validateDate(this.value)" >
<div id="showvalid"></div></div>
	
		
		<div class="col-md-8">
		<div class="form-group">
		<span class="form-label"><?=_prob ?></span>
<textarea name="medical_problem" id="medical_problem" class="form-control"></textarea>
	</div>
</div>
	
		


	<div class="form-group col-md-2">
<button type="submit" class="btn btn-success"><?=_submit ?></button>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
	<?php
	include("footermyan.php");
	?>
</div>
		<script type="text/javascript">
			function showUser(str) { 
    if (str == "") {
    	
    	        document.getElementById("txtHint").innerHTML = "Z";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }

}
function validateDate(str) { 
	var doctor=document.getElementById('doctor').value;
var info=doctor+','+str;
   
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showvalid").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","validateDate.php?q="+info,true);
        xmlhttp.send();
    
}
		</script>
	</body>

</html>