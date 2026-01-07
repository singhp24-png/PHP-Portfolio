<!DOCTYPE html>
<!-- Author: P Singh, Last Updated 5/8/2023 -->
<html>
<?php include('Inc/head.php')?>
<body>
<?php include('Inc/nav.php');

require('singh_p_opendb.php');


$username = htmlspecialchars( $_POST['username']);
$password =  htmlspecialchars( $_POST['password1']);
$checkPassword = htmlspecialchars( $_POST['password2']);


$sql = "SELECT registerUsername FROM `register` WHERE registerUsername = ?";
$stmt = $conn ->prepare($sql);
$stmt -> bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if(strcmp(htmlspecialchars( $_POST['password2']), htmlspecialchars( $_POST['password1'])) != 0)
{
    header("Location: singh_p_register.php?message= Password is not the same!");
}

else if ($result->num_rows != 0) {
    
    header("Location: singh_p_register.php?message= Username already exists!");
}

else 
{
    $sql = "INSERT INTO `register` (registerUsername, registerPassword, registerRole) VALUES ( ?, ?, 0)";
    $stmt = $conn ->prepare($sql);
    $stmt -> bind_param("ss", $username, md5($password));
    $stmt->execute();
    echo "Account Created!"; 
}
?>

