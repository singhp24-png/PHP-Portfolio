<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Candy Shop Thanks</title>
</head>
<style>
h1 {background-color: #ffb6c1; margin: 0; padding : 15px; text-align: center;}
body{
margin: 0px;
background-color: powderblue;
}
</style>
<body>
<h1>Prabhlean Singh</h1>
</body>
</html>

<?php 
require("singh_p_opendb.php");

// Stores user input in variables
$name = htmlspecialchars( $_POST['name']); 
$email = htmlspecialchars( $_POST['email']); 
$phone = htmlspecialchars( $_POST['phone']); 
$gender = htmlspecialchars( $_POST['gender']); 
$better = htmlspecialchars( $_POST['better']);
$comment = htmlspecialchars($_POST['comments']);
$food = "";

if(isset($_POST['food']))
{   
    foreach($_POST['food'] as $value)
    {
        $food = $food.htmlspecialchars($value)." ";
    }
}

else {
    $food = "Nothing was selected";
}

echo "<br>"; 
echo "Name: ", $name;
echo "<br>"; 
echo "<br>"; 
echo "Email: ", $email;
echo "<br>"; 
echo "<br>"; 
echo "Phone: ", $phone;
echo "<br>"; 
echo "<br>"; 
echo "Gender: ", $gender;
echo "<br>"; 
echo "Here are the food(s) that you think should be in a chocolate bar: <br>";
echo $food;
echo "<br>";

echo "<br>"; 

echo "You think that ", $better, " candy is better.<br><br>";


echo "Comments you made (If nothing shows then you made no comments): <br>", $comment;

$sql = "insert into user (userName, userEmail, userPhone, userGender, userFoodChoices, userFoodBetter, userComments) values ('$name','$email','$phone', '$gender', '$food', '$better', '$comment')";

if($conn ->query($sql))
{
    echo "<br>";
    echo "<br>";
    echo "New Record Added";
}



?>