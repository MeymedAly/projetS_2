<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div id="content-wrapper" class="d-flex flex-column">
 <div id="content">
<?php
 include('includes/nav.php');
  ?>

<div class="container-fluid">
   <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
         <a href="addinfirimier.php">   <button type="button" class="btn btn-primary">
              Ajouter Infirimier
            </button></a>
    </h6>
  </div>
<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des infirimier</h6>
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
         $query= "SELECT * FROM infirmier ";
         $query_run = mysqli_query($conn,$query);

      ?>
            <table class="table table-bordered" id="dataTable" width="60%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Numéro Téléphone</th>
                        <th>Rotation</th>
                        <th>Salaire</th>
                        <th>Service</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Numéro Téléphone</th>
                        <th>Rotation</th>
                        <th>Salaire</th>
                        <th>Service</th>
                        <th colspan="2">Action</th>
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
                        <td><?php echo $row['numeroI'] ?></td>
                        <td><?php echo $row['nom'] ?></td>
                        <td><?php echo $row['prenom'] ?></td>
                        <td><?php echo $row['adresse'] ?></td>
                        <td><?php echo $row['numeroTele'] ?></td>
                        <td><?php echo $row['rotation'] ?></td>
                        <td><?php echo $row['salaire'] ?></td>
                        <td><?php echo $row['service'] ?></td>
                        <td>
                          <form title="Suprimer" action="sup.php" method="POST">
                            <input type="hidden" name="sup_infir" value="<?php echo $row['numeroI']?>">
                            <!--<button type="submit" name="sup_btn" class="btn btn-danger btn-xs-xs">Suprimer</button>-->
                            <button type="submit" name="sup_inf_btn" class="btn btn-danger btn-xs-xs"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                        <td>
                          <form action="infir_modifier.php" method="POST">
                            <input type="hidden" name="modifier_input_infir" value="<?php echo $row['numeroI'] ?>">
                            <button type="submit" name="modifier_btn_infir" class="btn btn-success"><i class="fi fi-pencil-square"></i></button>
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