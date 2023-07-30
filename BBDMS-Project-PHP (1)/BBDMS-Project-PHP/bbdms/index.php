<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | Home Page</title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

    <!-- Bootstrap CSS link here -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Custom css file here -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

	<!-- font awesome cdn link here -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	 
	<!-- Swiper cdn link here -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />


</head>

<body>
	<?php include('includes/header.php');?>
  <section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>One Blood Donation Save</span>
               <h3>three Lives every day</h3>
               <a href="sign-up.php" class="btn">Donate Now<i class="fa fa-arrow-right arrow-right"></i></a>
            </div>
            <div class="image">
               <img src="images/slider1.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Blood bank services that   </span>
               <h3>you can trust</h3>
               <a href="feedback.php" class="btn">Our Feedbacks<i class="fa fa-arrow-right arrow-right"></i></a>
            </div>
            <div class="image">
               <img src="images/slider2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Check our recent</span>
               <h3> blood camps</h3>
               <a href="camp.php"class="btn">Explore All<i class="fa fa-arrow-right arrow-right"></i></a>
            </div>
            <div class="image">
               <img src="images/slider5.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Have any Query or Suggestion Kindly</span>
               <h3>Contact Us</h3>
               <a href="contact.php" class="btn">Contact Us<i class="fa fa-arrow-right arrow-right"></i></a>
            </div>
            <div class="image">
               <img src="images/slider4.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
    <!-- SLIDEBAR ENDS -->
	 
    <!-- About blood donation -->
    <section class="category">

   <h1 class="abouttitle">About Blood Donation</h1>

   <div class="box-container1">

      <a href="#" class="box">
         <img src="images/Blood_drop.svg" alt="">
         <h3>Being a Donor</h3>
         <p>Know more about different donors and blood donations.</p>
      </a>

      <a href="#" class="box">
         <img src="images/red_tick.png" alt="">
         <h3>Eligibity</h3>
         <p>Learn more about the eligibility requirements for donating blood.</p>
      </a>

      <a href="#" class="box">
         <img src="images/about3.png" alt="">
         <h3>Donation Process</h3>
         <p>Know about all steps before,during and after blood donation.</p>
      </a>

      <a href="#" class="box">
         <img src="images/about4.png" alt="">
         <h3>Medical Support</h3>
         <p>Know what medical support you will get during blood donation drives.</p>
      </a>

   </div>

</section>

