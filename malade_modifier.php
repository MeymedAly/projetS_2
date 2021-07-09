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
            if (isset($_POST['modifier_btn_malade'])) 
            {
                $idd = $_POST['modifier_input_malade'] ;
   
                $query ="SELECT * FROM malade WHERE numeroM = $idd";
                $query_run = mysqli_query($conn,$query);

                foreach($query_run as $row)
                {
                    ?>
            
            <form action="listeMalade.php" method="POST" enctype="multipart/form-data"> 
                               <input type="hidden" name="modif_id" value="<?php echo $row['numeroM']?>">

            <div class="modal-body">
          
                               <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="numeroM" value="<?php echo $row['numeroM']?>" class="form-control" id="adresse"
                                            placeholder="numeroM">
                                    </div>
    
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="nom"  value="<?php echo $row['nom']?>" class="form-control"
                                            id="rotation" placeholder="nom">
                                    </div> 

                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="nom" value="<?php echo $row['prenom']?>" class="form-control" id="adresse"
                                            placeholder="Adresse">
                                    </div>                            
                                </div>
                                <div class="form-group row">
                                
                                    <div class="col-sm-4 mb-3 mb-sm-0">	
                                        <input type="text" name="numeroTele" value="<?php echo $row['numeroTele']?>" class="form-control"
                                            id="numeroTele" placeholder="numeroTele">
                                    </div> 
                                    <div class="col-sm-4 mb-3 mb-sm-0">	
                                        <input type="text" name="numeroTele" value="<?php echo $row['adresse']?>" class="form-control"
                                            id="numeroTele" placeholder="numeroTele">
                                    </div> 
                                    <div class="col-sm-4 mb-3 mb-sm-0">	
                                        <input type="text" name="numeroTele" value="<?php echo $row['diagnostic']?>" class="form-control"
                                            id="numeroTele" placeholder="numeroTele">
                                    </div> 
                                    <?php
             $conn = mysqli_connect("localhost","root","","projet");
             $directeur = "SELECT * FROM service";
             $directeur_run = mysqli_query($conn,$directeur);

             if (mysqli_num_rows($directeur_run) >0)
             {
                 ?>
                 <div class="col-sm-4 mb-3 mb-sm-0">
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
              <div class="col-sm-4 mb-3 mb-sm-0">
                                        <select name="numerolit" id="" placeholder="service" class="form-control">
                                        <option value="">choisisser le numerolit</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                        <option value="2">4</option>
                                        <option value="2">5</option>
                                        </select>
              </div>
              
                                    <?php
                                        $conn = mysqli_connect("localhost","root","","projet");
                                        $docteur = "SELECT * FROM docteur";
                                        $docteur_run = mysqli_query($conn,$docteur);

                                        if (mysqli_num_rows($docteur_run) >0)
                                         {
                                    ?>
                                    <div class="col-sm-4">
                                       <select name="docteur" id="" placeholder="Soigner Par Dr." class="form-control">
                                          <option value="">Soigner Par le docteur</option>
                                        <?php
                                            foreach($docteur_run as $row)
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
                                              echo "aucun docteur";
                                            }

                                    ?>
                                     
                                       
            </div>

         
                                        </div>
        </div>
                               
            <a href="listeMalade.php" class="btn btn-danger">Annuller</a>
            <button href="listeMalad.php" type="submit" name="btn_malade_modifier" class="btn btn-primary">Modifier</button>
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