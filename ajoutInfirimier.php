<?php
session_start();
$conn = mysqli_connect("localhost","root","","projet");
if(isset($_POST['ajoutbtnIn']))
{
    $numeroI = $_POST['numeroI'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $numeroTel = $_POST['numeroTel'];
    $rotation = $_POST['rotation'];
    $salaire = $_POST['salaire'];
    $service = $_POST['service'];
    //$username = $_POST['sidi'];
    //$email = $_POST['Ali@gmail.com'];
    //$password = $_POST['1234567890'];
//confirmpassword = $_POST['1234567890'];

        
    
            $query ="INSERT INTO infirmier (numeroI,nom,prenom,adresse,NumeroTele,rotation,salaire,service) VALUES ('$numeroI','$nom','$prenom','$adresse','$numeroTel','$rotation','$salaire','$service')";
            $query_run = mysqli_query($conn,$query);

            if($query_run)
            {
                //echo"les donnes sont sauvgarder";
               $_SESSION['success'] = "Infirmier Ajouter";
               header('Location:infirimiers.php');
            }
            else
            {
                //echo"les donnes ne sont pas sauvgarder";
                $_SESSION['status'] = "Infirmier n'est pas Ajouter";
                header('Location:infirimiers.php');

            }
        

    




}