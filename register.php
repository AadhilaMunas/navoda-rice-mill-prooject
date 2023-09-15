<?php
include('dbConfig\dbconfig.php');

?>
<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Navoda Rice Mill</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css">
</head>

<body class="bg-gradient-primary">


    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">                   
                    <div class="col-lg-6 test">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="register.php" >
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="fulname" id="exampleInputEmail"
                                        placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="address" id="exampleInputEmail"
                                        placeholder="Address">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nic"
                                            id="exampleInputPassword" placeholder="nic" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleRepeatPassword" placeholder="Password" required>
                                    </div>
                                </div>
                                <!--<a href="index.php" class="btn btn-primary btn-user btn-block">-->
                                <button class="btn btn-primary btn-user btn-block" type="submit" value="submit" name="submit"> Register Account</button> 
                                <!--</a>-->
                                <hr>  
                            </form>

                            <?php
                            if (isset($_POST['submit'])){

                            $fulname=$_POST['fulname'];
                            $address=$_POST['address'];
                            $email=$_POST['email'];
                            $nic=$_POST['nic'];
                            $password=$_POST['password'];

                            $sql = "INSERT INTO `tbl_user_account` (`id`, `full_name`, `address`, `email_address`, `NIC`, `password`) 
        VALUES (null, '$fulname', '$address', '$email', '$nic', '$password')";


                            $result = mysqli_query($conn,$sql);
                            if($result)
                            {
                            echo '<script> alert("Input data is successful")</script>';
                            
                            }
                            else
                            {
                            die('Error: ' . mysqli_error($conn));
                            echo '<script> alert("Input data has failed")</script>';
                            
                            }
                            }
                            //header("Location: index.php");
                            ?>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="index.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
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

</body>

</html>