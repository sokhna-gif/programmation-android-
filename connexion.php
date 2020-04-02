<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "transdb";

// Creation de la connection au base de donnee
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect());
}
echo "Connected successfully";
# Vérifions si les enregistrements existent dans la table
	
	$result = mysqli_query($conn,"SELECT * FROM utilisateur");
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			 echo $row["identifiant "];
			 echo "<br>";
		}
	}
	
?>