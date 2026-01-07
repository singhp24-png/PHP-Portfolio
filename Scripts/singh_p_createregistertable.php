<?php 

require ('singh_p_opendb.php');


$query = "CREATE TABLE `register`(`registerID` INT NOT NULL AUTO_INCREMENT , `registerUsername` VARCHAR(30) NOT NULL , `registerPassword` VARCHAR(40) NOT NULL , `registerRole` INT NOT NULL , PRIMARY KEY (`registerID`));";
if($conn->query($query)){
	echo '<h2> Register Table created</h2>'; 
}

else {
	echo '<h2>Error creating tables: ' . $conn->error . ' '. $conn->errno.'</h2>'; 
}

$conn->close();
?>