<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>login</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
		$user= $_POST['usuari'];
		$pasword= $_POST['paswd'];
		
		$dbc = mysqli_connect('172.16.1.190', 'jcolomr', 'parcou11', 'tbj_db')
		or die('Error connecting to MySQL server.');
		$query = "SELECT usuari, pasword, nombre, sec_apellido, apellido FROM usuaris where usuari='$user'";
		
		
		$resultat = mysqli_query($dbc, $query);
		$row = mysqli_fetch_array($resultat);
		
		if ($pasword==$row['pasword']){
			echo "LOGIN CORRECTE<br>";
			echo "<h1>Benbingut senyor ".$row['nombre']." , ".$row['apellido']." , ".$row['sec_apellido']."<br/></h1>";
		}else{
			echo "LOGIN INCORRECTE<br>";
				if ($user==$row['usuari']){
					echo "<script>alert('password equivocat');</script>";
					header('Location: login.html');
				}else{
					echo "l'usuari no existeix el vols crear?<br/>";
					echo " si el vols crear entra <a href='formulari.html'>aqui</a> ";
				}
			}
		
		
	?>	

   
</body>

</html>