<!-- about blood donation ends -->

	<!-- Blood camps -->
	<div id="portfolio"  data-aos="fade-up">
        <div class="container" >
            <h1 class="abouttitle">OUR BLOOD CAMPS</h1>
            <div class="work-list">
                <div class="work-1"  data-aos="fade-up">
                    <img src="images/Photo1904.jpg.crdownload.jpeg" alt="work-1">
                    <div class="layer">
                        <h3>ULHASNAGAR </h3>
                        <p>50 litres blood where collected 
                        </p>
						 
						<p>DATE:05/08/2021</p>
						<p>TIME:7:00 AM to 7:00 PM</p>
                        <a href="#" target="_blank">Check In Detail</a>
                    </div>
                </div>

                <div class="work-1"  data-aos="fade-up">
                    <img src="images/blood1.webp" alt="work-2">
                    <div class="layer">
                        <h3>Mumbai</h3>
                        <p>632 units of blood donated in Mumbai.
                        </p>
						 
						<p>DATE:10/10/2022</p>
						<p>TIME:8:00 AM to 6:00 PM</p>
                        <a href="#" target="_blank">Check In Detail</a>
                    </div>
                </div>

                <div class="work-1"  data-aos="fade-up">
                    <img src="images/camp.jpg" alt="work-3">
                    <div class="layer">
					<h3>KALYAN </h3>
                        <p>108 blood bags were collected on the day
                        </p>
						 
						<p>DATE:16th November 2014</p>
						<p>TIME:8:00AM TO 6:00PM</p>
                        <a href="#" target="_blank">Check In Detail</a>
                    </div>
                </div>

                <div class="work-1"  data-aos="fade-up">
                    <img src="images/banner1.jpg" alt="work-3">
                    <div class="layer">
					<h3>AMBERNATH </h3>
                        <p>50 bags of blood where collectedon this day 
                        </p>
						 
						<p>DATE:05/04/2018</p>
						<p>TIME:7:00 AM to 7:00 PM</p>

                        <a href="#" target="_blank">Check In Detail</a>
                    </div>
                </div>
            </div>
            <a href="camp.php" target="_blank" class="btn">Explore More<i class="fa fa-arrow-right arrow-right"></i></a>
        </div>
    </div>
	
	<!-- Blood camps end -->




   <!-- DONOR SECTION -->
	<div class="blog-w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Some of the Donar</h3>
				<span>
					<i class="fas fa-user-md text-white"></i>
				</span>
			</div>
			<div class="row package-grids mt-5">
				<?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
				<div class="col-md-4 pricing" style="margin-top:2%;">
					
					<div class="price-top">
					
							<img src="images/blood-donor.jpg" alt="" class="img-fluid" />
					
						<h3><?php echo htmlentities($result->FullName);?>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Gender: <?php echo htmlentities($result->Gender);?></h4>
						<h4 class="card-text">Blood Group : <?php echo htmlentities($result->BloodGroup);?></h4>
						
						<a class="btn btn-primary" style="color:#fff" href="contact-blood.php?cid=<?php echo $result->id;?>">Request</a>
					</div>
				</div><?php }} ?>
			<a href="donor-list.php"><button type="button">MORE DETAILS <i class="fa fa-arrow-right"></i></button></a>
			
			</div>
		</div>
	</div>
	<!-- DONOR SECTION ENDS HERE -->
<!-- features start -->
<h1 class="abouttitle">MORE WAYS TO MAKE A DIFFERENCE</h1>
<div class="features">
    <div class="rows">
        <div class="text-col">
            <h2>BECOME A VOLUNTEER</h2>
            <p>As a Blood Donor Volunteer you will engage donors by greeting,registering,answering questions,providing information and supporting them through the recovery process at the refreshments table.</p>
             <a href="volunteer.php"><button class="volunteer">Register Here</button></a>
        </div>
        <div class="img-col">
            <img src="images/blood1.webp" alt="">
        </div>
    </div>
</div>
<div class="features2">
    <div class="rows2">
        <div class="img-col2">
            <img src="images/slider3.png" alt="">
        </div>
        <div class="text-col2">
            <h2>Host a Blood Drive</h2>
            <p>You can now host a blood drive by collabarating with us.Fill the registeration form properly 
                to conduct a blood donation camp.
            </p>
            <a href="blooddrive.php"><button class="volunteer">Host Now</button></a>
        </div>
    </div>
</div>

<div class="features3">
    <div class="rows3">
        <div class="text-col3">
            <h2>MAKE A DONATION</h2>
            <p>If you are unable to offer your time and space for mankind,you can donate financially for the needfull one's. </p>
            <a href=""><button class="volunteer">Donate Now</button></a>
        </div>
        <div class="img-col3">
            <img src="images/feature3.jpeg" alt="">
        </div>
    </div>
</div>
<div class="features4">
    <div class="rows4">
    <div class="img-col4">
            <img src="images/feature4.png" alt="">
        </div>
        <div class="text-col4">
        
            <h2>GIVE US A FEEDBACK</h2>
            <p>Your feedbacks are our first concern.Kindly fill the feeback form given below and help us to grow.</p>
            <a href="feedback.php "><button class="volunteer">Rate Us</button></a>
        </div>
         
    </div>
</div>

<!-- feature ends -->
	 
	<!-- footer -->
	<?php include('includes/footer.php');?>

	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

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
	 

	<!-- JS FOR SLIDER -->

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

	<script>
   var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>
<!-- SLIDER ENDS HERE -->
		</script>
	<!-- //Js files -->
</body>

</html>