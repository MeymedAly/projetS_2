<?php
$conn = mysqli_connect("localhost","root","","projet");


   
   
echo "<table >";
echo "<tr>";

echo "<th>". "nom". "</th>" ;
echo "<th>". "prenom". "</th>";
echo "<th>". "specialite". "</th>";
echo "</tr>" ;

$sql= "select nom,prenom ,specialite  from docteur  ";
$resultat = mysqli_query($conn,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[0]."</td>"; 
	echo"<td>". $lign[1]."</td>";
	echo"<td>". $lign[2]."</td>";
	echo "</tr>";
} 
            
          }	
	
?>




