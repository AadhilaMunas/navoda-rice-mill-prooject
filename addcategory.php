<?php
include('dbConfig\dbconfig.php');
include('sidebar.php');
?>



                <!-- Begin Page Content -->
                <form action="addcategory.php" method="POST">
                <div class="container-fluid">

<h1 style="color: black; margin:auto; text-align:center">Add Category</h1>

<div class="form-group" style="width: 40%; margin:auto; justify-content:center; margin-top:5%;">

    <input type="text" class="form-control" name="cat_name" id="paddy" placeholder="Category Name">

    <button type="submit" value="submit" name="submit" class="btn btn-primary" style="margin-top: 4%;">Add</button>

</div>
                </form>
                

                    <?php
                            if (isset($_POST['submit'])){

                            $cat_name=$_POST['cat_name'];
                        

                            $sql="INSERT INTO `tbl_category`(`id`, `category name`) VALUES ('null','$cat_name')";

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

                    <div class="card shadow mb-4" style="margin-top: 4%; width:50%; margin-left:25%;">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            <?php

$sql = "SELECT `category_name` FROM `tbl_category`  ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

  echo'
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
      <tr>
          
          <th>Category Name</th>
          <th>Remove</th> 
      </tr>
  </thead>
  <tfoot>
      <tr>                              
          <th>Category Name</th>
          <th>Remove</th>
      </tr>
  </tfoot>
  <tbody>
  ';

  while($row = $result->fetch_assoc()) {

    echo "
    <tr>
        <td>".$row["category_name"]."</td>
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
                        <span>Copyright &copy; Your Website 2021</span>
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