<!DOCTYPE html>
<!-- Author: P Singh, Last Updated 5/8/2023 -->
<html>
<?php 

session_start();
  
?>
<style>
p{
    color:red;
}
</style>
<?php include('Inc/head.php')?>
<body>
<?php include('Inc/nav.php')?>
<header class = "center"> <h1>Login</h1></header>
<hr class = "first_hr">
<body>
<form  action = "singh_p_logincheck.php" method = "POST"> 
<br>
<label for = "username">
Username
 <input name = "username"  id = "name" maxlength="30" required>
 </label>
 <label for = "password">
<br><br>Password
 <input name = "password" type = password  id = "password1" maxlength="25" required>
</label>

<?php 
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo '<p class="message"> '.$message.'</p>';
}
?>
<br><br>
<button>Sumbit</button>
<button type="reset">Reset</button>
</form>
<br>
<br>
<a href = "singh_p_register.php"><button>Register</button></a> 

