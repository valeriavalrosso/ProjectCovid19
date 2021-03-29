<?php

include 'conmysql.php';

$name=$_POST['name'];
$surname=$_POST['surname'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirm password'];
$checkbox=$_POST['checkbox'];

$result = mysqli_query($con, "SELECT * FROM utenti WHERE MAIL='$email' AND PASSWORD='$password'");


if($result->fetch_assoc()> 0){
   header('Location: index.html?login=exists');
   exit;
}
else{
   mysqli_query($con, "INSERT INTO utenti (MAIL,PASSWORD) VALUES ('$email','$password')");
   header('Location: myaccount.html');
   exit;
}






?>