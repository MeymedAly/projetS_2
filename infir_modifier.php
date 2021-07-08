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
            if (isset($_POST['modifier_btn_infir'])) 
            {
                $idd = $_POST['modifier_input_infir'] ;
   
                $query ="SELECT * FROM infirmier WHERE numeroI = $idd";
                $query_run = mysqli_query($conn,$query);

                foreach($query_run as $row)
                {
                    ?>
            
            <form action="modif.php" method="POST" enctype="multipart/form-data"> 
                               <input type="hidden" name="modif_id" value="<?php echo $row['numeroI']?>">

                                <div class="form-group row">
                                    
                                    <div class="col-sm-5">
                                        <input type="number" name="numeroTel" value="<?php echo $row['numeroTele']?>"  class="form-control" id="numeroTel"
                                            placeholder="Numéro Téléphone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="text" name="nom" value="<?php echo $row['nom']?>"  class="form-control" id="nom"
                                            placeholder="Nom">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="prenom" value="<?php echo $row['prenom']?>" class="form-control" id="prenom"
                                            placeholder="Prénom">
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="text" name="rotation" value="<?php echo $row['rotation']?>" class="form-control"
                                            id="rotation" placeholder="Rotation">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="salaire" value="<?php echo $row['salaire']?>" class="form-control"
                                            id="salaire" placeholder="Salaire">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="text" name="adresse" value="<?php echo $row['adresse']?>" class="form-control" id="adresse"
                                            placeholder="Adresse">
                                    </div>
                                
                                     <?php
                                        $conn = mysqli_connect("localhost","root","","projet");
                                        $directeur = "SELECT * FROM service";
                                        $directeur_run = mysqli_query($conn,$directeur);

                                        if (mysqli_num_rows($directeur_run) >0)
                                         {
                                       ?>
                                    <div class="col-sm-5">
                                       <select name="service" id="" placeholder="service" value="<?php echo $row['service']?>" class="form-control">
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
                                  <?php
                            }
             else
             {
                echo "aucun service";
             }

             ?>
      </div>
 </div>
            <a href="infirimiers.php" class="btn btn-danger">Annuller</a>
            <button type="submit" name="btn_infir_modifier" class="btn btn-primary">Modifier</button>

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