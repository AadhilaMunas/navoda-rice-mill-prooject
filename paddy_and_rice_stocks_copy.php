<?php 
include('dbConfig/dbconfig.php');
include('sidebar.php');
?>


   <!-- Begin Page Content -->

                <div class="invoices">
  <div class="" style="color: black;">

   <!-- topic-->
    <div class="row form-group">

      <div class="col-md-12 text-center font-weight-bold text-primary">
        <label for="">---------------------------------------Paddy Stock Available---------------------------------------------------</label>
      </div>   
    </div>

<!-- Select paddy category -->
<div class="row form-group">
  <div class="col-md-2">
    <label for="">Select Category</label>
  </div>
  <div class="col-md-7">
    <div class="input-group">
      <form id="paddyStocks_form" action="#" method="POST">
        <?php
        // Fetch data from the database (example query)
        $query = "SELECT `id`, `category_name` FROM `tbl_category`";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result) {
          // Start building the select input
          echo '<select class="form-control" name="paddy_category">';

          // Loop through the result set
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $category_name = $row['category_name'];

            // Generate an option for each row in the result set
            echo '<option value="' . $id . '">' . $id . ' - ' . $category_name . '</option>';
          }

          // Close the select input
          echo '</select>';
        } else {
          // Handle the query error
          echo 'Error: ' . mysqli_error($conn);
        }
        ?>
        <input type="hidden" id="operation" name="operation" value="">
      </form>
    </div>
  </div>
</div>
<!-- End of select paddy category -->


<!-- paddy stocks-->
<div class="row form-group">
  <div class="col-md-2">
    <label for="">Paddy amount</label>
  </div>
  <div class="col-md-7">
    <div class="input-group">
      <input type="text" class="form-control" id="paddy_weight" name="paddy_weight" placeholder="100">
      <div class="input-group-append">
        <span class="input-group-text">kg</span>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <button type="button" class="btn btn-primary" onclick="saveData('add')" >
      Add
    </button>
    <button type="button" class="btn btn-primary" onclick="saveData('remove')" >
      Remove
    </button>
  </div>
</div>


<!-- JavaScript function to save the data -->
<script>
  function saveData(operation) {
    var category = document.getElementById('paddyStocks_form').paddy_category.value;
    var weight = document.getElementById('paddy_weight').value;

    // Set the operation value
    document.getElementById('operation').value = operation;

    // Submit the form
    document.getElementById('paddyStocks_form').submit();
  }
</script>


<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the operation (add or remove)
  $operation = $_POST['operation'];

  // Get the selected category from the select input
  $selectedCategory = $_POST['paddy_category'];

  // Get the weight value
  $weight = $_POST['paddy_weight'];

  // Process the data based on the operation
  if ($operation === 'add') {
    // Insert the data into the database (adjust the query and table names as per your database structure)
    $insertQuery = "INSERT INTO `tbl_paddy_stocks` (`category_name`, `amount_added`) VALUES ('$selectedCategory', '$weight')";

    // Execute the insert query
    if (mysqli_query($conn, $insertQuery)) {
      echo '<script>alert("Paddy amount added!!!");</script>';
    } else {
      echo '<script>alert("Error adding paddy!!!");</script>';
    }
  } elseif ($operation === 'remove') {
    // Insert the data into the database (adjust the query and table names as per your database structure)
    $insertQuery = "INSERT INTO `tbl_paddy_stocks` (`category_name`, `amount_removed`) VALUES ('$selectedCategory', '-$weight')";

    // Execute the insert query
    if (mysqli_query($conn, $insertQuery)) {
      echo '<script>alert("Paddy amount removed!!!");</script>';
    } else {
      echo '<script>alert("Error removing paddy!!!");</script>';
    }
  }
}
?>




    







<!----------------------------------------------------------------- RICE STOCKS----------------------------------------------------------------->

<div class="row form-group">

<div class="col-md-3">
  <label for=""></label>
</div>   
</div>

<div class="row form-group">

<div class="col-md-3">
  <label for=""></label>
</div>   
</div>

<div class="row form-group">

<div class="col-md-3">
  <label for=""></label>
</div>   
</div>

<div class="row form-group">

<div class="col-md-3">
  <label for=""></label>
</div>   
</div>


  <!-- topic-->
  <div class="row form-group">

<div class="col-md-12 text-center font-weight-bold text-primary">
  <label for="">---------------------------------------Rice Stock Available---------------------------------------------------</label>
</div>   
</div>



