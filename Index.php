<html>
<head>
     <title>Pretraga kontakata</title>
	 <link rel="stylesheet" type="text/css" href="Style.css">
	 </head>
	 <body>
      <div id="wrap">
	    <div id="Search">
		<img src="Search.jpg">
		<a href="insert.php">Dodaj kontakt</a>
		<a href="remove.php">Ukloni kontakt<a>
		<form action="#" method="GET">
		<input type="text" name="criteria" placeholder="Kriterijum...">
		<input type="submit" value="Pretraga"><br
		</form>
		</div>
		<div>
		<?php
		include 'getResults.php';
		?>
</div>
	 </body>
	 </html>