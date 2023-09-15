<?php
include('dbConfig\dbconfig.php');
include('sidebar.php');
?>




                <!-- Begin Page Content -->
                <div class="container-fluid">

                <h1 style="color: black; margin:auto; text-align:center">Pending Payements to Sellers</h1>
                    
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            <?php

$sql = "SELECT `id`, `date_of_transaction`, `paddy_category`, `username`, `shop_name`, `paddy_amount_kg`, `total_price` FROM `tbl_paddy_transaction`";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

  echo'
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
      <tr>
      <th>ID</th>
      <th>Date of transaction</th>
      <th>Category</th>
      <th>User name</th>
      <th>Shop name</th>
      <th>Amount Purchased(kg)</th>
      <th>Total price</th>
      <th>Confirm</th>
        
      </tr>
  </thead>
  <tfoot>
      <tr>
      <th>ID</th>
      <th>Date of transaction</th>
      <th>Category</th>
      <th>User name</th>
      <th>Shop name</th>
      <th>Amount Purchased(kg)</th>
      <th>Total price</th>
      <th>Confirm</th>
      </tr>
  </tfoot>
  <tbody>
  ';

  while($row = $result->fetch_assoc()) {

    echo "
    <tr>
        <td>".$row["id"]."</td>
        <td>".$row["date_of_transaction"]."</td>
        <td>".$row["paddy_category"]."</td>
        <td>".$row["username"]."</td>
        <td>".$row["shop_name"]."</td>
        <td>".$row["paddy_amount_kg"]."</td>
        <td>".$row["total_price"]."</td>
        <td>
        <button type=\"button\" class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#exampleModalCenter\">
                Confirm
            </button>
        </td>
    </tr>
";

  }

  echo'
  </tbody>
  </table>
  ';
}

else {
  echo "No data found";
}
 
?>

<!--popup-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="register_customer.php" method="POST" class="lorryform">
                                  <div class="form-group">  
                                   <h5>Are you sure the payements are confirmed?</h5>
                                  </div>
                                  <div class="modal-footer">
                                  <button type="submit" value="submit" name="submit" class="btn btn-danger">YES</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
                         
                        </div>                        
                            </form>

                        </div>
                        
                      </div>
                    </div>
                  </div>
                <!--closepopup-->

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                    <a class="btn btn-primary" href="index.html">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>