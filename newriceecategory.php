<?php
include('dbConfig\dbconfig.php');
include('sidebar.php');
?>

                <!-- Begin Page Content -->
<div class="title" style="display: flex; margin-left:40%; gap: 60%;">
    <h3 style="margin: auto; text-align:center; color:rgb(31, 31, 31); font-family: sans-serif; margin-left:-45%">Customer Invoice</h1>
        <h3 style="margin: auto; text-align:center; color:rgb(31, 31, 31); font-family: sans-serif; margin-left:-45%">Lorry Invoice</h1>
</div>
                


            <div class="invoices">
                <div class="bill-cont" style="color: black;" >
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Date</label>
                          <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Customer Name</label>
                          <input type="Customer Name" class="form-control" id="exampleInputPassword1" placeholder="Customer Name">
                        </div>   
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Customer NIC</label>
                            <input type="Customer Name" class="form-control" id="exampleInputPassword1" placeholder="Customer NIC">
                          </div> 

                          <div class="form-group">
                            <label for="exampleInputPassword1">Lorry Number</label>
                            <input type="Customer Name" class="form-control" id="exampleInputPassword1" placeholder="Lorry Number">
                          </div> 
                    </form>                   
                </div>

                <div class="bill-cont" style="color: black;">
                    <form>
                        <div class="scale1">
                        <div class="form-group" style="width: 50%;">
                            <label for="exampleFormControlSelect1">Select Category</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Samba</option>
                              <option>Nadu</option>
                              <option>Keeri Samba</option>
                              <option>Kakulu</option>
                              <option>Rathu</option>
                            </select>
                          </div>
                        </div>                      
                    </form>                   
                </div>

                <div class="bill-cont" >
                    <div class="scale">
                            <div class="form-group">                   
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Paddy Scale">
                          </div> 

                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Rice Scale">
                          </div> 

                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Difference">
                          </div>                          
                    </div>
                </div>

                <div class="bill-cont" style="color: black;">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rate</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Rate">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Amount</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Amount">
                      </div>

                      <button type="button" class="btn btn-primary" style="margin-left:10%; margin-top:2%; ">Add Item</button>                     
                </div>

                <div class="bill-cont" style="color: black;">
                     <!-- DataTales Example -->
                     <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Scale</th>
                                            <th>Rate</th>
                                            <th>Amount</th>     
                                            <th>Remove</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Samba</td>
                                            <td>500</td>
                                            <td>224</td>
                                            <td>112000</td>                                         
                                            <td><button type="button" class="btn btn-primary">Remove</button></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="bill-cont" style="color: black;">
                    <div class="form-group">
                        <div class="form-group" style="width: 50%; margin-left:0%;">
                            <label for="exampleFormControlSelect1">Payment Status</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Cash</option>
                              <option>card</option>
                              <option>Check</option>
                            </select>
                          </div>
                        <label for="exampleInputPassword1">Total Amount</label>
                        <input type="Customer Name" class="form-control" id="exampleInputPassword1" placeholder="Total Amount">
                      </div> 
                      <button type="button" class="btn btn-primary" style="margin-left:75%; margin-top:5%; ">Generate Bill</button>
                </div>

                <div class="bill-cont" style="color: black; margin-left:50%; margin-top:-87.5%" >
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Date</label>
                          <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Lorry Number</label>
                          <input type="Customer Name" class="form-control" id="exampleInputPassword1" >
                        </div>   
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Customer Name</label>
                            <input type="Customer Name" class="form-control" id="exampleInputPassword1" >
                          </div> 

                          <div class="form-group">
                            <label for="exampleInputPassword1">2nd weight</label>
                            <input type="Customer Name" class="form-control" id="exampleInputPassword1" placeholder="2nd weight">
                          </div> 

                          <div class="form-group">
                            <label for="exampleInputPassword1">1st weight</label>
                            <input type="Customer Name" class="form-control" id="exampleInputPassword1" placeholder="1st weight">
                          </div> 

                          <div class="form-group">
                            <label for="exampleInputPassword1">Total Amount</label>
                            <input type="Customer Name" class="form-control" id="exampleInputPassword1">
                          </div> 
                    </form> 
                    <button type="button" class="btn btn-primary" style="margin-left:67%; margin-top:5%; ">Generate Bill</button>                  
                </div>


            </div>      
            <!-- End of Main Content -->




            <!--Popup -->


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <input type="Customer Name" class="form-control" id="exampleInputPassword1">
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Remove Item</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>














            <!-- Footer -->

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