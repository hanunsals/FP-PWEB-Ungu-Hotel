<!-- Bismillah! -->

<!DOCTYPE html>
<html lang="en">
<head>
<title>UNGU HOTEL</title>

<link rel="icon" type="img/png" href="images/logo.png">

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
    
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<!--fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,600&display=swap" rel="stylesheet">
<!--//fonts-->
</head>
<body>

<div class="banner-top">
    <!-- navbar start -->
    <div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="unguhotel.php">UNGU<span>hotel</span><p class="logo_w3l_agile_caption">Your Favorite Hotel</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="#home" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="about.php" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="cart.php" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="kontak.php" class="menu__link scroll">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
    <!-- navbar end -->

    <!-- home start -->
    <div id="home" class="w3ls-banner"> 
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>UNGU HOTEL</h4>
									<h3>We know what you love</h3>
										<p>Welcome to our hotels</p>
                                </div>
                             </div>
                        </div>
                    </li>
                </ul>
            </div>      
        </div>
    </div>
    <!-- home end -->


    <div id="availability-agileits">
        <div class="col-md-12 book-form-left-w3layouts">
	        <a href="admin/reservation.php"><h2>ROOM RESERVATION</h2></a>
        </div>

		<div class="clearfix"> </div>
    </div>

	<div class="about-wthree" id="about">
		  <div class="container" action="adminabout.php">

      <?php
      @include 'db.php';
	$select = mysqli_query($con, "SELECT * FROM gabout");

?>

<!-- about start -->
<div class="ab-w3l-spa">
    <h3 class="title-w3-agileits title-black-wthree">About Our Hotel</h3> 
		<p class="about-para-w3ls">Ungu Hotel one of the hostels in Bogor that is equipped with various facilities to support comfort, such as; non-smoking rooms, Wifi, TV, 24-hour front desk, mineral water, and parking area.</p>
        <?php while($row = mysqli_fetch_assoc($select)) : ?>
        <img src="../unguhotel/admin/gabout/<?php echo $row['gabout']; ?>" height="auto" alt="" class="img-responsive">
        <?php endwhile; ?>
		<div class="w3ls-info-about text-center d-flex align-items-center justify-content-center">
    <h4>You'll love all the amenities we offer!</h4>
    <p>Grab it fast!</p>
    </div>
	</div>
	<div class="clearfix"> </div>
    </div>
</div>
<!-- about end-->

<!-- galerry start -->
<section class="portfolio-w3ls" id="gallery">
	<h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
		<?php
            // include database
            include 'db.php';
		 	// perintah sql untuk menampilkan daftar bank yang berelasi dengan tabel kategori bank
		 	$sql="select * from gambar order by id_gambar desc";
		 	$hasil=mysqli_query($con, $sql);
		 	$no=0;
		 	//Menampilkan data dengan perulangan while
		 	while ($data = mysqli_fetch_array($hasil)):
		 	$no++;
		?>

		<div class="col-md-3 gallery-grid gallery1">
		<img src="../unguhotel/admin/gambar/<?php echo($data['gambar']) ?>" class="swipebox img-responsive" width='100%' alt="galery">
			<div class="textbox">
				<h4>UNGUhotel</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
			</div>
		</div>

		<?php endwhile; ?>
		<div class="clearfix"> </div>
</section>

<!-- galerry end -->

<!-- team start  -->
<div id="team" class="our-team">
	<h1 class="title-team"> Meet Our Team</h1>
</div>
<section class="profiles-team">
  <a href="#"><img src="images/jarjit.jpg" alt="">

    <div>
      <h3>Alfaso Rahakbauw</h3>
      <span>Software Developer</span>
    </div>
  </a>

  <a href="#"><img src="images/meimei.png" alt="">

    <div>
      <h3>Alifia Rizki Lestari</h3>
      <span>FrontEnd Developer</span>
    </div>
  </a>

  <a href="#"><img src="images/ehsan.png" alt="">

    <div>
      <h3>Izhar Raflyansyah</h3>
      <span>FrontEnd Developer</span>
    </div>
  </a>

  <a href="#"><img src="images/susanti.png" alt="">

    <div>
      <h3>Hanun Salsabila</h3>
      <span>BackEnd Developer</span>
    </div>
  </a>

  <a href="#"><img src="images/fizi.png" alt="">
    <div>
      <h3>Galang Sapto Aji</h3>
      <span>BackEnd Developer</span>
    </div>
  </a>
</section>
<!-- team end  -->
<?php
@include 'db.php';
	$select = mysqli_query($con, "SELECT * FROM products");

?>

     <!-- rooms & rates -->
     <div class="plans-section" id="rooms">
		    <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
						<div class="priceing-table-main">
						<?php while($row = mysqli_fetch_assoc($select)) { ?>
				 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="../unguhotel/admin/uploaded_img/<?php echo $row['image']; ?>" height="auto" alt="" class="img-responsive">
							<h4><?php echo $row['name']; ?></h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-selet">	
								<h3>$<?php echo $row['price']; ?></h3>						
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>	
				<div class="clearfix"> </div>
			</div>
            <div class="price-selet ">
				<br>
				<br>
			<a href="cart.php" >See More</a>
			</div>
        </div>
	</div>
	 <!--// rooms & rates -->

<!-- contact start -->	 
<!-- contact end -->
     
    
 <!-- footer start -->
 <footer class="p-4 bg-dark text-center text-white">
  <!-- Link start -->
  <div class="footer-logo">
    <a href="#" class="btn text-light logo-f" role="button">HOME</a>
    <a href="about.php" class="btn text-light logo-f" role="button">ABOUT</a>
    <a href="karir.php" class="btn text-light logo-f" role="button">CAREER</a>
    <a href="kontak.php" class="btn text-light logo-f" role="button">CONTACT</a>
    <a href="location.php" class="btn text-light logo-f" role="button">LOCATION</a>
  </div>
  <!-- Link end -->

  <!-- footer logo start -->
  <div class="footer-logo ">
    <!-- footer logo-facebook -->
    <a href="https://www.facebook.com/" class=" btn bg-dark text-white logo-f">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="35"
        height="35"
        fill="currentColor"
        class="bi bi-facebook"
        viewBox="0 0 16 16"
      >
        <path
          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
        />
      </svg>
    </a>
    <!-- footer logo-facebook -->

    <!-- footer logo-linkedin -->
    <a href="https://www.linkedin.com/" class=" btn bg-dark text-white logo-f">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="35"
          height="35"
        fill="currentColor"
        class="bi bi-linkedin"
        viewBox="0 0 16 16"
      >
        <path
          d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"
        />
      </svg>
    </a>
    <!-- footer logo-linkedin -->

    <!-- footer logo-instagram -->
    <a href="https://www.instagram.com/" class=" btn bg-dark text-white logo-f">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="35"
        height="35"
        fill="currentColor"
        class="bi bi-instagram"
        viewBox="0 0 16 16"
      >
        <path
          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
        />
      </svg>
    </a>
  </div>
 
  <div class="footer-contact">
    <b style="font-size: 16px;">UNGU HOTEL YOGYAKARTA</b>
    <p class="contact" style="font-size: 12pt; font-weight: 300; margin-bottom: 5px;">
      Phone : 0832-0853-8751 | email : contact.ungu@gmail.com | Jalan Painga4, Maguwoharjo, Sleman, Yogyakarta (52046)
    </p>
	<p class="contact" style="font-size: 12pt; font-weight: 300; margin-bottom: 5px;">
      Copyright @UNGUhotel
    </p>
  </div>
</footer>
<!-- footer end -->


<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
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

<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>

<!-- Alhamdulillah -->