<?php
session_start();
$conn = mysqli_connect("localhost","root","","projet");
//modifier register
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


//modifier infirmier

if (isset($_POST['btn_infir_modifier'])) {
    
    //$numeroI         = $_POST['numeroI'];
    $id           =$_POST['modif_id'];
    $nom          = $_POST['nom'];
    $prenom       = $_POST['prenom'];
    $adresse      = $_POST['adresse'];
    $numeroTele   = $_POST['numeroTele'];
    $rotation     = $_POST['rotation'];
    $salaire      = $_POST['salaire'];
    $service      = $_POST['service '];


    $quary = "UPDATE infirmier SET nom = '$nom' ,
     prenom='$prenom',adresse='$adresse',numeroTele='$numeroTele',rotation='$rotation',
     salaire='$salaire',service='$service' WHERE numeroI ='$id'";
    $quary_run = mysqli_query($conn,$quary);

    if ($quary_run) {
        $_SESSION['success'] = "Les donnees sont modifiers";
        header('Location:infirimiers.php');
    }
    else
    {
        $_SESSION['status'] = "Les donnees n'est pas modifiers";
        header('Location:infirimiers.php'); 
    }
}





//modifier salle
if (isset($_POST['btn_salle_modifier'])) {

    $id            = $_POST['modif_id'];
    $nombreLits   = $_POST['nombreLits'];
    $service      = $_POST['service'];
    


    $quary = "UPDATE utilisateur SET nombreLits = '$nombreLits' , service = '$service'  WHERE numeroS='$id'";
    $quary_run = mysqli_query($conn,$quary);

    if ($quary_run) {
        $_SESSION['success'] = "Les donnees sont modifiers";
        header('Location:salle.php');
    }
    else
    {
        $_SESSION['status'] = "Les donnees n'est pas modifiers";
        header('Location:salle.php'); 
    }
}
?>