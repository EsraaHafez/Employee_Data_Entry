<?php
$Hostname="localhost";
$Username="root";
$Password="";
$db="employee";

$conn = mysqli_connect($Hostname,$Username,$Password,$db);

//اختبار الاتصال

if($conn){
  //echo "bb" ;
}

else{

    die("No".mysqli_connect_error);
}



?>