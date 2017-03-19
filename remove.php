<html>
<head>
     <title>Pretraga kontakata</title>
	 <link rel="stylesheet" type="text/css" href="Style.css">
	 </head>
	 <body>
      <div id="wrap">
	    <div id="Search">
		<img src="Search.jpg">
		<a href="index.php">Povratak na kontakte</a>
		<a href="insert.php">Dodaj kontakt<a>
		</div>
		<?php
		     require 'connect.php';
			 $query = "SELECT * FROM contacts";
			 $result = mysqli_query($conn, $query);
			 if(mysqli_num_rows($result) > 0){
				 while($row = mysqli_fetch_assoc($result)){
					 ?>
					 <div id="rez">
					 <a href="removeContact.php?id=<?php echo $row['id'] ?>"> <img src="remove.jpg" height="25px"/></a>
					 <p>Ime i prezime:<?php echo $row['fname'] . " " . $row['lname'];?></p>
					 <p>Tel:<?php echo $row['tel'];?></p>
					 <div>
					 <?php
			 }
			 }
		?>
	 </body>
	 </html>