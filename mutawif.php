<?php 
	include('functions.php') ;
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location : login.php');
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

    <title>USER PROFILE- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3" >USER PROFILE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
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

                    

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                    include 'dbconnect.php';
                                    $id=$_SESSION['user']['id'];
                                    $query=mysqli_query($conn,"SELECT * FROM users where id='$id'");
                                    $row=mysqli_fetch_array($query);
                                ?>     
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" value=""><?php echo $row['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="editprofile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" ></i>
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
        </div>
        <!-- End of Content Wrapper -->
        <?php 
        
        $servername = "localhost";
        $dbuser  = "root";
        $dbpass= "";
        $dbname = "my_db";
        $conn = mysqli_connect($servername,$dbuser,$dbpass,$dbname);


        if(isset($_POST['edit']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $location = $_POST['location'];
            $birthday = $_POST['birthday'];
            $nphone = $_POST['nphone'];
            $passport = $_POST['passport'];
            $ic = $_POST['ic'];
            $visa = $_POST['visa'];
            $id=$_SESSION['user']['id'];

            $select = "SELECT * from users WHERE username ='$username'";
            $sql = mysqli_query($conn,$select);
            $row = mysqli_fetch_assoc($sql);
            $update = "UPDATE users SET username='$username',email='$email',location='$location',nphone='$nphone',birthday='$birthday',passport='$passport',ic='$ic',visa='$visa' where id='$id'";
            $sql2 = mysqli_query($conn,$update);

            if(empty($username)){
                array_push($errors, "Username is required");
            }

            if(empty($email)){
                array_push($errors, "Username is required");
            }
            if(empty($location)){
                array_push($errors, "Address is required");
            }
            if(empty($nphone)){
                array_push($errors, " Need to fill in the No Phone");
            }
            if(empty($passport)){
                array_push($errors, " Need to fill in the No Phone");
            }
            if(empty($location)){
                array_push($errors, "Address is required");
            }
            if(empty($birthday)){
                array_push($errors, "Enter your Birthday");
            }
            if(empty($ic)){
                array_push($errors, "Enter your IC");
            }
            if(empty($visa)){
                array_push($errors, "Enter your Visa");
            }

            $ic = "123456-11-1111"; //default ic if not set
            if(isset($_POST["ic"])){
                $ic = $_POST["ic"];
                $regex = '/^[0-9]{6}-[0-9]{2}-[0-9]{4}$/';

                if (preg_match($regex, $ic)) {
                    echo("");
                }
                else {
                    array_push($errors, "You must insert xxxx-xx-xxxx");
                }
            }
            
 

            if (count($errors) == 0) {
                    if($sql2)
                {
                    echo "<script>alert('successfully update');</script>";
                }
                else
                {
                    echo "<script>alert('Failed to update');</script>";
                }
                // header('location : index.php');
            }

            
        }
    ?>
   
</form>

    <div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <form action="editprofile.php" method="post">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                            <?php echo display_error(); ?>
                            <?php
                                include 'dbconnect.php';
                                $id=$_SESSION['user']['id'];
                                $query=mysqli_query($conn,"SELECT * FROM users where id='$id'");
                                $row=mysqli_fetch_array($query);
                            ?>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                <input class="form-control" id="inputUsername" type="text" name="username" value="<?php echo $row['username']; ?>">
                            </div>
                            <!-- Form Row-->
                            <div class="mb-3">
                                <!-- Form Group (last name)-->
                                <!-- <div class="col-md-6"> -->
                                    <label class="small mb-1" for="inputLastName">Email</label>
                                    <input class="form-control" id="inputLastName" type="text" name="email" value="<?php echo $row['email']; ?>">
                                <!-- </div> -->
                            </div>
                            <!-- Form Row        -->
                            <div class="mb-3">
                                    <label class="small mb-1" for="inputLocation">Address</label>
                                    <input class="form-control" id="inputLocation" type="text" name="location" value="<?php echo $row['location']; ?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Passport</label>
                                    <input class="form-control" id="inputPhone" type="text" name="passport" placeholder="passport" value="<?php echo $row['passport']; ?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Visa</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="visa" placeholder="Enter your visa" value="<?php echo $row['visa']; ?>">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="mb-3">
                                    <label class="small mb-1" for="inputLocation">Ic number</label>
                                    <input class="form-control" id="inputLocation" type="text" name="ic" value="<?php echo $row['ic']; ?>">
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="text" name="nphone" placeholder="Enter your phone number" value="<?php echo $row['nphone']; ?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" id="inputBirthday" type="date" name="birthday" placeholder="Enter your birthday" value="<?php echo $row['birthday']; ?>">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <!-- <input type="submit" name="edit"> -->
                            <button name="edit" class="btn btn-primary" type="submit" name="edit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
                    <?php  if (isset($_SESSION['user'])) : ?>
								<!-- <?php echo $_SESSION['user']['username'];?> -->
								<small>
								<a href="login.php?logout='1'" style="white"><button class="btn btn-primary">logout</button></a>
								<small>
				    <?php endif ?>
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

</html>