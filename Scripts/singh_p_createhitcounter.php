<?php 

require ('singh_p_opendb.php');

$query = 'CREATE TABLE hit_counter (hitCounter INT NOT NULL AUTO_INCREMENT PRIMARY KEY)';

if($conn->query($query)){
	echo '<h2> Hit Counter Table created</h2>'; 
}

else {
	echo '<h2>Error creating tables: ' . $conn->error . ' '. $conn->errno.'</h2>'; 
}

$conn->close();
?>