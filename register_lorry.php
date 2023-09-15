<?php
include('dbConfig\dbconfig.php');
include('sidebar.php');
?>



                <!--popup-->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Register Lorry</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="register_lorry.php" method="POST" class="lorryform">
                                <div class="form-group">
                                   
                                    <input type="text" class="form-control" name="reg_num" id="paddy" placeholder="Register Number">
                                  </div>
                    
                                  <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="chasis_num" id="rice" placeholder="Chassis Number">
                                  </div>
        
                                  <div class="form-group">
                                   
                                    <input type="text" class="form-control" name="eng_num" id="paddy" placeholder="Engine Number">
                                  </div>
                    
                                  <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="vhcl_num" id="rice" placeholder="Vehicle Number">
                                  </div>
                                  <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" value="submit" name="submit" class="btn btn-primary">Save changes</button>
                        </div>
                            </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                <!--closepopup-->

                <?php
                            if (isset($_POST['submit'])){

                            $reg_num=$_POST['reg_num'];
                            $chasis_num=$_POST['chasis_num'];
                            $eng_num=$_POST['eng_num'];
                            $vhcl_num=$_POST['vhcl_num'];
                            

                            $sql="INSERT INTO `tbl_lorry_registration`(`id`, `registration_num`, `chasis_number`, `engine_number`, `vehicle_number`) 
                            VALUES('null','$reg_num','$chasis_num','$eng_num','$vhcl_num')";

                            $result = mysqli_query($conn,$sql);
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


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="lorryregbtn">
                        <h1 class="h3 mb-2 text-gray-800"></h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        <span class="insert-data-emoji">&#x1F4C4;  Register Lorry here..</span>
                          </button>
                    </div>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            <?php

$sql = "SELECT  `registration_num`, `chasis_number`, `engine_number`, `vehicle_number` 
FROM `tbl_lorry_registration` ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

  echo'
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
      <tr>
          <th>Register Number</th>
          <th>Chasis Number</th>
          <th>Engine Number</th>
          <th>Vehicle Number</th>
          <th>Remove</th>
        
      </tr>
  </thead>
  <tfoot>
      <tr>
          <th>Register Number</th>
          <th>Chasis Number</th>
          <th>Engine Number</th>
          <th>Vehicle Number</th>
          <th>Remove</th>
      </tr>
  </tfoot>
  <tbody>
  ';

  while($row = $result->fetch_assoc()) {

    echo "
    <tr>
        <td>".$row["registration_num"]."</td>
        <td>".$row["chasis_number"]."</td>
        <td>".$row["engine_number"]."</td>
        <td>".$row["vehicle_number"]."</td>
        <td>
            <button type=\"button\" class=\"btn btn-primary\">
                Remove
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
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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