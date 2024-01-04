<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:room.php");
}
?> 
<?php

$con = mysqli_connect('localhost','root','','db_hotel');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN | UNGU HOTEL</title>

    <link rel="icon" type="img/png" href="../images/logo.png">
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="style.css">

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


					<li>
                        <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="galery.php"><i class="fa fa-plus-circle"></i> Add Galery</a>
                    </li>
                    <li>
                        <a  href="adminabout.php"><i class="fa fa-plus-circle"></i> Add About</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
        <div id="page-wrapper" >
        <?php

@include 'db.php';


// Inisialisasi variabel-variabel
$no_of_room = isset($_POST['no_of_room']) ? $_POST['no_of_room'] : 0;
$title = isset($_POST['title']) ? $_POST['title'] : '';
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$troom = isset($_POST['troom']) ? $_POST['troom'] : '';
$cin = isset($_POST['cin']) ? $_POST['cin'] : '';
$cout = isset($_POST['cout']) ? $_POST['cout'] : '';

if(isset($_POST['add_product'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_description = $_POST['product_description'];
    $product_image_folder = 'uploaded_img/'.$product_image;

    if(empty($product_name) || empty($product_price) || empty($product_image) || empty($product_description)){
        $message[] = 'please fill out all';
    }else{
        $insert = "INSERT INTO products(name, price, image, description) VALUES('$product_name', '$product_price', '$product_image','$product_description')";
        $upload = mysqli_query($con,$insert);
        if($upload){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = 'new product added successfully';
            
            // Setelah proses menyimpan data produk baru
            $new_product_id = mysqli_insert_id($con);

            // Ambil harga produk dari database berdasarkan ID produk
            $get_product_price_query = "SELECT price FROM products WHERE id = $new_product_id";
            $result = mysqli_query($con, $get_product_price_query);
            $row = mysqli_fetch_assoc($result);
            $product_price = $row['price'];

            // Menghitung nilai total
            $ttot = $product_price * $no_of_room;
            $fintot = $ttot;

            // Memasukkan data ke tabel payment
            $insert_payment_query = "INSERT INTO payment (title, fname, lname, troom, cin, cout, nroom, ttot, fintot) VALUES ('$title', '$fname', '$lname', '$troom', '$cin', '$cout', '$no_of_room', '$ttot', '$fintot')";
            mysqli_query($con, $insert_payment_query);
        }else{
            $message[] = 'could not add the product';
        }
}

};

if(isset($_GET['delete'])){
$id = $_GET['delete'];
mysqli_query($con, "DELETE FROM products WHERE id = $id");
header('location:room.php');
};

?>


            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>admin page</title>

            <!-- font awesome cdn link  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

            <!-- custom css file link  -->
            <link rel="stylesheet" href="css/style.css">

            </head>
            <body>

            <?php

            if(isset($message)){
            foreach($message as $message){
                echo '<span class="message">'.$message.'</span>';
            }
            }

            ?>
            
            <div class="container" style="background-color:#fcfcfc">

            <div class="admin-product-form-container">

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3 class="title">add a new room</h3>
                    <input type="text" placeholder="enter room name" name="product_name" class="box">
                    <input type="text" placeholder="enter room description" name="product_description" class="box">
                    <input type="number" placeholder="enter room price" name="product_price" class="box">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                    <input type="submit" class="btn btn-info" style="background-color: #792685" name="add_product" value="add product">
                </form>

            </div>

            <?php

            $select = mysqli_query($con, "SELECT * FROM products");
            
            ?>
            <div class="product-display">
                <table class="product-display-table">
                    <thead>
                    <tr>
                        <th>room image</th>
                        <th>room name</th>
                        <th>room price</th>
                        <th>room description</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <?php while($row = mysqli_fetch_assoc($select)){ ?>
                    <tr>
                        <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['name']; ?></td>
                        <td>$<?php echo $row['price']; ?>/-</td>
                        <td><?php echo $row['description']; ?></td>

                        <td>
                        <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn" style="background-color: #792685"> <i class="fas fa-edit"></i> Edit </a>
                        <a href="room.php?delete=<?php echo $row['id']; ?>" class="btn" style="background-color: #AB92A9"> <i class="fas fa-trash"></i> Delete </a>
                        </td>
                    </tr>
                    
                <?php } ?>

                
                </table>
            </div>

            </div>
            </div>


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