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



if (isset($_POST['btn_login'])) {
    $email_login = $_POST['email'];
    $pass_login  = $_POST['pass'];

    $query = "SELECT * FROM utilisateur WHERE email='$email_login' AND password='$pass_login'";
    $query_run = mysqli_query($conn,$query);


    if (mysqli_fetch_array($query_run)) {
        $_SESSION['nom'] = $email_login;
        header('Location:login.php');
    }
    else{
        $_SESSION['status'] = 'email ou mot de passe incorrecte';
        header('Location:login.php');
    }
}










?>