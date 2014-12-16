
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ca" lang="ca">

<head>
	<title>sense títol</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	<?php
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
	?>
	<h1>grasis per registrarte <?php echo $first_name; ?></h1>	
	<p>el teu nom complet es <?php echo $first_name; ?> <?php echo $last_name; ?> i el teu correu electronic es <?php echo $email; ?></p>
	
	<?php
		$dbc = mysqli_connect('172.16.82.125', 'gflorianom', 'gflorianom', 'elvis_store')
		or die('Error connecting to MySQL server.');
		$query = "INSERT INTO email_list (first_name, last_name, email) " .
		"VALUES ('$first_name', '$last_name', '$email')";
		$result = mysqli_query($dbc, $query)
		or die('Error querying database.');
		mysqli_close($dbc);
	?>
</body>

</html>
