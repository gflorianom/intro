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
		$subject=$_POST['subject'];
		$elvismail=$_POST['elvismail'];
		
		if (!empty($subject) && !empty($elvismail)){
			echo "SUBJECT: $subject MSG: $elvismail<br/>";
			$dbc = mysqli_connect('172.16.82.125', 'gflorianom', 'gflorianom', 'elvis_store')
			or die('Error connecting to MySQL server.');
			$query="SELECT first_name,last_name,email from email_list ORDER BY first_name,last_name,email";
			$result = mysqli_query($dbc, $query);
			?>
			<table border="1" cellpadding="0" cellspacing="0">
				<tr>
					<th>First name</th>
					<th>Last name</th>
					<th>email</th>
					<th>Subject</th>
					<th>Missatge</th>
				</tr>
			<?php
			$i=0
			while($row = mysqli_fetch_array($result)){
			?>
				<tr>
					<td><?php echo $row['first_name']?></td>
					<td><?php echo $row['last_name']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $subject?></td>
					<td><?php echo $elvismail?></td>
					
				</tr>
			<?php
			}
			?>
			</table>
			<?php
			mysqli_close($dbc);
		}else{
			echo "<h1>No has escrit cap subject o cap missatge!!</h1>;"
		}
	?>
	
</body>

</html>
