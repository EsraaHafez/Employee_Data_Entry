<?php

include('conn.php');
$id = $_GET['ID_edit'] ;

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$addr = $_POST['addr'];
$age = $_POST['age'];
$Gender = $_POST['Gender'];


mysqli_query($conn , "update `users_emp` set first_name = '$first_name' ,   last_name = '$last_name' ,
     addr =  '$addr' , age = '$age' , Gender = '$Gender' where ID = '$id'  ");

header ('Location:index.php') ;  


?>