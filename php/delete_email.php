<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
</head>

<body>
	<?php
	$dbc = mysqli_connect('172.16.82.125', 'gflorianom', 'gflorianom', 'elvis_store')
		or die('Error connecting to MySQL server.');
		
	$sql = "SELECT * FROM email_list";
	$result = mysqli_query($dbc, $sql)
	or die('Error querying database.');
	
	?>
	
	<h1>Llistat clients</h1>
	
	<form action="delete_email.php" method="POST">
	
	<?php
	
	while($row = mysqli_fetch_array($result)){
		echo '<input type="sheckbox" value="'. $row['id']. '" name="todelete[]" />';
		echo $row['first_name']." ".$row['last_name']." ".$row['email']."<br>";
	}
	?>	
	
	</form>
</body>

</html>
