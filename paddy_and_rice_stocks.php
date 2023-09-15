<?php 
include('dbConfig/dbconfig.php');
include('sidebar.php');
?>



                <!-- Begin Page Content -->

                <div class="invoices">
  <div class="" style="color: black;">


    <div class="row form-group">

      <div class="col-md-3">
        <label for="">Paddy Stock Available</label>
      </div>
      <div class="col-md-6">
      <div class="input-group">
      <input type="text" class="form-control" id="" name="paddyStock" placeholder="100">
      <div class="input-group-append">
        <span class="input-group-text">kg</span>
      </div>
    </div>
      </div>
      
         <div class=" col-md-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_paddy">
                            Add 
                          </button>

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remove_paddy">
                            Remove
                          </button>
                    </div>    
    </div>

     <!--popup to add paddy-->
     
     <div class="modal fade" id="add_paddy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Add Paddy</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="paddy_and_rice_stocks.php" method="POST">

                            <div class="scale1">
                        <div class="form-group" >
                            <label for="exampleFormControlSelect1">Select weight </label>
                            
                            <select class="form-control" id="exampleFormControlSelect1" name="weight">
                              <option>50kg</option>
                              <option>70kg</option>
                              <option>80kg</option>
                              <option>90kg</option>
                              <option>100kg</option>
                            </select>
                          </div>
                        </div> 
                                  
                                  <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" value="submit" name="submit_paddy" class="btn btn-primary">Add Paddy </button>
                        </div>                        
                        </form> 

                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                <!--closepopup-->


   <!-- php code to add paddy to the previously stored value -->


<!-- PHP code to add paddy to the previously stored value -->
<?php
ob_start(); // Start output buffering

// Check if the form is submitted
if (isset($_POST['submit_paddy'])) {
    // Get the selected weight from the dropdown
    $selectedWeight = $_POST['weight'];

    // Remove non-numeric characters from the selected weight
    $selectedWeight = preg_replace("/[^0-9]/", "", $selectedWeight);

    // Validate and sanitize the input if needed

    // Perform database update
    $sql = "UPDATE `tbl_paddy_and_rice_stock_management` SET `amount_of_paddy_stock_kg` = `amount_of_paddy_stock_kg` + $selectedWeight";

    $result = $conn->query($sql);

    if ($result) {
        // Successfully updated the database
        ob_end_clean(); // Clear output 
       // header("Location: paddy_and_rice_stocks.php");
        header("Location: ".$_SERVER['PHP_SELF']); // Redirect to the same page to avoid form resubmission on page refresh
        exit();
    } else {
        // Failed to update the database
        ob_end_clean(); // Clear output buffer
        echo '<script>alert("Error adding paddy!!!");</script>'. $conn->error;
    }
}
?>


                 <!--popup to remove paddy-->
                 <div class="modal fade" id="remove_paddy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Remove Paddy</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" class="">
                            <div class="scale1">
                        <div class="form-group" >
                            <label for="exampleFormControlSelect1">Select weight </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="remove_paddy">
                              <option>50kg</option>
                              <option>70kg</option>
                              <option>80kg</option>
                              <option>90kg</option>
                              <option>100kg</option>
                            </select>
                          </div>
                        </div> 
                        </div>

                                  <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" value="submit" name="submit_paddy_removal" class="btn btn-primary">Remove Paddy</button>
                        </div>                        
                            </form>

                        </div>
                        
                      </div>
                    </div>
                  
                <!--closepopup-->
                
                
                <!--php code to show back end data in front end input field-->
                <?php


// Select the paddy stock available from the table

$sql = "SELECT  `amount_of_paddy_stock_kg` FROM `tbl_paddy_and_rice_stock_management`"; 
$result = $conn->query($sql);

// Check if a row is returned
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $paddyStock = $row['amount_of_paddy_stock_kg'];

    // Echo the value into the input field using JavaScript
    echo '<script>';
    echo 'document.getElementsByName("paddyStock")[0].value = "' . $paddyStock . '";';
    echo '</script>';
} else {
    echo "No data found.";
}

             
                ?>



    <div class="row form-group">
      <div class="col-md-3">
      <label for="">Rice Stock Available</label>
      </div>
      <div class="col-md-6">
      <div class="input-group">
      <input type="text" class="form-control" id="" name="ricestock" placeholder="100">
      <div class="input-group-append">
        <span class="input-group-text">kg</span>
      </div>
    </div>
      </div>
      <div class=" col-md-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_rice">
                            Add 
                          </button>

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remove_rice">
                            Remove
                          </button>
                    </div>
    </div>   
    
     <!--popup to add rice-->
     <div class="modal fade" id="add_rice" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Add Rice</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="paddy_and_rice_stocks.php" method="POST" class="lorryform">
                            <div class="scale1">
                        <div class="form-group" >
                            <label for="exampleFormControlSelect1">Select weight </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="rice_weight">
                              <option>50kg</option>
                              <option>70kg</option>
                              <option>80kg</option>
                              <option>90kg</option>
                              <option>100kg</option>
                            </select>
                          </div>
                        </div> 
                                  <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" value="submitrice" name="submit_rice" class="btn btn-primary">Add Rice</button>
                        </div>                        
                            </form>

                        </div>
                        
                      </div>
                    </div>
                  </div>
                <!--closepopup-->


       <!-- php code to add rice to the previously stored value -->



                 <!--popup to remove rice-->
                 <div class="modal fade" id="remove_rice" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Remove Rice</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" class="lorryform">
                            <div class="scale1">
                        <div class="form-group" >
                            <label for="exampleFormControlSelect1">Select weight </label>
                            <select class="form-control" id="exampleFormControlSelect1" name="remove_rice">
                              <option>50kg</option>
                              <option>70kg</option>
                              <option>80kg</option>
                              <option>90kg</option>
                              <option>100kg</option>
                            </select>
                          </div>
                        </div> 
                                  <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" value="submit" name="submit_rice_removal" class="btn btn-primary">Remove Rice</button>
                        </div>                        
                            </form>

                        </div>
                        
                      </div>
                    </div>
                  </div>
                <!--closepopup-->
  
                </div>

<?php
// Select the paddy stock available from the table

$sql = "SELECT  `amount_of_rice_stock_kg` FROM `tbl_paddy_and_rice_stock_management`"; 
$result = $conn->query($sql);

// Check if a row is returned
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $riceStock = $row['amount_of_rice_stock_kg'];

    // Echo the value into the input field using JavaScript
    echo '<script>';
    echo 'document.getElementsByName("ricestock")[0].value = "' . $riceStock . '";';
    echo '</script>';
} else {
    echo "No data found.";
}
             
    ?>




  <!-- End of Main Content -->


            <!-- Footer -->

            <!-- End of Footer -->

       
        <!-- End of Content Wrapper -->

   
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

    <script>
        let popup = document.getElementById("pop");
        let husk =  document.getElementById("huskp");

        function openPopup(){
            popup.classList.add("open-popup");
            popup.classList.remove("close-popup");
        }

        function closepopup(){
            popup.classList.add("close-popup");
            popup.classList.remove("open-popup");

        }


        function openHuskPop(){
            husk.classList.add("open-huskpop");
            husk.classList.remove("close-huskpop");
        }

        function closeHuskPop(){
            husk.classList.add("close-huskpop");
            husk.classList.remove("open-huskpop");

        }

    </script>

</body>

</html>
