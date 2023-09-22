<!DOCTYPE html>
<?php 
	include('functions.php') ;
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location : login.php');
	}
?>
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

        <!-- Start Sidebar -->
        <?php include('./navbar/navbar-user.php');?>
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



                    
                    <?php include('./navbar/contentrowuser.php');?>
                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-lg-6">

                    <!-- Circle Buttons -->
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Niat Hajj & Umrah</h6>
                        </div>
                        <div class="card-body">
                            
                            <!-- Niat Umrah Haji  -->
                            <div class="mb-2">
                                <h6>Niat mengerjakan Haji:</h6>
                                <h5>نَوَيْتُ الْحَجَّ وَأَحْرَمْتُ بِهِ لِلَّهِ تَعَاَلَى</h5>
                                <h6>Sahaja aku mengerjakan Haji dan berihram dengannya kerana Allah Ta’ala.</h6>
                                <br>
                            </div>
                            <!-- Circle Buttons (Small) -->
                            <div class="mt-4 mb-2">
                                <h6>Niat mengerjakan Umrah:</h6>
                                <h5>نَوَيْتُ الْعُمْرَةَ وَأَحْرَمْتُ بِهَا لِلَّهِ تَعَاَلَى</h5>
                                <h6>Sahaja aku mengerjakan Umrah dan berihram dengannya kerana Allah Ta’ala.</h6>
                                <br>
                            </div>
                            <!-- Circle Buttons (Large) -->
                            <div class="mt-4 mb-2">
                                <h6>Niat mengerjakan Haji dan Umrah serentak (Haji Qiran):</h6>
                                <h5>نَوَيْتُ الْحَجَّ وَالْعُمْرَةَ وَأَحْرَمْتُ بِـهِمَا لِلَّهِ تَعَاَلَى</h5>
                                <h6>Sahaja aku mengerjakan Haji dan Umrah serta berihram dengan kedua-duanya, kerana Allah Ta’ala.</h6>
                                <br>
                            </div>
                            <img src="img/registerimg.jpg" height="370px">
                        </div>
                    </div>
                </div>
                    
                        <!-- Area Chart -->
                        <div class="col-xl " height= 300px;>
                            <div class="card shadow mb-9" >
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">User Activity</h6>
                                    <div class="dropdown no-arrow">
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        <h5>Rukun Hajj dan Umrah      </h5><br>
                                        <h8>   Umrah Hajj</h8><br>
                                        <h8>1. Ihram        1. Ihram</h8><br>
                                        <h8>2. Tawaf        2. Wukuf di Arafah</h8><br>
                                        <h8>3. Sa’ie        3. Tawaf</h8><br>
                                        <h8>4. Tahalul      4. Sa’ie</h8><br>
                                        <h8>5. Tertib       5. Tahalul</h8><br>
                                        <h8>                6. Tertib</h8><br>
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

</body>

</html>