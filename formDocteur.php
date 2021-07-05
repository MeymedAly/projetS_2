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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajouter un docteur!</h1>
                            </div>
                            <form class="user"  action="ajoutDocteur.php" method="POST">
                                
                                <div class="form-group">
                                    <input type="text" name="numero" class="form-control form-control-user" id="numero"
                                        placeholder="Numéro">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="prenom"  class="form-control form-control-user" id="prenom"
                                            placeholder="Prénom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="nom"  class="form-control form-control-user" id="nom"
                                            placeholder="Nom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="adresse"  class="form-control form-control-user"
                                            id="adresse" placeholder="Adresse">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" name="numeroT"  class="form-control form-control-user"
                                            id="numeroT" placeholder="Numéro Téléphone">
                                    </div>
                                </div>
                                 <div class="form-group">       
                                        <input type="text" name="specialite"  class="form-control form-control-user"
                                            id="specialite" placeholder="Spécialité">
                                </div>
                                <button href="ajoutDocteur.php" class="btn btn-primary btn-user btn-block" name="ajoutbtnDr">
                                    Ajouter
                                </button>
                               
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