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


<div class="modal fade" id="addService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="addservice.php" method="POST">

        <div class="modal-body">

             <?php
             $conn = mysqli_connect("localhost","root","","projet");
             $directeur = "SELECT * FROM docteur";
             $directeur_run = mysqli_query($conn,$directeur);

             if (mysqli_num_rows($directeur_run) >0)
             {
                 ?>
                 <div class="form-group">
                <label>Directeur</label>
               <select name="directeur" id="" class="form-control">
                        <option value="">choisisser le directeur de service</option>
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
                echo "aucun directeur";
             }

             ?>
            <div class="form-group">
                <label> Code </label>
                <input type="text" name="code" class="form-control" placeholder="Saisissez code de service">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Saisissez le code de service">
            </div>
            <?php
             $conn = mysqli_connect("localhost","root","","projet");
             $directeur = "SELECT * FROM batiment";
             $directeur_run = mysqli_query($conn,$directeur);

             if (mysqli_num_rows($directeur_run) >0)
             {
                 ?>
                 <div class="form-group">
                <label>Directeur</label>
               <select name="batiment" id="" class="form-control">
                        <option value="">choisisser le batiments de service</option>
                        <?php
                           foreach($directeur_run as $row)
                           {
                        ?>
                        <option value="<?php echo $row['numeroBati'];?>"><?php echo $row['numeroBati']; ?></option>
                        <?php
                           }
                        ?>
               </select>
            </div>                
                <?php
             }
             else
             {
                echo "aucun batiments";
             }
             ?>  
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ferme</button>
            <button type="submit" name="serviceBtn" class="btn btn-primary">Sauvgarder</button>
        </div>
      </form>

    </div>
  </div>
</div>









<div class="container-fluid">
<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">  
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addService">
              Ajouter Service
            </button>
    </div>
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Services</h6>
        <?php 
          if (isset($_SESSION['success']) && $_SESSION['success'] !='') {
            echo '<h2>' .$_SESSION['success']. '</h2>' ;
            unset($_SESSION['success']);
          }

          if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
            echo '<h2 class="bg-info">' .$_SESSION['status']. '</h2>' ;
            unset($_SESSION['status']);
          }

      ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <?php
         $conn = mysqli_connect("localhost","root","","projet");
         $query= "SELECT * FROM service ";
         $query_run = mysqli_query($conn,$query);

      ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Baliment</th>                        
                        <th>Directeur</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Baliment</th>                        
                        <th>Directeur </th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
          if (mysqli_num_rows($query_run)>0) 
          {
               while ($row = mysqli_fetch_assoc($query_run))
                {
                 ?>
                    <tr>
                        <td><?php echo $row['code'] ?></td>
                        <td><?php echo $row['nom'] ?></td>
                        <td><?php echo $row['batiment'] ?></td>
                        <td><?php echo $row['directeur'] ?></td>
                    </tr>

                    <?php
               }
          }
          else{
            echo "Pas d'enregistrement trouvé";
          }
          ?>
                </tbody>
            </table>
        </div>
    </div>
</div>






<?php
include('includes/scripts.php');
include('includes/footer.php');
?>