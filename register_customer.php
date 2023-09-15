<?php
include('dbConfig\dbconfig.php');
include('sidebar.php');

ini_set('display_errors', 1);

?>


<!DOCTYPE html>
<html lang="en">

 
                <!--popup-->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Customer Registration</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="register_customer.php" method="POST" class="lorryform">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="cus_name" id="paddy" placeholder="Customer Name">
                                  </div>
                    
                                  <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="cus_nic"  id="rice" placeholder="Customer NIC">
                                  </div>
        
                                  <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="shop_nmae"  id="paddy" placeholder="Shop Name">
                                  </div>
                    
                                  <div class="form-group">
                                 
                                    <input type="text" class="form-control" name="max_quota"  id="rice" placeholder="Maxmimum quota of paddy allowed">
                                  </div>

                                  <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="bnk_name"  id="rice" placeholder="Bank Name">
                                  </div>

                                  <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="branch"  id="rice" placeholder="Branch">
                                  </div>
                                  <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="acc_num"  id="rice" placeholder="Account Number">
                                  </div>
                                  <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="cont_num"  id="rice" placeholder="Contact Number">
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

                            $cus_name=$_POST['cus_name'];
                            $cus_nic=$_POST['cus_nic'];
                            $shop_nmae=$_POST['shop_nmae'];
                            $max_quota=$_POST['max_quota'];
                            $bnk_name=$_POST['bnk_name'];
                            $branch=$_POST['branch'];
                            $acc_num=$_POST['acc_num'];
                            $cont_num=$_POST['cont_num'];

                            $sql="INSERT INTO `tbl_customer_registration`( `customer_Nic`, `customer_name`, `shop_name`, `maximum_quota`, `bank_name`, `branch`, `account_no`, `contact_number`)
                             VALUES
                             ('$cus_nic','$cus_name','$shop_nmae','$max_quota','$bnk_name','$branch','$acc_num','$cont_num')";

                            $result = mysqli_query($conn,$sql);
                            if (!$result) {
                                printf("Error: %s\n", mysqli_error($conn));
                            }
                            if($result)
                            {
                            echo '<script> alert("<br>Input data is successful")</script>';
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
                    <h1 class="h4 mb-2 text-gray-800"></h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        <span class="insert-data-emoji">&#x1F4C4; Register Customer here..</span>
                          </button>
                    </div>
                    
                    <!-- DataTables Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php

                                  $sql = "SELECT `id`, `customer_Nic`, `customer_name`, `bank_name`, `branch`, `account_no`, `contact_number` 
                                  FROM `tbl_customer_registration` ";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {

                                    echo'
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Row ID</th>
                                            <th>Customer Nic</th>
                                            <th>Customer Name</th>
                                            <th>Bank Name</th>
                                            <th>Branch</th>
                                            <th>Acc No</th>
                                            <th>Cont Number</th>
                                            <th>Remove</th>
                                          
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Row ID</th>
                                        <th>Customer Nic</th>
                                        <th>Customer Name</th>
                                        <th>Bank Name</th>
                                        <th>Branch</th>
                                        <th>Acc No</th>
                                        <th>Cont Number</th>
                                        <th>Remove</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    ';

                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                                <td>".$row["id"]."</td>
                                                <td>".$row["customer_Nic"]."</td>
                                                <td>".$row["customer_name"]."</td>
                                                <td>".$row["bank_name"]."</td>
                                                <td>".$row["branch"]."</td>
                                                <td>".$row["account_no"]."</td>
                                                <td>".$row["contact_number"]."</td>
                                                <td>
                                                  <button type=\"button\" class=\"btn btn-primary\" onclick=\"removeRow(" . $row['id'] . ")\">Remove</button>
                                                </td>
                                              </tr>";
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
<script>
function removeRow(rowId) {
  if (confirm("Are you sure you want to delete this row?")) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'register_customer.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);
        if (response.success) {
          alert('Row deleted successfully');
          // remove the row from the table
          var row = document.querySelector('[data-row-id="' + rowId + '"]');
          row.parentNode.removeChild(row);
        } else {
          alert('Error deleting row');
        }
      } else {
        alert('Request failed.  Returned status of ' + xhr.status);
      }
    };
    xhr.send('row_id=' + rowId);
  }
}

</script>


                                 
<?php
if (isset($_POST['row_id'])) {
  // retrieve the row ID from the AJAX call
  $rowId = $_POST['row_id'];

  // delete the row from the database
  //...$sql = "DELETE FROM my_table WHERE id = " . $rowId;
  $sql = "DELETE FROM `tbl_customer_registration` WHERE `id` = " . $rowId;

 
  // if the deletion was successful, return a success message
  $response = array('success' => true);
} else {
  // if the row ID was not provided, return an error message
  $response = array('success' => false);
}

echo json_encode($response);




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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>