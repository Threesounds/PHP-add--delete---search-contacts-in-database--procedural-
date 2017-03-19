<?php
require 'connect.php';
if(isset($_GET['criteria'])){
	if(!empty($_GET['criteria'])){
		$criteria = trim($_GET['criteria']);
		$criteria = mysqli_real_escape_string($conn, $criteria);
		$query = "SELECT * FROM contacts WHERE fname LIKE '%{$criteria}%' OR lname LIKE '%{$criteria}%'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
	      ?>
		  <div id="rez">
		  <p><b>Ime i prezime</b>:<?php echo $row['fname'] . " " . $row['lname'];?></p>
		  <p>Tel:<?php echo $row['tel'];?></p>
		  </div>
		  <?php
			}
            echo "Broj rezultata: " . mysqli_num_rows($result); 
        }
        else{
            echo "Nema rezultata";
        }
    }
    else {
        echo "Unesite tekst u polje za pretragu";
    }
}
?>