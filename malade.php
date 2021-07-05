<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div id="content-wrapper" class="d-flex flex-column">
 <div id="content">
        <?php
            include('includes/nav.php');
        ?>




<div class="container">
<div>
    <div>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajouter un malade!</h1>
                            </div>
                            <form class="user"  action="ajoutInfirimier.php" method="POST">
                            <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="numeroI"  class="form-control" id="numero"
                                            placeholder="Numéro Malade">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" name="numeroTel"  class="form-control" id="numeroTel"
                                            placeholder="Numéro Téléphone">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" name="numeroSalle"  class="form-control" id="numeroTel"
                                            placeholder="Numéro Salle">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="nom"  class="form-control" id="nom"
                                            placeholder="Nom">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="prenom"  class="form-control" id="prenom"
                                            placeholder="Prénom">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" name="numerolit"  class="form-control" id="prenom"
                                            placeholder="Numéro Lit">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="adresse"  class="form-control" id="adresse"
                                            placeholder="Adresse">
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="text" name="soigner"  class="form-control"
                                            id="soignerPar" placeholder="Soigner Par Dr.">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" name="diagnostique"  class="form-control"
                                            id="rotation" placeholder="diagnostique">
                                    </div>
                                
                                     <?php
                                        $conn = mysqli_connect("localhost","root","","projet");
                                        $directeur = "SELECT * FROM service";
                                        $directeur_run = mysqli_query($conn,$directeur);

                                        if (mysqli_num_rows($directeur_run) >0)
                                         {
                                       ?>
                                    <div class="col-sm-4">
                                       <select name="directeur" id="" placeholder="service" class="form-control">
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
            <button class="btn btn-primary " name="ajoutbtnIn">Ajouter</button>
                               
                            </form>   
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>






<?php
include('includes/scripts.php');
include('includes/footer.php');
?>