<?php
$conn = mysqli_connect("localhost","root","","projet");

if (isset($_POST['sup_btn'])) 
{
   
   $id = $_POST['sup_id'];
   $query = "DELETE FROM utilisateur WHERE id = '$id' ";
   $query_run = mysqli_query( $conn,$query);
   if ($query_run) {
      $_SESSION['successe'] = "Les données sont suprimée";
      header('Location:register.php');
   }
   else
   {
      $_SESSION['statuse'] = "Les données ne sont pas suprimée";
      header('Location:register.php');
   }
}


if (isset($_POST['sup_docteur_btn'])) 
{
   
   $sup_docteur = $_POST['sup_docteur'];
   $query = "DELETE FROM docteur WHERE numeroD = '$sup_docteur'";
   $query_run = mysqli_query( $conn,$query);
   if ($query_run) {
      $_SESSION['successe'] = "Les données sont suprimée";
      header('Location:docteurs.php');
   }
   else
   {
      $_SESSION['statuse'] = "Les données ne sont pas suprimée";
      header('Location:docteurs.php');
   }
}


//suprimer salle
if (isset($_POST['sup_btn_salle'])) 
{
   
   $sup_salle = $_POST['sup_salle'];
   $query = "DELETE FROM salle WHERE numeroS  = '$sup_salle'";
   $query_run = mysqli_query( $conn,$query);
   if ($query_run) {
      $_SESSION['successe'] = "Les données sont suprimée";
      header('Location:salle.php');
   }
   else
   {
      $_SESSION['statuse'] = "Les données ne sont pas suprimée";
      header('Location:salle.php');
   }
}




//suprimer service
if (isset($_POST['sup_service_btn'])) 
{
   
   $sup_service = $_POST['sup_service'];
   $query = "DELETE FROM service WHERE code = '$sup_service'";
   $query_run = mysqli_query( $conn,$query);
   if ($query_run) {
      $_SESSION['successe'] = "Les données sont suprimée";
      header('Location:service.php');
   }
   else
   {
      $_SESSION['statuse'] = "Les données ne sont pas suprimée";
      header('Location:service.php');
   }
}


if (isset($_POST['sup_inf_btn'])) 
{
   
   $sup_infir = $_POST['sup_infir'];
   $query = "DELETE FROM infirmier WHERE numeroI = '$sup_infir' ";
   $query_run = mysqli_query( $conn,$query);
   if ($query_run) {
      $_SESSION['successe'] = "Les données sont suprimée";
      header('Location:infirimiers.php');
   }
   else
   {
      $_SESSION['statuse'] = "Les données ne sont pas suprimée";
      header('Location:infirimiers.php');
   }
}


?>