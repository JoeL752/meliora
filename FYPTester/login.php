<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Meliora Medical Aesthetics</title>




<?php  session_start();   // session starts with the help of this function 


    include 'database_connection.php';

    
if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:index.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $email = $_POST['user'];
     $pass = $_POST['pass'];

     $sql = "SELECT * FROM Users WHERE Email='$email'";
     $result = $conn->query($sql);

     if (mysqli_num_rows($result)>0){
       while ($row=mysqli_fetch_assoc($result)){
         if (password_verify($pass, $row['Pass'])){
           $_SESSION['use']=$email;
           echo '<script type="text/javascript"> window.open("index.php","_self");</script>';   
         }else{
          echo '<script>alert("Invalid Password")</script>';  
         }
       }
     }else{
      echo '<script>alert("Email not registered")</script>';  
     } 
}

 ?>

<!-- The Modal -->
<div class="modal fade" id="myModal" >
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:#1d2024">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="text-center">
      <body>

<main class="form-signin">
  <form action="" method="post">
    <h1 class="h3 mb-3 fw-normal" style="color:rgb(215, 175, 55);">Login</h1>
    <small class="d-block mb-3 text-muted">Please enter email and password</small>
    <div class="form-floating">
      <input type="username" id="email" name="user" class="form-control" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" id="password" name="pass" class="form-control" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-outline-warning" type="submit" name="login">Login</button><br><br>
    <span class="register" style="color:rgb(215, 175, 55);">Don't have an account? Click <a href="signup.php">here</a> to make one</span><br><br>
  </form>
</main>

</body>
</div>

    </div>
  </div>
</div>


