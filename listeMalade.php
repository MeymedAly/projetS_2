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
                <a href="malade.php"> 
                  <button type="button" class="btn btn-primary">
                  Ajouter Malade
                 </button>
                </a>
                </h6>
          </div>
<!-- Page Heading -->
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des malades</h6>
      
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <?php
         $conn = mysqli_connect("localhost","root","","projet");
         $query= "SELECT * FROM malade ";
         $query_run = mysqli_query($conn,$query);
         $query2= "SELECT * FROM hospitaliser ";
         $query_run2 = mysqli_query($conn,$query2);
         $query3= "SELECT * FROM soigner ";
         $query_run3 = mysqli_query($conn,$query3);

      ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>diagnostic</th>
                        <th>Lit</th>
                        <th>Soigner Par</th>
                        <th>Service</th>
                        <th>Salle</th> 
                        <th colspan="3">Action</th>                     
                    </tr>
                </thead>
                <tfoot>
                    <tr align="center">
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>diagnostic</th>
                        <th>Lit</th>
                        <th>Soigner Par</th>
                        <th>Service</th>
                        <th>Salle</th>
                        <th colspan="3">Action</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                <?php
          if (mysqli_num_rows($query_run)>0) 
          {
               while (($row = mysqli_fetch_assoc($query_run)) && ($row2 = mysqli_fetch_assoc($query_run2)) && ($row3 = mysqli_fetch_assoc($query_run3)))
                {
                 ?>
                    <tr>
                        <td><?php echo $row['numeroM'] ?></td>
                        <td><?php echo $row['nom'] ?></td>
                        <td><?php echo $row['prenom'] ?></td>
                        <td><?php echo $row['adresse'] ?></td>
                        <td><?php echo $row['numeroTele'] ?></td>
                        <td><?php echo $row['diagnostic'] ?></td>
                        <th><?php echo $row2['numeroLit'] ?></th>        
                        <th><?php echo $row3['numeroD'] ?></th>    
                        <th><?php echo $row2['numeroS'] ?></th>
                        <th>Salle</th>
                        <td>
              <form align="center" title="Suprimer" action="sup.php" method="POST">
                <input type="hidden" name="sup_malade" value="<?php echo $row['numeroM']?>">
                <!--<button type="submit" name="sup_btn" class="btn btn-danger btn-xs-xs">Suprimer</button>-->
                <button type="submit" name="sup_malade_btn" class="btn btn-danger btn-xs-xs"><i class="fa fa-trash"></i></button>
              </form>
            </td>
            <td>
              <form align="center" title="Modifier"  action="malade_modifier.php" method="POST">
                <input type="hidden" name="modifier_input_malade" value="<?php echo $row['numeroM'] ?>">
                <button type="submit" name="modifier_btn_malade" class="btn btn-primary"><i class="fas fa-edit"></i></button>
              </form>
            </td>
            <td>
              <form align="center" title="Voir"  action="viewMalade.php" method="POST">
                <input type="hidden" name="voir_input_malade" value="<?php echo $row['numeroM'] ?>">
                <button type="submit" name="voir_btn_malade" class="btn btn-success"><i class="far fa-eye"></i></button>
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