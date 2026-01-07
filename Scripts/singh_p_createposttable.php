<?php 

require ('singh_p_opendb.php');
$query = 'CREATE TABLE `post` ( `postID` INT NOT NULL AUTO_INCREMENT , `userID` INT NOT NULL , `postSubject` varchar(200) NOT NULL, `postText` varchar(250) NOT NULL , PRIMARY KEY (`postID`));';

if($conn->query($query)){
	echo '<h2> Post Table created</h2>'; 
}

else {
	echo '<h2>Error creating tables: ' . $conn->error . ' '. $conn->errno.'</h2>'; 
}

$conn->close();
?>