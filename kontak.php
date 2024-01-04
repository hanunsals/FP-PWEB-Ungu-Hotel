<?php
 include 'db.php';

 if(isset($_POST['name']) && isset($_POST['phoneno']) && isset($_POST['email']) && isset($_POST['description'])) {
     $name = $_POST['name'];
     $phoneno = $_POST['phoneno'];
     $email = $_POST['email'];
     $description = $_POST['description'];
 
     $sql = "INSERT INTO contact(name, phoneno, email, description) VALUES ('$name', '$phoneno', '$email', '$description')";
     $result = mysqli_query($con, $sql);
 
     if ($result) {
         echo "<script> alert('Data berhasil dimasukkan!'); </script>";
        //  header("location: kontak.php");
     } else {
         echo "Terjadi kesalahan: " . mysqli_error($con);
     }
 } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
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
							<li class="menu_item menuitem--current"><a href="unguhotel.php" class="menu_link">Home</a></li>
							<li class="menu_item"><a href="about.php" class="menu_link scroll">About</a></li>
							<li class="menu_item"><a href="#team" class="menu_link scroll">Team</a></li>
							<li class="menu_item"><a href="#gallery" class="menu_link scroll">Gallery</a></li>
							<li class="menu_item"><a href="cart.php" class="menu_link scroll">Rooms</a></li>
							<li class="menu_item"><a href="kontak.php" class="menu_link scroll">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
    <!-- navbar end -->
    <form action="kontak.php" method="post">   
    <div class="contact_us_6">
      <div class="responsive-container-block container">
        <form class="form-box">
          <div class="container-block form-wrapper">
        <div class="mob-text">
          <p class="text-blk contactus-head">
            Contact Us!
          </p>
        </div>
        <div class="responsive-container-block" id="i2cbk">
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
            <p class="text-blk input-title">
              YOUR NAME
            </p>
            <input class="input" id="name" name="name" placeholder="Please enter first name..." required>
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
            <p class="text-blk input-title">
              PHONE NUMBER
            </p>
            <input class="input" id="phoneno" name="phoneno" placeholder="Please enter phone number..." required>
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
            <p class="text-blk input-title">
              EMAIL
            </p>
            <input class="input" id="email" name="email" placeholder="Please enter email..." required>
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
            <p class="text-blk input-title">
              WHAT DO YOU HAVE IN MIND ?
            </p>
            <textarea class="textinput" id="description" name="description" placeholder="Enter your suggestions and input here" required></textarea>
          </div>
        </div>
        <button class="submit-btn">
          Submit
        </button>
      </div>
    </form>
  </form>
    <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
      <div class="map-part">
        <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">There is a problem?<a href="bot.php"> Chatbot</a> <img src="images/chatbot.png" width="50px" height="50px"  alt=""> </p>
        <p class="text-blk map-contactus-subhead">
          Give us criticism and suggestions so we can improve it!
        </p>
        <div class="social-media-links mob">
          <a class="social-icon-link" href="#" id="ix94i-2-2">
            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
          </a>
          <a class="social-icon-link" href="#" id="itixd">
            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
          </a>
          <a class="social-icon-link" href="#" id="izxvt">
            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
          </a>
          <a class="social-icon-link" href="#" id="izldf-2-2">
            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png">
          </a>
        </div>
        <div class="map-box container-block">
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- footer start -->
 <footer class="p-4 bg-dark text-center text-white">
  <!-- Link start -->
  <div class="footer-logo">
    <a href="unguhotel.php" class="btn text-light logo-f" role="button">HOME</a>
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

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>