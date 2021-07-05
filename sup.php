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