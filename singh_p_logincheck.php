<!DOCTYPE html>
<!-- Author: P Singh, Last Updated 5/8/2023 -->
<html>
<?php 
session_start();
?>
<?php include('Inc/head.php')?>
<body>
<?php include('Inc/nav.php');

require('singh_p_opendb.php');


$username = htmlspecialchars( $_POST['username']);
$password =  htmlspecialchars( $_POST['password']);

$result = $conn -> query("SELECT * FROM register WHERE registerUsername = '$username' AND registerPassword = md5($password)");


if ($result->num_rows != 0) {
    $row = mysqli_fetch_assoc($result);
       $_SESSION["login"] = $row['registerID']; 
       header("Location: index.php");
       
}

else {
    header("Location: singh_p_login.php?message= Invalid username or password!");
}
?>

