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

<?php

    include 'database_connection.php';

    // select data from a table
    $sql = "SELECT Date, Time FROM Booking";
    $result = $conn->query($sql);

    // create an array to store the results
    $data = array();

    // check if any rows were returned from the query
    if ($result->num_rows > 0) {
        // loop through each row and add it to the data array
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

// close the database connection
$conn->close();    
?>


<!-- The Modal -->
<div class="modal fade" id="BookModal" >
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                        
                            
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Pick Date & Time</h4>
                                
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>
                        
                              <!-- Modal body -->
                              <div class="modal-body">
                              <br>
                              <div class="container-flui">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-wrap="false" style="background-color: white;" onclick="hideShowDiv()">
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

                              <div class="container">
                                            </div>
                                          </div>

                                          <div class="d-flex justify-content-center">

                                          <div class="radio-time" style="display:none" id="div1">
                                              <input type="radio" id="time1" name="time" value="09:00">
                                              <label for="time1">09:00</label>

                                              <input type="radio" id="time2" name="time" value="12:00">
                                              <label for="time2">12:00</label>

                                              <input type="radio" id="time3" name="time" value="15:00"> 
                                              <label for="time3">15:00</label>
                                            </div>

                                          <?php
                                          
                                          $a = 1;
                                          $b = 2;
                                          $c = 3;
                                          
                                          for ($i = 2; $i < 22; $i++){
                                            $a += 3;
                                            $b += 3;
                                            $c += 3;
                                           
                                            
                                            
                                            ?>
                                            
                                            <div class="radio-time" style="display:none" id="<?php echo 'div'. $i;?>">
                                              <input type="radio" id="<?php echo 'time'. $a?>" name="time" value="09:00">
                                              <label for="<?php echo 'time'. $a?>">09:00</label>

                                              <input type="radio" id="<?php echo 'time'. $b?>" name="time" value="12:00">
                                              <label for="<?php echo 'time'. $b?>">12:00</label>

                                              <input type="radio" id="<?php echo 'time'. $c?>" name="time" value="15:00"> 
                                              <label for="<?php echo 'time'. $c?>">15:00</label>
                                            </div>
                                            <?php
                                          }

                                        ?>
                                                                                      
                                          </div>
                                          

                                            <br>
                                              <div class="d-grid gap-3">
                                                <button class="w-100 btn btn-outline-warning" type="submit">Book Now</button>
                                              </div>
                                              <br>
                                              </form>

                                    </div>
                                  </div>
                                </main>
                                </div>
                              </div>
                            </div>
            </div>
            </div>
            </div>

