<?php
$conn = mysqli_connect("localhost","root","","projet");

if (isset($_POST['sup_btn'])) {
   
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


?>