<?php
session_start();
$conn = mysqli_connect("localhost","root","","projet");
if(isset($_POST['ajoutbtnDr']))
{
    $numero = $_POST['numero'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $numeroT = $_POST['numeroT'];
    $specialite = $_POST['specialite'];
    //$username = $_POST['sidi'];
    //$email = $_POST['Ali@gmail.com'];
    //$password = $_POST['1234567890'];
//confirmpassword = $_POST['1234567890'];

        
    
            $query ="INSERT INTO docteur (numeroD,nom,prenom,adresse,NumeroTele,specialite) VALUES ('$numero','$nom','$prenom','$adresse','$numeroT','$specialite')";
            $query_run = mysqli_query($conn,$query);

            if($query_run)
            {
                
                //echo"les donnes sont sauvgarder";
               $_SESSION['status'] = "Docteur Ajouter";
               $_SESSION['status_code'] == "success";
              // header('Location: docteurs.php');
            }
            else
            {
                //echo"les donnes ne sont pas sauvgarder";
                $_SESSION['status'] = "Docteur n'est pas Ajouter";
                $_SESSION['status_code'] == "error";
                header('Location: docteurs.php');

            }
        

    




}