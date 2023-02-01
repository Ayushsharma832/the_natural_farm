<?php
$connection=mysqli_connect('localhost','root');

if ($connection){
    echo "Connction Established";
}
else{
    echo "ERROR Connection Failed!!!!";
}

mysqli_select_db($connection,"natural_farm");

$name=$_POST['name'];
$email=$_POST['email'];
$passwd=$_POST['passwd'];

$data="INSERT into registration(user_name,email_id,passwd) VALUES('$name','$email','$passwd')";

mysqli_query($connection,$data);
header('location:re_dir.html');

?>