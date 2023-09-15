<?php
include('dbConfig\dbconfig.php');
include('sidebar.php');
?>
            <h1 class="h2 text-center">Lorry Invoice</h1>
                <div class="invoice">
                    <div class="for">
                    <form action="" class="lorryform">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Vehicle Number</label>
                            <input type="text" class="form-control" id="paddy" placeholder="Vehicle Number">
                          </div>
            
                          <div class="form-group">
                            <label for="exampleFormControlInput1" >Customer Name</label>
                            <input type="text" class="form-control" id="rice" placeholder="Customer Name">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">2nd weight</label>
                            <input type="text" class="form-control" id="paddy" placeholder="Kg">
                          </div>
            
                          <div class="form-group">
                            <label for="exampleFormControlInput1" >1st weight</label>
                            <input type="text" class="form-control" id="rice" placeholder="Kg">
                          </div>
            

                          <div class="form-group">
                            <label for="exampleFormControlInput1">Net weight</label>
                            <input type="text" class="form-control" id="paddy" placeholder="Kg">
                          </div>
            
                          <div class="form-group">
                            <label for="exampleFormControlInput1" >Date</label>
                            <input type="date" class="form-control" id="date">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1" >Time</label>
                            <input type="time" class="form-control" id="rice">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1" >Amount</label>
                            <input type="text" class="form-control" id="rice">
                          </div>
                    </form>
                </div>

                    <div class="lorrybutt">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Generate Bill</button>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>