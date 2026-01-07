<?php
$conn = mysqli_connect('localhost','student','student','psingh');

if (!$conn)
{
    echo 'Connection error : ' . mysqli_connect_error();
}

?>