<?php

$conn = mysqli_connect("localhost","root","","projet");

if (isset($_POST['serviceBtn'])) {
    
    $directeur =$_POST['directeur'];
    $code =$_POST['code'];
    $nom =$_POST['nom'];
    $batiment =$_POST['batiment'];


    $query = "INSERT INTO service(code,nom,batiment,directeur ) VALUES('$code','$nom','$batiment','$directeur')";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        echo "les donnes sont enregister";
        header('Location: service.php');
    }
    else
    {
        echo "les donnes ne sont pas enregister";
        header('Location: service.php');
    }
}

?>