<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/aboutUs.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Meliora Medical Aesthetics</title>

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


</head>

<body>

  <img src="images/carousel3.jpeg" class="d-block img-fluid" alt="placeholder-img" style="width:100%">

<div class="custDiv" style="text-align: center;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="inner copy">
					<h2>Price List for Available Treatments</h2>
          <br>
          <h4><strong>Wrinkle Relaxing Treatments</strong></h4>
          
<p><strong>Azzalure Bocouture</strong></p>
<p>1 area - £150</p>
<p>2 areas - £220</p>
<p>3 areas - £270</p>
<p><strong>Botox</strong></p>
<p>1 area - £200</p>
<p>2 areas - £270</p>
<p>3 areas - £320</p>
<p>Additional units are required when treating male facial muscles</p>
<p>Injections can only be administered following a face-to-face consultation and a satisfactory medical history</p>
<p>Toxin is a prescription only drug specific to each client</p>
<p>Where botulinum toxin treatment is not suitable, alternative treatment can be suggested</p>
<br>
<h4><strong>Dermal Fillers</strong></h4>
<p><strong>Lip Filler</strong></p>
<p>0.55ml - £180</p>
<p>1 ml - £260</p>
<p><strong>Cheek Filler</strong></p>
<p>0.55 ml - £180</p>
<p>1 ml - £260</p>
<p><strong>Nasolabial Folds</strong></p>
<p>1 ml - £260</p>
<p><strong>Perioral Lines</strong></p>
<p>1 ml - £260</p>
<p><strong>Chin/ Jaw augmentation</strong></p>
<p>Juvederm Vycross Volux</p>
<p>1 ml - £280</p>
<br>
<h4><strong>Skin Rejuvenation</strong></h4>
<p><strong>Profhilo</strong></p>
<p>2 ml - £350</p>
<p>Initial 2 treatments four weeks apart</p>
<p>If paid together qualifies 15% discount</p>
<p><strong>Skin Boosters</strong></p>
<p>1 ml - From £240</p>
<p>Treatment can be done using a needle or cannula</p>
<p>Local anaesthetic cream is applied prior to the treatment</p>
<p>Also, some of the products contain anaesthetic</p>
<p>Products used: Juvederm Ultra, Juvederm Vycross, or Restylane</p>
<p>Free consultations</p>
<p>Professional aftercare advice always available</p>
<p>Discounts to all Blue Card and Military personnel</p>
<br>
				</div>
			</div>
					</div>
	</div>
            </div>

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