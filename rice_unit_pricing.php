<?php
include('dbConfig/dbconfig.php');
include('sidebar.php');

if(isset($_POST['submit'])) {
  // Get the selected category and paddy weight from the form
  $rice_category = $_POST['rice_category'];
  $rice_price = $_POST['rice_price'];

  // Perform any necessary validation or sanitization of the input data

  // Insert the values into the database table
  
  $query = "INSERT INTO `tbl_rice_pricing`( `category_of_rice`, `unit_price_per_kg`) VALUES ('$rice_category', '$rice_price')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    // Data successfully inserted, perform any additional actions or redirect to another page
    echo "Data inserted successfully!";
  } else {
    // Handle the query error
    echo 'Error: ' . mysqli_error($conn);
  }
}
?>

<!-- Rest of your HTML code -->

<!-- Begin Page Content -->
<div class="invoices">
  <div class="" style="color: black;">
    <!-- Select paddy category -->
    <div class="row form-group">
      <div class="col-md-3">
        <label for="">Select Rice Category</label>
      </div>
      <div class="col-md-7">
        <div class="input-group">
          <form id="paddyStocks_form" action="#" method="POST">
            <?php
            $query = "SELECT `id`, `category_name` FROM `tbl_category`";
            $result = mysqli_query($conn, $query);

            if ($result) {
              echo '<select class="form-control" name="rice_category">';
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $category_name = $row['category_name'];
                echo '<option value="' . $id . '' . $category_name . '">' . $id . ' - ' . $category_name . '</option>';
              }
              echo '</select>';
            } else {
              echo 'Error: ' . mysqli_error($conn);
            }
            ?>
            <input type="hidden" id="operation" name="operation" value="">
        </div>
      </div>
    </div>
    <!-- End of select paddy category -->

    <!-- paddy stocks -->
    <div class="row form-group">
      <div class="col-md-3">
        <label for="">Set Rice price (per kg)</label>
      </div>
      <div class="col-md-7">
        <div class="input-group">
          <input type="text" class="form-control" id="paddy_weight" name="rice_price" placeholder="100">
          <div class="input-group-append">
            <span class="input-group-text">/ kg</span>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-footer" style="justify-content:center;margin-top:50px;">
      <button id="yesButton" type="submit" value="submit" name="submit" class="btn btn-primary">OK</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    </div>
    </form>
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
