<!DOCTYPE html>
<!-- Author: P Singh, Last Updated 5/8/2023 -->
<html>
<style>

p{
    color:red;
}
</style>
<?php include('Inc/head.php')?>
<body>
<?php include('Inc/nav.php')?>
<header class = "center"> <h1>Register</h1></header>
<hr class = "first_hr">
<body>
<form  action = "singh_p_checkregistered.php" method = "POST"> 
<br>
<label for = "username">
Username
 <input name = "username"  id = "name" maxlength="30" required>
 </label>
 <label for = "password1">
<br><br>Password
 <input name = "password1" type = password  id = "password1" maxlength="25" required>
</label>
 <label for = "password2">
<br><br>Retype your password
 <input name = "password2" type = password   id = "password2" maxlength="25" required>
</label>
<br><br>
<?php 

if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo '<p class="message"> '.$message.'</p>';
}

?>
<button>Submit</button>
<button type="reset">Reset</button>
</form>
<br>
