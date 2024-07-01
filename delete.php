<?php

  $id = $_GET['ID_del'];
  include('conn.php');
  mysqli_query($conn , "delete from `users_emp` where ID = '$id' ");

  header('Location:index.php');

  



?>