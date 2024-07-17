 
 <?php
   include "index.html" ;
 ?>
 
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
 

  <?php
    
    }

  ?>

  
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
 