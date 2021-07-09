<?php

$conn = mysqli_connect("localhost","root","","projet");

if (isset($_POST['ajoutbtnMalade'])) {
    
    
    $numeroM         =$_POST['numeroM'];
    $numeroTel       =$_POST['numeroTel'];
    $service         =$_POST['service'];
    $nom             =$_POST['nom'];
    $prenom          =$_POST['prenom'];
    $numeroSalle     =$_POST['numeroSalle'];
    $adresse         =$_POST['adresse'];
    $diagnostique    =$_POST['diagnostique'];
    $numerolit       =$_POST['numerolit'];
    $docteur         =$_POST['docteur'];


    $query = "INSERT INTO malade(numeroM,nom,prenom,adresse,numeroTele,diagnostic) VALUES('$numeroM','$nom','$prenom','$adresse','$numeroTel','$diagnostique')";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        echo "les donnes sont enregister";
        header('Location:listeMalade.php');
    }
    else
    {
        echo "les donnes ne sont pas enregister";
        header('Location:listeMalade.php');
    }




    $query2 = "INSERT INTO hospitaliser(numeroS,numeroM,numeroLit) VALUES('$numeroSalle','$numeroM','$numerolit')";
    $query_run2 = mysqli_query($conn,$query2);

    if ($query_run2) {
        echo "les donnes sont enregister";
        header('Location:listeMalade.php');
    }
    else
    {
        echo "les donnes ne sont pas enregister";
        header('Location:listeMalade.php');
    }




    $query3 = "INSERT INTO soigner(numeroD,numeroM) VALUES('$docteur','$numeroM')";
    $query_run3 = mysqli_query($conn,$query3);

    if ($query_run3) {
        echo "les donnes sont enregister";
        header('Location:listeMalade.php');
    }
    else
    {
        echo "les donnes ne sont pas enregister";
        header('Location:listeMalade.php');
    }
    
}

?>