<?php
 
 include "conn.php" ;
 
  if($_POST['add']){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $addr = $_POST['addr'];
  $age = $_POST['age'];
  $Gender = $_POST['Gender'];
    
   mysqli_query($conn , "insert into `users_emp`(`first_name` , `last_name` ,  `addr` , `age` , `Gender`)
    values('$first_name' , '$last_name' , '$addr' ,'$age' , '$Gender')");

  /*   header ('Location:Form.php') ;  
    echo "New record created successfully";
     */


   echo  "<script>
    alert('inserted successfully');
    top.location.href = 'Form.php'; //the page to redirect
   </script>";



  
/*     echo "<script>
    
    alert('New record created successfully'); 
    window.location.href='Form.php';

    </script>"; */
 


   }
   
   // insert data 
   /* $query = "insert into `users_emp`(`first_name` , `last_name` ,  `addr` , `age` , `Gender`)
    values( '$first_name' , '$last_name' , '$addr' ,'$age' , '$Gender' )";
            

   if (mysqli_query($conn , $query)) {
      
       //echo "Thank You! , Your information has been saved" ;
        header("Location: index.php");
      exit;

   } else {
    
      echo $query;
      echo mysqli_error($conn);
   }
 */

 ?>