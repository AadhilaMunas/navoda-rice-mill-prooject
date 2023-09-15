
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Navoda Rice Mill</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/new.css">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   
    <script>
window.onload = function() {
window.history.replaceState( null, null, window.location.href );
}
</script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <span class="mill-emoji">&#x26ED;</span>

                </div>
                <div class="sidebar-brand-text mx-3">  Navoda Rice Mill</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                <span class="homepage-emoji">&#x1F3E0;</span>
                    <span>Dashboard</span></a>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <span class="registration-emoji">&#x1F4DD;</span>
                    <span>Register</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="index.php">Login</a>
                        <a class="collapse-item" href="register.php">Register</a>
                        <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="dealer_registrations.php">
                <span class="registration-emoji">&#x1F464;</span>
                    <span>Register Dealers</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="register_lorry.php">
                <span class="lorry-emoji">&#x1F69A;</span>
                    <span>Register Lorry</span></a>
            </li>

             <!-- Rice transaction -->
             <li class="nav-item">
                <a class="nav-link" href="rice_transactions.php">
                <span>&#x1F4B1;</span>
                    <span>Rice Transaction</span></a>
            </li>
              <!-- paddy transaction -->
              <li class="nav-item">
                <a class="nav-link" href="Paddy_transactions.php">
                <span>&#x1F4B1;</span>
                    <span>Paddy Transaction</span></a>
            </li>

            <!-- pricing -->
            <li class="nav-item">
                <a class="nav-link" href="rice_unit_pricing.php">
                <span>&#x1F4B5;</span>
                    <span>Rice Pricing</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="newriceecategory.php">
                <span class="new-order-emoji">&#x1F4C4;</span>
                    <span>New order</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                <span class="income-emoji">&#x1F4B0;</span>
                    <span>Income</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="paddy_and_rice_stocks_copy.php">
                <span class="paddy-grain-emoji">&#x1F33E;</span>
                    <span>Paddy and Rice Stock</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="employee_salary_and_wages.php">
                <span class="salary-emoji">&#x1F4B5;</span>
                    <span>Salary and wages</span></a>
            </li> 

            <li class="nav-item">
                <a class="nav-link" href="accounts_ledger.php">
                <span class="accounts-emoji">&#x1F4D2;</span>

                    <span>Accounts</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="addcategory.php">
                <span class="category-emoji">&#x2795;</span>
                    <span>Add Category</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                       
                    </ul>

                </nav>
                <!-- End of Topbar -->
