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
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nom d'utilisateur </label>
                <input type="text" name="username" class="form-control" placeholder="Saisissez votre nom d'utilisateur">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail d'utilisateur ">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <label>Confirmer mot de passe</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirmer mot de passe">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ferme</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Sauvgarder</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
    <button class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile"><i class="fa fa-plus-circle" ></i> Ajouter</button>
            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Ajouter Admine
            </button>-->
    </h6>
  </div>

  <div class="card-body">

      <?php 
          if (isset($_SESSION['success']) && $_SESSION['success'] !='') {
            echo '<h2  class="bg-primary">' .$_SESSION['success']. '</h2>' ;
            unset($_SESSION['success']);
          }

          if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
            echo '<h2 class="bg-info">' .$_SESSION['status']. '</h2>' ;
            unset($_SESSION['status']);
          }

      ?>
    <div class="table-responsive">
      <?php
         $conn = mysqli_connect("localhost","root","","projet");
         $query= "SELECT * FROM utilisateur ";
         $query_run = mysqli_query($conn,$query);
      if(mysqli_num_rows($query_run) > 0)
        {
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr align="center">
            <th> ID </th>
            <th> Nom </th>
            <th>E-mail </th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
           while ($row = mysqli_fetch_assoc($query_run))
                {
                 ?>
                 <tr>
            <td><?php echo $row['id'] ?></td>
            <!--<td> foreach($query_run as $row) {echo $row['nom'];}?></td>-->
            <td><?php echo $row['nom'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td>
              <form align="center" title="Suprimer" action="sup.php" method="POST">
                <input type="hidden" name="sup_id" value="<?php echo $row['id']?>">
                <!--<button type="submit" name="sup_btn" class="btn btn-danger btn-xs-xs">Suprimer</button>-->
                <a type="submit" name="sup_btn" class="btn btn-danger btn-xs-xs"><i class="fa fa-trash"></i></button>
              </form>
            </td>
            <td>
              <form align="center"  action="reg_modifier.php" method="POST">
                <input type="hidden" name="modifier_input" value="<?php echo $row['id'] ?>">
                <button type="submit" name="modifier_btn" class="btn btn-primary"><i class="fas fa-edit"></i></button>
              </form>
              </td>

              <td>
              <form align="center"  action="reg_modifier.php" method="POST">
                <input type="hidden" name="modifier_input" value="<?php echo $row['id'] ?>">
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
</div>
<div>

</div>
        
</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>