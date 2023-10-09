<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/services.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Meliora Medical Aesthetics</title>
    <script src="scripts/services.js"></script>

    <?php 
      session_start();
    ?>

    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="index.php">Meliora Medical Aesthetics</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navChange" href="services.php" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="services.php">Fillers</a></li>
                <li><a class="dropdown-item" href="mesotherapy.php">Mesotherapy</a></li>
                <li><a class="dropdown-item" href="wrinkle.php">Wrinkle Softening</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pricelist.php">Price List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonials.php">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class = "nav-item dropdown">
              <a class="nav-link dropdown-toggle" style = "<?php if (!isset($_SESSION['use']) || empty($_SESSION['use'])){
                echo'display:none';
              }else{
                if($_SESSION['use'] == "admin"){
                  echo 'display:block;';
                }else echo 'display:none;';
              } 
              
                ?>">Admin</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="successful_login.php">Upcoming Appointments</a></li>
                <li><a class="dropdown-item" href="block.php">Block Availability</a></li>
                </ul>
            </li>
             <li class = "nav-item">
              <a class="nav-link" style = "<?php if (!isset($_SESSION['use']) || empty($_SESSION['use'])){
                echo'display:none';
              }else{
                if($_SESSION['use'] != "admin"){
                  echo 'display:block;';
                }else echo 'display:none;';
              } 
              
                ?>" href = "customer.php">Appointments</a>
            </ul>
                <a style="<?php if (!isset($_SESSION['use']) || empty($_SESSION['use'])) echo 'display:block;';else echo'display:none' ?>" ><button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#myModal">Login</button></a>
            <a style="<?php if (!isset($_SESSION['use']) || empty($_SESSION['use'])) echo 'display:none;';else echo'display:block' ?>" href="logout.php"><button class="btn btn-outline-warning" type="button">Logout</button></a>
        
          
      </div>
  </nav>


<?php include 'login.php';?>

<body>



        <img src="images/MesoPage.jpg" class="d-block img-fluid" alt="placeholder-img" style="width:100%">

        <div class="HowItWorks">
            <div class="container">
            <div class="text-center">
                <h4 style ="margin-bottom: 30px;">Mesotherapy</h4>
                <div class="row">
                        <p>Injectable Hyaluronic Acid for face, around the eyes, neck, hands and decolletage.</p>
                        <p>Helps remodel aging and saggy tissue, boosts and hydrates skin.</p>
                        <p>Products used: Profhilo and Teosyal.</p>
                        <br>
          
                      
                        
                        <div class="container">
                        <br>
                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#BookModal" style ="<?php if (!isset($_SESSION['use']) || empty($_SESSION['use'])) echo 'display:none;';else echo'display:block' ?>; margin: auto;">Book Now</button>
                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#myModal" style ="<?php if (!isset($_SESSION['use']) || empty($_SESSION['use'])) echo 'display:block;';else echo'display:none' ?> ; margin: auto;">Login to Book Now</button>

                    </div>
                    </div>
       

                  
                    <form class="needs-validation" novalidate action="service_booked.php" method="post">
                    <input type="text" id="service" name="service" value="Mesotherapy" readonly style="display:none;">

                    <?php include 'appointment_booker.php';?>
              
                    <br>

</body>

<div class="container-flui">
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; 2022 Meliora Medical Aesthetics</small>
        </div>
        <div class="col-6 col-md">
          <h5>Find Us</h5>
          <span class="link-secondary">Cavell Drive<br>
            Shrewsbury<br>
            SY3 8GD<br>
            United Kingdom</span>
        </div>
        <div class="col-6 col-md">
          <h5>Contact Us</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="mailto:meliora.medicalaesthetics@hotmail.com">Email</a></li>
            <a class="link-secondary">07969455218</a>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5 class="socialHeader">Socials</h5>
          <ul class="list-unstyled text-small">
            <li><a class="fa fa-facebook" href="https://www.facebook.com/melioramedicalaesthetics"></a></li>
          </ul>
        </div>
      </div>
    </footer>
    </div>