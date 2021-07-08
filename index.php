
<?php 

    include('includes/header.php');
    include('includes/navbar.php');

?>
       

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <?php 

                include('includes/nav.php');

            ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Page d'accuille</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Nombres des docteurs </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php 
                                                $conn = mysqli_connect("localhost","root","","projet");
                                                $query = "SELECT numeroD FROM docteur ORDER BY  numeroD";
                                                $query_run  = mysqli_query($conn,$query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h1>'.$row. '</h1>';
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-3x text-gray-350"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Les infirimier</div>
                                              <?php 
                                                $conn = mysqli_connect("localhost","root","","projet");
                                                $query = "SELECT id FROM utilisateur ORDER BY  id";
                                                $query_run  = mysqli_query($conn,$query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h1>'.$row. '</h1>';
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-stethoscope  fa-3x text-gray-350"></i>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">les Salles
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                               <!-- <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>-->
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php 
                                                $conn = mysqli_connect("localhost","root","","projet");
                                                $query = "SELECT numeroS  FROM salle ORDER BY  numeroS";
                                                $query_run  = mysqli_query($conn,$query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h1>'.$row. '</h1>';
                                                ?>
                                                </div>

                                                <div class="row no-gutters align-items-center">
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-building fa-3x text-gray-350"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                                <?php 
                                                $conn = mysqli_connect("localhost","root","","projet");
                                                $query = "SELECT numeroS  FROM salle ORDER BY  numeroS";
                                                $query_run  = mysqli_query($conn,$query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h1>'.$row. '</h1>';
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                          <!-- Earnings (Monthly) Card Example -->
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Les Services
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
                                                <?php 
                                                $conn = mysqli_connect("localhost","root","","projet");
                                                $query = "SELECT code FROM service ORDER BY code";
                                                $query_run  = mysqli_query($conn,$query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h1>'.$row. '</h1>';
                                                ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- Pending Requests Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                                <?php 
                                                $conn = mysqli_connect("localhost","root","","projet");
                                                $query = "SELECT numeroS  FROM salle ORDER BY  numeroS";
                                                $query_run  = mysqli_query($conn,$query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h1>'.$row. '</h1>';
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        



                         <!-- Pending Requests Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                                <?php 
                                                $conn = mysqli_connect("localhost","root","","projet");
                                                $query = "SELECT numeroS  FROM salle ORDER BY  numeroS";
                                                $query_run  = mysqli_query($conn,$query);

                                                $row = mysqli_num_rows($query_run);
                                                echo '<h1>'.$row. '</h1>';
                                                ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


              


                           <!-- Pending Requests Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          

   

<?php 

     include('includes/scripts.php');
     include('includes/footer.php');   

?>
  
   

