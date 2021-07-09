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
  <?php
    $conn = mysqli_connect("localhost","root","","projet");
	if (isset($_POST['view_btn_infir'])) 
	{
		$id = $_POST['view_input_infir'] ;

		$query ="SELECT * FROM infirmier WHERE numeroI = $id";
		$query_run = mysqli_query($conn,$query);

		foreach($query_run as $row)
		{
			?>


<div class="container">
<div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                <a href="infirimiers.php"> 
				<i class="fas fa-arrow-circle-left"></i>
                  retour
                </a>
                </h6>
          </div>
             <div class="mg-available-rooms">
                    <h4 class="mg-sec-left-title text-primary">Information du Infirmier :  <?php echo $row['nom']?></h4>
                        <div class="mg-avl-rooms">
                            <div class="mg-avl-room">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <a href="#"><span class="fa fa-building-o" style="font-size: 50px"></span><!-- <img src="img/room-1.png" alt="" class="img-responsive"> --></a>
                                    </div>
                                    <div class="col-sm-10">
                                        <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><?php //echo $result->OCCUPATIONTITLE ;?> 
                                        </div> 
                                        <div class="row contentbody">
                                            <div class="col-sm-6">
                                                <ul>
                                                    <li><i class="fp-ht-bed w-100"></i><h2>Numero : <?php echo $row['numeroI']?></h2></li>
                                                    <li><i class="fp-ht-food w-100"></i><h2>Nom : <?php echo $row['nom']?></h2></li>

                                                    <li><i class="fp-ht-food w-100"></i><h2>Prénom : <?php echo $row['prenom']?></h2></li>
													<li><i class="fp-ht-food w-100"></i><h2>Adresse :<?php echo $row['adresse']?></h2></li>
													<li><i class="fp-ht-food"></i><h2>Numéro de Téléphone: <?php echo $row['numeroTele']?><h2></li>
													<li><i class="fp-ht-food"></i><h2>salaire: <?php echo $row['salaire']?></h2></li>	
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                            <li><i class="fp-ht-food"></i><h2>Service : <?php echo $row['service']?></h2></li>	
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
            </div>  





			<?php
                }
            }
           ?> 
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>