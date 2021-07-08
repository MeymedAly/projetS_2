<?php
session_start();
$conn = mysqli_connect("localhost","root","","projet");

if (isset($_POST['btn_regis_modifier'])) {

    $id             = $_POST['modif_id'];
    $nom_modifier   = $_POST['nom_modifier'];
    $email_modifier = $_POST['email_modifier'];
    $mot_modifier   = $_POST['mot_modifier'];


    $quary = "UPDATE utilisateur SET nom = '$nom_modifier' , email = '$email_modifier' ,
     password='$mot_modifier' WHERE id='$id'";
    $quary_run = mysqli_query($conn,$quary);

    if ($quary_run) {
        $_SESSION['success'] = "Les donnees sont modifiers";
        header('Location:register.php');
    }
    else
    {
        $_SESSION['status'] = "Les donnees n'est pas modifiers";
        header('Location:register.php'); 
    }
}




?>