<!-- Select paddy category -->
<div class="row form-group">
  <div class="col-md-2">
    <label for="">Select Category</label>
  </div>
  <div class="col-md-7">
    <div class="input-group">
      <?php
      // Fetch data from the database (example query)
      $query = "SELECT `id`, `category_name` FROM `tbl_category`";
      $result = mysqli_query($conn, $query);

      // Check if the query was successful
      if ($result) {
        // Start building the select input
        echo '<select class="form-control" name="paddy_category">';

        // Loop through the result set
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $category_name = $row['category_name'];

          // Generate an option for each row in the result set
          echo '<option value="' . $id . '">' . $id . ' - ' . $category_name . '</option>';
        }

        // Close the select input
        echo '</select>';
      } else {
        // Handle the query error
        echo 'Error: ' . mysqli_error($conn);
      }
      ?>
    </div>
  </div>
</div>
<!-- End of select paddy category -->





<!-- samba stocks-->
<div class="row form-group">

<div class="col-md-3">
  <label for="">Rice amount</label>
</div>
<div class="col-md-6">
<div class="input-group">
<input type="text" class="form-control" id="" name="sambaRiceStock" placeholder="1050">
<div class="input-group-append">
  <span class="input-group-text">kg</span>
</div>
</div>
</div>

   <div class=" col-md-3">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_samba_rice">
                      Add 
                    </button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#remove_samba_rice">
                      Remove
                    </button>
              </div>    
</div>

<!--php code to show backend value in front end-->
<?php
// Select the rice stock available from the table
$sql = "SELECT  `samba_rice_amount` FROM `tbl_rice_stocks`"; 
$result = $conn->query($sql);

// Check if a row is returned
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $sambaRiceStock = $row['samba_rice_amount'];

    // Echo the value into the input field using JavaScript
    echo '<script>';
    echo 'document.getElementsByName("sambaRiceStock")[0].value = "' . $sambaRiceStock . '";';
    echo '</script>';
} else {
    echo "Sorry..No data found.";
}         
?>

<!--popup to add Samba-->
<div class="modal fade" id="add_samba_rice" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Samba rice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="#" method="POST">

                      <div class="scale1">
                  <div class="form-group" >
                      <label for="exampleFormControlSelect1">Select weight </label>
                      
                      <select class="form-control" id="exampleFormControlSelect1" name="samba_rice_weight">
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
                    <button type="submit" value="submit" name="submit_samba_rice" class="btn btn-primary">Add Rice</button>
                  </div>                        
                  </form> 

                  </div>
                  
                </div>
              </div>
            </div>          
          <!--closepopup-->




<!--php code to add samba rice-->
<?php
// Check if the form is submitted
if (isset($_POST['submit_samba_rice'])) {
    // Get the selected weight from the dropdown
    $selectedSambaRiceWeight = $_POST['samba_rice_weight'];

    // Remove non-numeric characters from the selected weight
    $selectedSambaRiceWeight_number = preg_replace("/[^0-9]/", "", $selectedSambaRiceWeight);

    // Perform database update
    $sql = "UPDATE `tbl_rice_stocks` SET `samba_rice_amount` = `samba_rice_amount` + '$selectedSambaRiceWeight_number'";


    $result = $conn->query($sql);

    if ($result) {
        // Successfully updated the database
        echo '<script>alert("successfully updated to database!!!");</script>';
       
    } else {
        // Failed to update the database
      
        echo '<script>alert("Error adding paddy!!!");</script>'. $conn->error;
    }
}
?>
          
           <!--popup to remove samba paddy-->
           <div class="modal fade" id="remove_samba_rice" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Remove Samba rice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form action="" method="POST" class="">
                      <div class="scale1">
                  <div class="form-group" >
                      <label for="exampleFormControlSelect1">Select weight </label>
                      <select class="form-control" id="exampleFormControlSelect1" name="remove_samba_rice">
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
                    <button type="submit" value="submit" name="submit_samba_rice_removal" class="btn btn-primary">Remove rice</button>
                  </div>                        
                      </form>

                  </div>
                  
                </div>
              </div>     
          <!--closepopup-->



<!--php code to remove samba rice-->
<?php
// Check if the form is submitted
if (isset($_POST['submit_samba_rice_removal'])) {
    // Get the selected weight from the dropdown
    $selectedremovesambaRiceWeight = $_POST['remove_samba_rice'];

    // Remove non-numeric characters from the selected weight
    $selectedremoveSambaRiceWeight_no = preg_replace("/[^0-9]/", "", $selectedremovesambaRiceWeight);

    // Perform database update
    $sql = "UPDATE `tbl_rice_stocks` SET `samba_rice_amount` = `samba_rice_amount` - '$selectedremoveSambaRiceWeight_no'";


    $result = $conn->query($sql);

    if ($result) {
        // Successfully updated the database
        echo '<script>alert("successfully updated to database!!!");</script>';
       
    } else {
        // Failed to update the database
      
        echo '<script>alert("Error removing paddy!!!");</script>'. $conn->error;
    }
}
?>






  <!-- End of Main Content -->


         

       
        <!-- End of Content Wrapper -->

   
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    </div>

    <!-- Logout Modal-->
  

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
