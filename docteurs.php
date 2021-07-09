<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div id="content-wrapper" class="d-flex flex-column">
 <div id="content">
<?php
 include('includes/nav.php');
  ?>


   <!-- Begin Page Content -->
<div class="container-fluid">
          <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                <a href="formDocteur.php"> 
                  <button type="button" class="btn btn-primary">
                  Ajouter Docteur
                 </button>
                </a>
                </h6>
          </div>
<!-- Page Heading -->
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des docteurs</h6>
      
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <?php
         $conn = mysqli_connect("localhost","root","","projet");
         $query= "SELECT * FROM docteur ";
         $query_run = mysqli_query($conn,$query);

      ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Numéro Téléphone</th>
                        <th>Spécialité</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr align="center">
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Numéro Téléphone</th>
                        <th>Spécialité</th>
                        <th colspan="3">Action</th>
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
                        <td><?php echo $row['numeroD'] ?></td>
                        <td><?php echo $row['nom'] ?></td>
                        <td><?php echo $row['prenom'] ?></td>
                        <td><?php echo $row['adresse'] ?></td>
                        <td><?php echo $row['NumeroTele'] ?></td>
                        <td><?php echo $row['specialite'] ?></td>
                        <td>
              <form align="center" title="Suprimer" action="sup.php" method="POST">
                <input type="hidden" name="sup_id" value="<?php echo $row['numeroD']?>">
                <!--<button type="submit" name="sup_btn" class="btn btn-danger btn-xs-xs">Suprimer</button>-->
                <button type="submit" name="sup_btn" class="btn btn-danger btn-xs-xs"><i class="fa fa-trash"></i></button>
              </form>
            </td>
           
            <td>
              <form align="center"  action="reg_modifier.php" method="POST">
                <input type="hidden" name="modifier_input" value="<?php echo $row['numeroD'] ?>">
                <button type="submit" name="modifier_btn" class="btn btn-primary"><i class="fas fa-edit"></i></button>
              </form>
            </td>
			
			      <td>
              <form align="center"  action="view.php" method="POST">
                <input type="hidden" name="v" value="<?php echo $row['numeroD'] ?>">
                <button type="submit" name="modifier" class="btn btn-success btn-xs-xs"><i class="far fa-eye"></i></button>
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