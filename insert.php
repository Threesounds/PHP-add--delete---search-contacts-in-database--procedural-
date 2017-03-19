<html>
<head>
     <title>Pretraga kontakata</title>
	 <link rel="stylesheet" type="text/css" href="Style.css">
	 </head>
	 <body>
      <div id="wrap">
	    <div id="Search">
		<img src="Search.jpg">
		<a href="index.php">Nazad na pretragu</a>
		<a href="remove.php">Ukloni kontakt<a>
		<form action="#" method="POST">
		<label>Ime:<br/>
		<input type="text" name="fname"></label><br/>
		<label>Prezime:<br/>
		<input type="text" name="lname"></label><br/>
		<label>Telefon:<br/>
		<input type="text" name="tel"></label><br/>
		<input type="submit" name="insert" value="Dodaj kontakt"><br/>
		</form>
		</div>
		<div>
		<?php
		if(isset($_POST['insert'])){
			if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['tel'])){
			if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['tel'])){
				$fname =trim($_POST['fname']);
				$lname =trim($_POST['lname']);
				$tel =trim($_POST['tel']);	
				require 'connect.php';
				$fname = mysqli_real_escape_string($conn, $fname);
				$lname = mysqli_real_escape_string($conn, $lname);
				$tel = mysqli_real_escape_string($conn, $tel);
				
				$query = "INSERT INTO contacts (fname, lname, tel) VALUES ('{$fname}','{$lname}','{$tel}')";
			}else{
				echo "sva polja moraju biti popunjena.";
			}	
			if(mysqli_query($conn, $query) === TRUE);{
				echo "Novi unos je uspešno kreiran.";
			}
			}else {
				echo "Greška.";
			}	
		} else{
				echo "Svi parametri moraju biti poslati!";
		    }
	
		
	
?>
</div>
	 </body>
	 </html>