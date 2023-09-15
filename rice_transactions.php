<?php
include('dbConfig\dbconfig.php');
include('sidebar.php');
?>



                <!-- Begin Page Content -->
<form action="#" method="POST">
 <div class="container-fluid">

<h1 style="color: black; margin:auto; text-align:center">Rice Transaction</h1>

<!-- Select paddy category -->
<div class="row form-group">
  <div class="col-md-2">
    <label for="">Select Rice Category</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <form id="paddyStocks_form" action="#" method="POST">
        <?php
        // Fetch data from the database (example query)
        $query = "SELECT `id`, `category_name` FROM `tbl_category`";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result) {
          // Start building the select input
          echo '<select class="form-control" name="rice_category">';

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
<!-- End of select rice category -->


<!-- Select USER -->
<div class="row form-group">
  <div class="col-md-2">
    <label for="">Select Customer</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <form id="paddyStocks_form" action="#" method="POST">
        <?php
        // Fetch data from the database (example query)
        $query = "SELECT  `id`,`customer_name`, `shop_name`FROM `tbl_customer_registration`";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result) {
          // Start building the select input
          echo '<select class="form-control" name="customer_name">';

          // Loop through the result set
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $customer_name = $row['customer_name'];
            $shop_name = $row['shop_name'];

            // Generate an option for each row in the result set
            echo '<option value="' . $id . '">' . $customer_name . ' - ' . $shop_name . '</option>';
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
<!-- End of select rice category -->



<div class="row form-group">
  <div class="col-md-2">
    <label for="">NIC</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <input type="text" class="form-control" id="nic" name="nic" placeholder="">
    </div>
  </div>
</div>



<div class="row form-group">
  <div class="col-md-2">
    <label for="">Shop name</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <input type="text" class="form-control" id="shop_name" name="shop_name" placeholder="">
    </div>
  </div>
</div>


<div class="row form-group">
  <div class="col-md-2">
    <label for="">Maximum Rice Quota</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <input type="text" class="form-control" id="maximum_quota" name="maximum_quota" placeholder="">
    </div>
  </div>
</div>

<div class="row form-group">
  <div class="col-md-2">
    <label for="">Rice amount</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <input type="text" class="form-control" id="paddy_weight" name="rice_weight" placeholder="">
    </div>
  </div>
  
</div>

<div class="row form-group">
  <div class="col-md-2">
    <label for="">Price</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <input type="text" class="form-control" id="paddy_weight" name="paddy_weight" placeholder="">
    </div>
  </div>
  
</div>

</div>
<div class="modal-footer" style="justify-content: center;">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>         
 </form>

 <?php
                            if (isset($_POST['submit'])){

                            $rice_category=$_POST['rice_category'];
                            $customer_name=$_POST['customer_name'];
                            $nic=$_POST['nic'];
                            $shop_name=$_POST['shop_name'];
                            $maximum_quota=$_POST['maximum_quota'];
                            $rice_weight=$_POST['rice_weight'];
                            $Price=$_POST['Price'];

                            $sql="INSERT INTO `tbl_rice_transaction`( `rice_category`, `username`, `shop_name`, `NIC`, `maximum_quota_kg`, `rice_amount`, `total_price`)
                             VALUES
                             ('$rice_category','$customer_name','$shop_name','$nic','$maximum_quota','$rice_weight','$Price')";

                            $result = mysqli_query($conn,$sql);
                            if (!$result) {
                                printf("Error: %s\n", mysqli_error($conn));
                            }
                            if($result)
                            {
                            echo '<script> alert("Input data is successful")</script>';
                            }
                            else
                            {
                            echo '<script> alert("Input data has failed")</script>';
                            }
                            }
                            ?>
                            



               

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

    <?php
 
    
    if (isset($_POST['customerId'])) {
      $customerId = $_POST['customerId'];
    
      // Fetch the customer information from the database
      $query = "SELECT `customer_Nic`, `maximum_quota` FROM `tbl_customer_registration` WHERE `id` = '$customerId'";
      $result = mysqli_query($conn, $query);
    
      if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    
        $response = array(
          'status' => 'success',
          'nic' => $row['customer_Nic'],
          'maximum_quota' => $row['maximum_quota']
        );
    
        echo json_encode($response);
      } else {
        $response = array(
          'status' => 'error'
        );
    
        echo json_encode($response);
      }
    }
    
    ?>



    <script>
      $(document).ready(function() {
  $('select[name="customer_name"]').change(function() {
    var customerId = $(this).val();
    if (customerId !== '') {
      $.ajax({
        url: 'rice_transactions.php', // PHP file to retrieve customer information
        type: 'POST',
        data: { customerId: customerId },
        dataType: 'json',
        success: function(response) {
          if (response.status === 'success') {
            $('#nic').val(response.nic); // Set the retrieved NIC value to the input field
            $('#maximum_quota').val(response.maximum_quota); // Set the retrieved maximum quota value to the input field
          } else {
            // Handle error
          }
        },
        error: function() {
          // Handle error
        }
      });
    } else {
      $('#nic').val(''); // Clear the NIC input field if no customer is selected
      $('#maximum_quota').val(''); // Clear the maximum quota input field if no customer is selected
    }
  });
});

    </script>

    <!-- ajax JavaScript-->




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

</body>

</html>