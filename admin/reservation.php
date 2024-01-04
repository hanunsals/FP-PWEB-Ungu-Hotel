<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN | UNGU HOTEL</title>

    <link rel="icon" type="img/png" href="../images/logo.png">
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../unguhotel.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel" >
                        <div class="panel-heading" style="background-color: #792685">
                            <h4 style="color: #fcfcfc"><b>PERSONAL INFORMATION</b></h4> 
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel">
                        <div class="panel-heading" style="background-color: #792685">
                             <h4 style="color: #fcfcfc"><b>RESERVATION INFORMATION</b></h4>
                        </div>
                        <div class="panel-body">
                                <div class="form-group">
                                <label>Type Of Room *</label>
                                <select name="troom" class="form-control" required>
                                    <option value="" selected></option>
                                    <?php
                                    // Ambil data jenis-jenis kamar dari database
                                    $conn = mysqli_connect('localhost', 'root', '', 'db_hotel');
                                    $query = "SELECT DISTINCT name FROM products";
                                    $result = mysqli_query($conn, $query);

                                    // Tampilkan data jenis-jenis kamar dalam elemen <select>
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    $roomType = $row['name'];
                                    echo '<option value="' . $roomType . '">' . $roomType . '</option>';
                                    }
                                    ?>
                                </select>
                                </div>

							  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control" id="checkin">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control" id="checkout">
                                            
                               </div>

                                
                                <script>
                                    // mendapatkan elemen input tanggal check-in dan check-out dari HTML
                                    var checkin = document.getElementById("checkin");
                                    var checkout = document.getElementById("checkout");

                                    // validasi tanggal check-in agar tidak lebih kecil dari tanggal hari ini
                                    checkin.addEventListener("change", function() {
                                        var today = new Date();
                                        var checkin_date = new Date(checkin.value);

                                        // Mengatur jam, menit, detik, dan milidetik tanggal check-in menjadi 23:59:59:00
                                        checkin_date.setHours(23, 59, 59, 0);

                                        if (checkin_date < today) {
                                            alert("Tanggal check-in tidak boleh lebih kecil dari tanggal hari ini!");
                                            checkin.value = "";
                                        }
                                    });

                                    // validasi tanggal check-out agar tidak lebih kecil atau sama dengan tanggal check-in
                                    checkout.addEventListener("change", function() {
                                        var checkin_date = new Date(checkin.value);
                                        var checkout_date = new Date(checkout.value);

                                        // Mengatur jam, menit, detik, dan milidetik tanggal check-out menjadi 00:00:00:00
                                        checkout_date.setHours(0, 0, 0, 0);

                                        if (checkout_date <= checkin_date) {
                                            alert("Tanggal check-out harus lebih besar dari tanggal check-in!");
                                            checkout.value = "";
                                        }
                                    });
                                </script>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4><b>HUMAN VERIFICATION</b></h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p>
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-info" style="background-color: #792685">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									// $con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if (isset($data[0]) && $data[0] > 1) {
                                        echo "<script type='text/javascript'> alert('User Already Exists')</script>";
                                        
									}

									else
									{
										$new ="Not Confirm";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`,`Phone`, `TRoom`,`NRoom`,`cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[troom]','$_POST[nroom]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>