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
            if (isset($_POST['modifier_btn'])) 
            {
                $id = $_POST['modifier_input'] ;
   
                $query ="SELECT * FROM utilisateur WHERE id = $id";
                $query_run = mysqli_query($conn,$query);

                foreach($query_run as $row)
                {
                    ?>
                    

            <form action="modif.php" method="POST" enctype="multipart/form-data"> 
            <input type="hidden" name="modif_id" value="<?php echo $row['id']?>">

            <div class="form-group">
                <label> Nom </label>
                <input type="text" name="nom_modifier" value="<?php echo $row['nom']?>" class="form-control">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email_modifier" value="<?php echo $row['email']?>"  class="form-control">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="mot_modifier" value="<?php echo $row['password']?>"  class="form-control">
            </div>
            <a href="register.php" class="btn btn-danger">Annuller</a>
            <button type="submit" name="btn_regis_modifier" class="btn btn-primary">Modifier</button>

            <?php
                }
            }
           ?>
            </form>
            

            </div>
        </div>

             

     </div>
  </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>