<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | About Us </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">About Us</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- about -->

	 
	<section class="category">

<h1 class="abouttitle">OUR FEATURES</h1>

<div class="box-container1">

   <a href="#" class="box">
	  <img src="images/feature1.png" alt="">
	  <h3>Camp Management</h3>
	  <p>We Organize Blood donation drives and helps to organize others.</p>
   </a>

   <a href="#" class="box">
	  <img src="images/feature2.png" alt="">
	  <h3>BLood Management</h3>
	  <p>We Manage Blood and their donors list.</p>
   </a>

   <a href="#" class="box">
	  <img src="images/feature3.png" alt="">
	  <h3>Users Management</h3>
	  <p>Login,User details,updates details are managed by us.</p>
   </a>

   <a href="#" class="box">
	  <img src="images/fature4.png" alt="">
	  <h3>System Management</h3>
	  <p>Queries,feedback,all records are managem=d by admin panel.</p>
   </a>

</div>

</section>

<div class="text"  data-aos="fade-up">
            <h2>
                Check Out Our Organized Blood Donation <span> Donation </span> Drives
            </h2>
            <a href="#contact">Exlpore All</a>
        </div>
	<!-- treatments -->
	<div class="treatmentContainer">
    <div class="row">
		<div class="col">
			<h1>BECOME A <span>DONOR</span></h1>
			<p>Sometimes money cannot save life but donated blood can.If you haven't registered as a donor yet?Register now from below given link.</p>
			<a href="sign-up.php"><button type="button">REGISTER HERE</button></a>
		</div>
		<div class="col">
        <div class="card">
			 
			</div>
		<div class="card1">
		 
			</div>
		<div class="card2">
			 
			</div>
		<div class="card3">
			 
			</div>
		</div>
	</div>
	</div>
	
	<!-- //treatments -->

   <!-- our testimonial -->
	<div class="testimonial" id="testimonial">
        <div class="small-container">
            <h2 class="title">Our Testimonials</h2>
		 
            <div class="row-1">
                <div class="col-1">
						<img src="images/user-2.png" alt="user-1">
						<div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <i class="fa fa-quote-left"></i>
					<?php
                                          
$sql="SELECT tblfeedback.name,tblfeedback.Message from  tblfeedback where tblfeedback.F_id=2";
 
 
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                             <p> <?php  echo htmlentities($row->Message);?>  </p>
                    
                    
                    <h3><?php  echo htmlentities($row->name);}}?></h3>
                </div>
                                          
				 
    
            </div>
        </div>
		 <a href="#" target="_blank" class="btn1">See More<i class="fa fa-arrow-right arrow-right"></i></a>
    </div>

	<!-- Testimonials ends -->
	<!-- //about -->



	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>