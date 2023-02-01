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
$contact_no=$_POST['contact_no'];
$email=$_POST['email'];
$address=$_POST['address'];

$data="INSERT into seller_info(user_name,contact_no,email_id,address) VALUES('$name','$contact_no','$email','$address')";

mysqli_query($connection,$data);
header('location:sellmenu/sellmenu.html');

?>