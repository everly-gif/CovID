<?php
    session_start();
    if(!isset($_SESSION["adminvalid"]) || $_SESSION["adminvalid"]!="true")
    {
        echo("<script type='text/javascript'>alert('Access Denied'); </script>");
        header('Refresh: 0; URL = admin-login.html');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Approve</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">  

    <!--Sweetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
</head>

<body id="page-top">

    <!-- Load dbconnect -->
    <?php
        include_once('sql/dbconnect.php');
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item active" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
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
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Admin - Approve</h1>

                    <div class="row centre-row">
                        <div class="col-lg-12">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Display Centres</h6>
                                </div>
                                <div class="card-body">
                                <?php
                                        function deny($conn, $aadhar) {
                                            $sql = "DELETE FROM adminapprove WHERE aadharno='$aadhar'";

                                            $data=$conn->query($sql);
                                            
                                            if($data)
                                            {
                                                echo "<script>swal('Deleted!','Admin Request is deleted','success').then(function(){window.location.href='admin-approve.php';})</script>";
                                            }
                                            else
                                            { 
                                                $error = "SQL: " . $sql . "\n\n" . "Error: " . $conn->error;
                                             
                                                // ! $error is in `` and not '' as the message itself contains " and ' inside it.
                                                // ! If $error is put in those commas, an alert box would not be displayed.
                                                //echo "<script type='text/javascript'>alert(`$error`);</script>";
                                                echo "<script> swal('Oops!',`$error`,'error')</script>";
                                            }   
                                        }

                                        function approve($conn, $row) {
                                            $fname=$row[0]; 
                                            $mname=$row[1];
                                            $sname=$row[2];
                                            $aadhar=$row[3];
                                            $email=$row[4];
                                            $rights=$row[5];
                                            $password=$row[6];
                                            
                                            $sql = "INSERT INTO admin (fname, mname, sname, aadharno, email, rights, password) VALUES
                                                    ('$fname', '$mname', '$sname', '$aadhar', '$email', '$rights', '$password')";
                                            $data=$conn->query($sql);
                                            if($data)
                                            {
                                                echo "<script>swal('Approved!','Admin Request is accepted','success')</script>";
                                                deny($conn, $row[3]);
                                            }
                                            else
                                            { 
                                                $error = "SQL: " . $sql . "\n\n" . "Error: " . $conn->error;
                                             
                                                // ! $error is in `` and not '' as the message itself contains " and ' inside it.
                                                // ! If $error is put in those commas, an alert box would not be displayed.
                                                echo "<script> swal('Oops!',`$error`,'error')</script>";
                                            }  
                                        }


                                        $sql = "SELECT * FROM adminapprove";
                                        $data=$conn->query($sql);
                                        if($data) {
                                            echo "<div class='table-responsive'> 
                                                    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                                        <thead>
                                                            <tr>
                                                                <th>First Name</th>
                                                                <th>Middle Name</th>
                                                                <th>Surname</th>
                                                                <th>Aadhar</th>
                                                                <th>Email</th>
                                                                <th>Rights</th>
                                                                <th>Approve/Deny</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>First Name</th>
                                                                <th>Middle Name</th>
                                                                <th>Surname</th>
                                                                <th>Aadhar</th>
                                                                <th>Email</th>
                                                                <th>Rights</th>
                                                                <th>Approve/Deny</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>";
                                            while($row = $data->fetch_assoc())
                                            {
                                                echo "
                                                        <tr>
                                                            <td>".$row["fname"]."</td>
                                                            <td>".$row["mname"]."</td>
                                                            <td>".$row["sname"]."</td>
                                                            <td>".$row["aadharno"]."</td>
                                                            <td>".$row["email"]."</td>
                                                            <td>".$row["rights"]."</td>
                                                            <td>
                                                                <form method=\"POST\">";
                                                
                                                // * Create hidden tags for each row element an add them to result so that result can be passed as an array
                                                foreach($row as $val)
                                                {
                                                    echo '<input type="hidden" name="result[]" value="'. $val. '">';
                                                }

                                    
                                                echo "              <input type=\"submit\" name=\"approve\" 
                                                                            value=\"Approve Request\" class='btn-lg btn-success btn-icon-split p-1' 
                                                                    </input> 
                                                                    <input type=\"submit\" name=\"deny\" 
                                                                            value=\"Deny Request\" class='btn-lg btn-danger btn-icon-split ml-5 p-1 pl-3 pr-3' >
                                                                    </input> 
                                                                </form>
                                                            </td>
                                                        </tr>";  

                                                if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['approve'])) {
                                                    $result = $_POST['result'];
                                                    print_r($result);
                                                    approve($conn, $result);
                                                    unset($_POST['approve']);
                                                }
                                                if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['deny'])) {
                                                    $result = $_POST['result'];
                                                    print_r($result);
                                                    
                                                    // 3 is the key for aadhar in result
                                                    deny($conn, $result[3]);
                                                    unset($_POST['deny']);
                                                }
                                            }

                                            echo "      </tbody>
                                                    </table>
                                                  </div>";
                                        }
                                        else {
                                            echo "Couldn't Fetch Data";
                                        }
                                    ?>
                                </div>
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
                    <a class="btn btn-primary" href="admin-logout.php">Logout</a>
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