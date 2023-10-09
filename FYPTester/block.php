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
    </div>
  </nav>

<?php include 'login.php';?>

</head>
<body>

        <div class="HowItWorks">
            <div class="container">                   
                    

                        
                            <form class="needs-validation" action="" method="post">
                              <div class="d-flex justify-content-center">
                                <h4 class="modal-title" style="align-text:center;">Block Availability</h4>

                                
                                <input type="text" id="service" name="service" readonly style="display:none;">
                              </div>
                        
                              <div class="modal-body">
                              <br>
                              <div class="container-flui">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-wrap="false" onclick="hideShowDiv()">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <div class="d-flex justify-content-center">

                                    

                                    

                                      <div class="radio-toolbar" style="text-align: center;">
                                        <?php
                                        
                                          for ($i = 1; $i < 8; $i++){
                                            ?>
                                            
                                        <input type="radio" id="<?php echo 'date'. $i;?>" name="date" value="<?php echo date('Y-m-d', strtotime($Date. "+$i days")) ?>">
                                        <label for="<?php echo 'date'. $i;?>"><?php echo date('D d', strtotime($Date. "+$i days"))?> <br> <?php echo date('M', strtotime($Date. "+$i days"));
                                                                $Date = date('Y-m-d');?></label>
                                            <?php
                                          }

                                        ?>

                                      </div>

                                      </div>

                                          

                                      <div class="container">
                                      </div>
                                    </div>
                                    <div class="carousel-item">
                                    <div class="d-flex justify-content-center">

                                    <div class="radio-toolbar" style="text-align: center;">
                                      <?php
                                          
                                          for ($i = 8; $i < 15; $i++){
                                            ?>
                                            
                                        <input type="radio" id="<?php echo 'date'. $i;?>" name="date" value="<?php echo date('Y-m-d', strtotime($Date. "+$i days")) ?>">
                                        <label for="<?php echo 'date'. $i;?>"><?php echo date('D d', strtotime($Date. "+$i days"))?> <br> <?php echo date('M', strtotime($Date. "+$i days"));
                                                                $Date = date('Y-m-d');?></label>
                                            <?php
                                          }

                                        ?>

                                      </div>

                                      </div>
                                      
                                      <div class="container">
                                      </div>
                                    </div>
                                    <div class="carousel-item">
                                    <div class="d-flex justify-content-center">

                                    <div class="radio-toolbar" style="text-align: center;">
                                      <?php
                                            
                                            for ($i = 15; $i < 22; $i++){
                                              ?>
                                              
                                          <input type="radio" id="<?php echo 'date'. $i;?>" name="date" value="<?php echo date('Y-m-d', strtotime($Date. "+$i days")) ?>">
                                          <label for="<?php echo 'date'. $i;?>"><?php echo date('D d', strtotime($Date. "+$i days"))?> <br> <?php echo date('M', strtotime($Date. "+$i days"));
                                                                  $Date = date('Y-m-d');?></label>
                                              <?php
                                            }

                                          ?>

                                      </div>

                                      </div>
                                        <div class="container">
                                        </div>
                                    </div>
                                  </div>
                                  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                                </div>
                              </div>

                                            <br>
                                            
                                              <div class="d-flex justify-content-center">
                                                <button class="w-50 btn btn-outline-warning" type="submit">Block</button>
                                              </div>
                                              <br>
                                              </form>

                                    </div>
                                  </div>
                                </main>
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