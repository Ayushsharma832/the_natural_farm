<?php
$connection=mysqli_connect('localhost','root');

mysqli_select_db($connection,"natural_farm");

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$data="INSERT into contact(user_name,email_id,msg) VALUES('$name','$email','$msg')";

mysqli_query($connection,$data);
header('location:contact.html');

?>