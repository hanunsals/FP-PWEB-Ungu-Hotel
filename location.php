<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNGU HOTEL</title>

    <link rel="icon" type="img/png" href="images/logo.png">
       <!-- bootsrap -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
       <!-- font poppins -->
       <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<style>
         body{
             color:rgb(85, 85, 85);
             background-color: rgb(237, 237, 237);
             font-family: "Poppins"; 
         }
        h3{
            color: #792685;}
        p{
           color:rgb(85, 85, 85);
        }
        .flex-p{
          margin: 40px;
          background-color: #fcfcfc;
        }
    /* style location start */
        .box-contact{
            width: auto;
            height: 200px;
            padding: 30px;
        }
          .location{
            background-color: #fcfcfc;
          }
          .img-plane{
            background-image: url(images/plane.jpg);
            height: 450px;
            width: auto;
            background-position: center;
            background-size: cover;
          }
          .img-car{
            background-image: url(images/car.webp);
            height: 450px;
            width: auto;
            background-position: center;
            background-size: cover;
          }
          @media(min-width: 600px){
            .container-l{
              display: flex;
              padding: 30px;
            }
            .box-contact{
              width: 100%;
            }
            .p-l{
              width: 100%;
            }
            .location{
              width: 100%;
            }
          }
          @media (min-width:600px){
            .flex-p{
              display: flex;
            }
            .img-car{
              width: 100%;
            }
            .img-plane{
              width: 100%;
            }
            .card-body{
              width : 100%;
            }
            .container-fluid{
              display: flex;
            }
            .map iframe{
              width: 100%;
              height: 350px;
            }
          }

    /* style location end */

        
    </style>
</head>
<body>
<!-- location start -->
  <div class="location">  
    <!-- maps stars-->
    <div class="container-fluid" >
      <div class="col">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2818402780804!2d110.40453998885496!3d-7.759904899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversity%20of%20Amikom%20Yogyakarta!5e0!3m2!1sen!2sid!4v1686850001925!5m2!1sen!2sid" width="100%" ></iframe>
        </div>
      </div>
    </div>
    <!-- maps end -->
    <div class="text-center" >
      <h1 class="display-6 mt-5 " style="color: #792685;border-bottom:  3px solid;display: inline-block;">Location</h1>
    </div>
    <div class="container-l">
      <div class="col" style="margin: 5px;"> 
        <div class="p-l">
          <p>YOGYAKARTA (often also called Jogja, Yogya or Jogja) is located in middle of Java 
            Island – Indonesia. The city is known for its endless appeals. It is one of the foremost cultural centres of Indonesia. From 
            climbing the magnificent Borobudur temple, visiting the Keraton (Sultan’s Palace) and the famous Alun Alun, 
            to watching silversmiths produce amazing jewelries at Kotagede and also learn to make one yourself. 
            Try a splurge shopping up at Malioboro road, relaxing Javanese Spa and many more ways to never get bored in this 
            relatively small yet bustling city.  From natural wonders, local art and traditions, examples 
            of Javanese heritage to delicious culinary delights.</p>
        </div>
      </div>
      <div class="col" style="margin: 5px;"> 
        <div class="box-contact border">
          <a href="kontak.php" class="btn"><b style="color: #792685;">CONTACT US </b> <br></a>
            <table>
              <tr>
                <td><b>Address</b></td>
                <td>:</td>
                <td>JlPainga4,Maguwoharjo Sleman,Yogyakarta</td>
              </tr>
              <tr>
                <td><b>Phone</b></td>
                <td>:</td>
                <td>0832-0853-8751</td>
              </tr>
              <tr>
                <td><b>Email</b></td>
                <td>:</td>
                <td> <a href="kontak.php" class="btn" style="color:rgb(85, 85, 85);">contact@hotelungu.com</a></td>
              </tr>
            </table>
        </div>
      </div>
   </div>
  </div>
  <!-- jarak  -->
  <div class="flex-p">
    <div class="col" style="margin: 5px;"> 
      <div class="img-plane"></div>
    </div>
    <div class="col" style="margin: 5px;"> 
      <div class="card-body">
        <h3 class="m-3">FROM AIRPORT</h3>
        <p class="card-text">Located in Jalan Raya Solo KM 9 Yogyakarta, Adisutjipto International Airport becomes one of the busiest airport in the region of Java-Bali. In domestic flight, many cities are available in direct flight to Yogyakarta such as Jakarta, Bali, Manado, Medan, Surabaya and many other regions. Furthermore, international airport with direct flights are from Singapore and Kuala Lumpur.
        </p>
        <p class="card-text ">The distance from Airport to Ungu Hotel is about 11 KM or about 35 minutes by driving. From the airport in Jalan Raya Solo-Yogyakarta, head west for about 10 KM in the same direction until you reach the famous Tugu Yogyakarta. Then turn right to Jl P Mangkubumi then go straight ahead for about 1 KM, and you will find Hotel Tentrem on the right.</p>
      </div>
    </div>
    </div>
    <div class="flex-p">
        <div class="col">
          <div class="card-body">
            <h3 class="m-3">BY CAR</h3>
            <p class="card-text p-3">Ungu Hotel is strategically located in the heart of City. Many tourist attractions are easy to access by driving. The distance from Hotel Tentrem to Malioboro is 3 km or 15 minutes. Moreover, to go to Alun-Alun or Kraton Yogyakarta, where the Sultan palace is located, is about 5,7 km or 22 minutes and it takes around 45 minutes or about 17,1 km to get to Prambanan Temple from hotel. Hotel Tentrem provides shuttle service to go to the train station, airport, and tourist attractions. Please contact our service center for further information.</p>
          </div>
          </div>
          <div class="col">
          <div class="img-car"></div>
        </div>
    </div>
<!-- jarak -->
<!-- location end -->

    <!-- footer start -->
 <footer class="p-4 bg-dark text-center text-white">
  <!-- Link start -->
  <div class="p-2">
    <a href="unguhotel.php" class="btn text-light" role="button">HOME</a>
    <a href="about.php" class="btn text-light" role="button">ABOUT</a>
    <a href="karir.php" class="btn text-light" role="button">CAREER</a>
    <a href="kontak.php" class="btn text-light" role="button">CONTACT</a>
    <a href="location.php" class="btn text-light" role="button">LOCATION</a>
  </div>
  <!-- Link end -->

  <!-- footer logo start -->
  <div class="p-2 ">
    <!-- footer logo-facebook -->
    <a href="https://www.facebook.com/" class=" btn bg-dark text-white btn-outline-dark">
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
    <a href="https://www.linkedin.com/" class=" btn bg-dark text-white btn-outline-dark">
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
    <a href="https://www.instagram.com/" class=" btn bg-dark text-white btn-outline-dark">
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
    <!-- footer logo-instagram -->
  </div>
  <!-- footer logo end -->
  <!-- footer brand -->
  <div class="m-3">
    <b style="font-size: 16pt;">UNGU HOTEL YOGYAKARTA</b>
  </div>
<!-- footer brand -->
  <!-- footer contact  dan alamat-->
  <p class="text-light" style="font-size: 12pt; font-weight: 1;">
    Phone : 0832-0853-8751 | email : contact.ungu@gmail.com | Jalan Painga4, Maguwoharjo, Sleman, Yogyakarta (52046)
  </p>
  <p class="text-light" style="font-size: 12pt; font-weight: 1;">
    Copyright @UNGUhotel
  </p>
  <!-- footer contact dan alamat -->
</footer>
<!-- footer end -->
  
 
   
    
   
    
</body>
</html>