<!-- 
php
 
 include "Form.php" ;

 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title> مشروع ادخال بيانات الموظفين </title>
</head>
<style>
body{
/* background:   peru; */
background-image: url('paper-1074131_1280.jpg');

}
  .well{
     background: none;
     height: 320px;
  }
/* 
   .table-scroll tbody{
       position: absolute;  
       overflow-y: scroll ;  
       overflow-x: hidden; 
       height: 222px; 
       width: 100%;  


  }   */

  .table-scroll tr{
      width:  103%;
      table-layout: fixed;  
    /* display: inline-table ; */
  }

.table td {
  width: 74px;
  /* background: BurlyWood; */
  
  
}
 
.table   thead   {
   width: 88px; 
   background: DarkGoldenRod;

}  

 
.table  th  {
   width: 44px; 
   padding: 10px;
   background: Cornsilk;
   color:Black;

} 
 
table, td, th {
  /* border: 1px solid; */
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-left: 199px;
  margin-top:77px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}



.b {
  margin: 3px;
  position: absolute;
  top: 80%;
  left: 50%;
  width: 490px;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.navbar {
  overflow: hidden;
  background-color: Tan;
  position: fixed;
  top: 0px;
  width: 100px;
  margin-left:-92px;
}


.navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.navbar a:hover {
  background: black;
  color: DarkGoldenRod;
}
</style>

<div class= "well" >
<div class="container">
<div class="row">
<div class="col-md-7">

<table  class="table table-scroll table-hover table-responsive table-dark">
 
  <thead class="table-dark">
     <tr>
     <th scope="col">ID</th>
     <th scope="col">First_Name</th>
     <th scope="col">Last_Name</th>
     <th scope="col">Address</th>
     <th scope="col">Age</th>
     <th scope="col">Gender</th>
     <th scope="col">Edit</th>
     <th scope="col">Delete</th>
    </tr>  
  </thead> 

<tbody>

<ul class="navbar">
  <li><a href="index.php">Home</a></li>
  <li><a href="Form.php">Form</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="print_pdf.php">Download As PDF</a></li>
</ul>

</tbody>  
 
  <?php
    
    include "conn.php" ;

    $start=0;
    $limit=5;
    $id = 0;
    if(isset($_GET['id'])){

      $id=$_GET['id'];
      $start=($id-1)*$limit;

    }

    $squery = mysqli_query($conn , "select * from `users_emp` order by `ID` limit $start , $limit") ;
    while($row=mysqli_fetch_array($squery)){
  ?>
  <tr>
    <td><?php  echo $row ['ID'] ;    ?></td>
    <td><?php  echo $row ['first_name'] ;    ?></td>
    <td><?php  echo $row ['last_name'] ;    ?></td>
    <td><?php  echo $row ['addr'] ;    ?></td>
    <td><?php  echo $row ['age'] ;    ?></td>
    <td><?php  echo $row ['Gender'] ;    ?></td>

    <td> <a class="btn btn-success" href="edit.php?ID_edit=<?php echo $row['ID'] ?> ">    Edit   </a> </td>
    <td> <a  class="btn btn-danger" onclick='return confirm ("Are you sure you want to Delete?")' href="delete.php?ID_del=<?php echo $row['ID'] ?> ">    delete   </a> </td>

    </tr>

  <?php
    
    }

  ?>

 <nav class="b" aria-label="Another pagination">
 <div class="col-lg-8 col-sm-4 col-md-4">
 <ul class="pagination pagination-lg align-items-center Justify-content-center"> 

 <?php

  $rows=mysqli_num_rows(mysqli_query($conn, "select * from users_emp"));
  $total= ceil($rows/$limit);
  if(isset($id)){
      if($id>1){
         echo "<a href='?id=".($id-1)."' class='page-link'>السابق</a>" ;
      }

    }
  
  for($i=1 ; $i<=$total ; $i++){
     echo "<a class='page-link' href='?id=".$i."'> ".$i." </a>";
  }
   
    if($id!=$total){
       
      echo "<a class='page-link' href='?id=".($id+1)."' class=page-link''>التالي</a>";

    }

?>
 </nav>
 </div>
 </ul>

</table> 

<!-- <a class= "btn btn-outline-warning btn-lg" href="search.php" role="button" >Search</a>


<a href="print_pdf.php" class=" btn btn-outline-success pull-right" role="button">
  <span class="glyphicon glyphicon-print"> PDF </span></a>
 -->
</div>
</div>
</div>
</div>