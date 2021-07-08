
<? session_start()?>
<html>
<head>
</head>
<body >


<?php


if (isset($_SESSION['AdminId'])){
	echo '
	<script type="text/javascript">
	location.href="index.php";
	</script>
	';
}else{
	$email =trim(strtolower($_POST['email']));
	$password=addslashes($_POST['password']);
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo ' invalid email adress';
	}else{
		require_once('conn.php');
	$MAIL="select * from login where email='".$_POST["email"]."' and password='".$_POST["password"]."' limit 1";
	if($get_admin=mysqli_query($con,$MAIL)){
	if( mysqli_num_rows($get_admin)<=0){
		echo' <center ><h2>Mauvais Emil ou mot de passe</h2>
		<font color="red" ><input type="button" value="precedent" onclick="window.history.back()"/></font>
		</center>
		
		';
	}else{
		$AdminInf=mysqli_fetch_assoc($get_admin);
		$_SESSION['AdminId']=$AdminInf['id'];
		?>
		<br/>
		<br/>
		<br/>
		<br />
		
		<?php
		
		echo' <font color="brown"><center><h1>Bienvenue Administrateur</h1></center></font>
		<a href="index.php" ><h2><center>ADMINISTRATEUR</center></a>
		</center>
		<br/>
		<br/><br/>
		';
		
	}
}else{
	echo mysqli_error($con);
	}}
}
?>
</body>
</html>