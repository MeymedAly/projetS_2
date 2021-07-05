<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div id="content-wrapper" class="d-flex flex-column">
 <div id="content">
 <?php
 include('includes/nav.php');
  ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weigth-bold text-primary">Modifier Admin profil</h6>
            </div>
            <div class="card-body">
                <?php
                    $conn = mysqli_connect("localhost","root","","projet");

                   if (isset($_POST['modif_btn']))
                    {
                       $id = $_POST['modif_in'];
                       $query = "SELECT * FROM utilisateur WHERE id='$id";
                       $query_run = mysqli_query($conn,$query);
                   
                       foreach($query_run as $roww) 
                       {
                           ?>

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" value="<?php echo $row['nom'] ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control"  value="<?php echo $row['email'] ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control"  value="<?php echo $row['password'] ?>">
            </div>
            
            <?php

                }
            }
        ?>

            </div>
        </div>

             

     </div>
  </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>