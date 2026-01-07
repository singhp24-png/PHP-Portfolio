<!DOCTYPE html>
<!-- Author: P Singh, Last Updated 5/9/2023 -->
<?php include('Inc/nav.php')?>
<?php include('Inc/head.php')?>
<?php 
unset($_SESSION['login']);
header("Location: index.php");
?>