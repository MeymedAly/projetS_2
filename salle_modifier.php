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
            <div class="card-body">
            <?php
            $conn = mysqli_connect("localhost","root","","projet");
            if (isset($_POST['modifier_btn_salle'])) 
            {
                $idd = $_POST['modifier_input_salle'] ;
   
                $query ="SELECT * FROM salle WHERE numeroS = $idd";
                $query_run = mysqli_query($conn,$query);

                foreach($query_run as $row)
                {
                    ?>
            
            <form action="modif.php" method="POST" enctype="multipart/form-data"> 
                               <input type="hidden" name="modif_id" value="<?php echo $row['numeroS']?>">

            <div class="modal-body">

            <div class="form-group">
                <label>Nombre des lits</label>
                <input  name="nombreLits" value="<?php echo $row['nombreLits']?>" class="form-control" placeholder="Saisissez le nombre des lits de salle">
            </div>

             <?php
             $conn = mysqli_connect("localhost","root","","projet");
             $directeur = "SELECT * FROM service";
             $directeur_run = mysqli_query($conn,$directeur);

             if (mysqli_num_rows($directeur_run) >0)
             {
                 ?>
                 <div class="form-group">
                 <label>Service</label>
               <select name="service" id="" class="form-control">
                        <option value="">choisisser le service</option>
                        <?php
                           foreach($directeur_run as $row)
                           {
                        ?>
                        <option value="<?php echo $row['nom'];?>"><?php echo $row['nom']; ?></option>
                        <?php
                           }
                        ?>
               </select>
            </div>
                
                <?php
             }
             else
             {
                echo "aucun service";
             }

             ?>
            
        </div>
                               
            <a href="infirimiers.php" class="btn btn-danger">Annuller</a>
            <button type="submit" name="btn_salle_modifier" class="btn btn-primary">Modifier</button>
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