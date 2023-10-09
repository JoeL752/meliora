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

        <img src="images/testHead.jpg" class="d-block img-fluid" alt="placeholder-img" style="width:100%">

  <div class="custDiv">
    <div class="container">
      <div class="row" style="font-size: 20px;">
        <p style="font-style:italic;">‘Demetra is extremely professional and thorough in taking medical history and advising me on suitable skin treatments. 
        I have been a regular client for over a year now and have received fantastic service on all occasions. Demetra is a registered aesthetic nurse, very knowledgeable and I trust her professional ability and advice. 
        During one consultation, she advised me against having a lip filler, explaining the reasons fully which was the correct decision for me.  I would highly recommend her.’</p>
        <p>Dr M A (age 69)</p>
        <hr class="my-4">
        <p style="font-style:italic;">‘I approached Demetra for a free consultation and asked about having anti-wrinkle treatment and advice on how to help improve my skin appearance. 
        I did not want fillers but wanted something more natural looking.  I am extremely pleased with the way my skin now looks, it’s natural looking and exactly what I had hoped for. 
        She also offered me 20% discount on my initial treatment, which was very helpful, as it meant I could afford the full treatment. She was available to answer my many questions prior to and after my treatment.’</p>
        <p>Ms E M (age 54)</p>
        <hr class="my-4">
        <p style="font-style:italic;">‘I was delighted with the results I have received from using Demetra.  My initial consultation placed me at great ease as Demetra has a very professional and personal approach. 
        I am extremely pleased with my natural looking lip and cheek fillers. She was very good at advising me to start of with a smaller amount as it would be cheaper for me, and I could always arrange to come back for more if needed. 
        As for aftercare, she was available to speak to me after my treatment and reassure me which I found very comforting.’</p>
        <p>Mrs K T (age 56)</p>
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