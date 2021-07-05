<?php
session_start();
$conn = mysqli_connect("localhost","root","","projet");
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    //$username = $_POST['sidi'];
    //$email = $_POST['Ali@gmail.com'];
    //$password = $_POST['1234567890'];
//confirmpassword = $_POST['1234567890'];

        if ($password == $confirmpassword) 
        {
        # code...
    
            $query ="INSERT INTO utilisateur (nom,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($conn,$query);

            if($query_run)
            {
                //echo"les donnes sont sauvgarder";
                $_SESSION['success'] = "Admin Ajouter";
                header('Location: register.php');
            }
            else
            {
                //echo"les donnes ne sont pas sauvgarder";
                $_SESSION['status'] = "Admin n'est pas Ajouter";
                header('Location: register.php');

            }
        }
        else
        {
            $_SESSION['status'] = "mot de passe et confirmer le mot de passe ne correspond past";
            header('Location: register.php'); 
        }
    




}

















?>