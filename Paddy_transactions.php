<?php
include('dbConfig\dbconfig.php');
include('sidebar.php');
?>



<!-- Begin Page Content -->
<form action="#" method="POST">
 <div class="container-fluid">

<h1 style="color: black; margin:auto; text-align:center">Paddy Transaction</h1>

<!-- Select paddy category -->
<div class="row form-group">
  <div class="col-md-2">
    <label for="">Select Paddy Category</label>
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
<!-- End of select rice category -->


<!-- Select USER -->
<div class="row form-group">
  <div class="col-md-2">
    <label for="">Select Seller</label>
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
<!-- End of select rice category -->



<div class="row form-group">
  <div class="col-md-2">
    <label for="">NIC</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <input type="text" class="form-control" id="" name="" placeholder="">
    </div>
  </div>
  
</div>

<div class="row form-group"  >
  <div class="col-md-2" >
    <label for="">Maximum Rice Quota</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <input type="text" class="form-control" id="paddy_weight" name="paddy_weight" placeholder="">
    </div>
  </div>
</div>

<div class="row form-group">
  <div class="col-md-2">
    <label for="">Rice amount</label>
  </div>
  <div class="col-md-5">
    <div class="input-group">
      <input type="text" class="form-control" id="paddy_weight" name="paddy_weight" placeholder="">
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
 </form>


               

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