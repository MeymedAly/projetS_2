<?php
//la connexion avec la base de donnée
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";
?>