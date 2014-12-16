<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Nou usuari</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
    
    <?php
        if (isset($_POST['submit'])) {
        $usuari = $_POST['usuari'];
        $password = $_POST['password'];
        $nom = $_POST['nom'];
        $llinatge1 = $_POST['llinatge1'];
        $llinatge2 = $_POST['llinatge2'];
        echo "nom: $nom llinatge1: $llinatge1<br>";
        $output_form = false;
        
        if (empty($usuari) || empty($password)||empty($nom)||empty($llinatge1)||empty($llinatge2)){
            ?>
            <h2>Informació incompleta</h2>
            
            <?php
        }else{
            $output_form=true;
            }
            
        if ($output_form){
            $dbc = mysqli_connect('172.16.82.125', 'gflorianom', 'gflorianom', 'elvis_store')
        or die('Error connecting to MySQL server.');
        $query = "insert into users (usuari,password,nom,llinatge1,llinatge2) 
                    values ('$usuari','$password','$nom','$llinatge1','$llinatge2');";
        echo "___".$query."<br/>";
        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
        mysqli_close($dbc);
            
            }
    }
        
    ?>
    
    
	<h1>Alta nou usuari</h1>
    <form method="post" action="newuser_.php">
        <label for="usuari">Usuari:</label>
        <input type="text" id="usuari" name="usuari" /><br />
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" /><br />
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" /><br />
        <label for="llinatge1">llinatge1:</label>
        <input type="text" id="llinatge1" name="llinatge1" /><br />
        <label for="llinatge2">llinatge2:</label>
        <input type="text" id="llinatge2" name="llinatge2" /><br />
        
        <input type="submit" value="Desar" name="submit" />
    </form>
</body>

</html>
