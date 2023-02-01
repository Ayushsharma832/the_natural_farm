<?php

$name=$_POST['name'];
$passwd=$_POST['passwd'];
$con = mysqli_connect ('localhost','root');
mysqli_select_db($con, 'natural_farm');
    $q = "Select* from registration where user_name = '$name' && passwd='$passwd'";
    $result=mysqli_query($con,$q);
    $num = mysqli_num_rows($result);

    if ($num==1)
    {
        $_session['username'] = $name ;
        header('location:login.html');
      }
      else{
          echo ("Error while logging in");
      }
?>