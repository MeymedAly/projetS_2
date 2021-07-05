<?php

$conn = mysqli_connect("localhost","root","","projet");

if (isset($_POST['serviceBtn'])) {
    
    $service =$_POST['service'];
    $numeroS =$_POST['numeroS'];
    $nombreLits =$_POST['nombreLits'];


    $query = "INSERT INTO salle(numeroS,nombreLits,service) VALUES('$numeroS','$nombreLits','$service')";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        echo "les donnes sont enregister";
        header('Location: salle.php');
    }
    else
    {
        echo "les donnes ne sont pas enregister";
        header('Location: salle.php');
    }
}

?>