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


<div class="modal fade" id="addSalle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        Ajouter Salle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="addsalle.php" method="POST">

        <div class="modal-body">

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
            <div class="form-group">
                <label>Numéro </label>
                <input type="number" name="numeroS" class="form-control" placeholder="Saisissez Numéro de salle">
            </div>
            <div class="form-group">
                <label>Nombre des lits</label>
                <input type="number" name="nombreLits" class="form-control" placeholder="Saisissez le nombre des lits de salle">
            </div>
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
        <button class="btn btn-primary" data-toggle="modal" data-target="#addSalle"><i class="fa fa-plus-circle" ></i> Ajouter</button>
        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSalle">Ajouter Service</button>-->
        </div>
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Salles</h6>
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
         $query= "SELECT * FROM salle ";
         $query_run = mysqli_query($conn,$query);

      ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>Numéro Salle</th>
                        <th>Nombre des Lits</th>
                        <th>Service</th>                        
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr align="center">
                        <th>Numéro Salle</th>
                        <th>Nombre des Lits</th>
                        <th>Service</th>                        
                        <th colspan="3">Action </th>
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
                        <td><?php echo $row['numeroS'] ?></td>
                        <td><?php echo $row['nombreLits'] ?></td>
                        <td><?php echo $row['service'] ?></td>
                        <td>
              <form align="center" title="Suprimer" action="sup.php" method="POST">
                <input type="hidden" name="sup_id" value="<?php echo $row['numeroS']?>">
                <!--<button type="submit" name="sup_btn" class="btn btn-danger btn-xs-xs">Suprimer</button>-->
                <button type="submit" name="sup_btn" class="btn btn-danger btn-xs-xs"><i class="fa fa-trash"></i></button>
              </form>
            </td>
            <td>
              <form align="center"  action="salle_modifier.php" method="POST">
                <input type="hidden" name="modifier_input_salle" value="<?php echo $row['numeroS'] ?>">
                <button type="submit" name="modifier_btn_salle" class="btn btn-primary"><i class="fas fa-edit"></i></button>
              </form>
            </td>
            <td>
              <form align="center"  action="reg_modifier.php" method="POST">
                <input type="hidden" name="modifier_input" value="<?php echo $row['numeroS'] ?>">
                <button type="submit" name="modifier_btn" class="btn btn-success"><i class="far fa-eye"></i></button>
              </form>
            </td>
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