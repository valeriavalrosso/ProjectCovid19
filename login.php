<?php

include 'conmysql.php';

$name=$_POST['name'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$checkbox=$_POST['checkbox'];

$result = mysqli_query($con, "SELECT * FROM utenti WHERE MAIL='$name' AND PASSWORD='$password'");


if($result->fetch_assoc()> 0){
   header('Location: myaccount.html');
   exit;
}
else{
   header('Location: index.html?login=false');
   exit;
}


?>