<?php
  
   include('conn.php');
   $id = $_GET['ID_edit'] ;
   $query = mysqli_query($conn , "select * from `users_emp` where ID = '$id' ") ;
   $row = mysqli_fetch_array($query) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Edit Data</title>
</head>
<style>


body{

/* background: Maroon; */
background-image: url('paper-1074131_1280.jpg');
/* background-image: url('concept-5183469_1280.jpg'); */

}

.container {
  margin-top:77px;
  margin-left:460px;
  top:99px;
   
}
</style>

<body>
   <div class="container">
   <div class="mb-3 row">
   <div class="col-sm-4">
    

<script type="text/javascript">
function Confirm(form){
alert("Record updated successfully!"); 
form.submit();
}
</script>

     <form name="form"  method="POST" action="update.php?ID_edit=<?php echo $id;  ?>">
     
     <label class="col-sm-2 col-form-label"> First_Name </label>
     <input  class="form-control" type="text" name="first_name"  required value="<?php echo $row ['first_name']  ?>" >

     <label class="col-sm-2 col-form-label"> Last_Name </label>
     <input class="form-control" type="text" name="last_name" id="" required value="<?php echo $row ['last_name']  ?>">


     <label class="col-sm-2 col-form-label"> Address </label>
     <input class="form-control" type="text" name="addr" id="" required value="<?php echo $row ['addr']  ?>">

     <label class="col-sm-2 col-form-label"> Age </label>
     <input class="form-control" type="number" name="age" id="" required value="<?php echo $row ['age']  ?>">

     <br> 
     <select class="form-select form-control" name="Gender" required value="<?php echo $row ['Gender']  ?>">

          <option>male</option>
          <option>female</option>

 
     </select>
      <br><br>
<!-- 
     <input type="submit" style="margin-left:92px; "
        class="btn btn-outline-danger btn-lg" value="Edit"  name="Edit"> -->


        <button type="submit" style="margin-left:99px; width: 140px; height:60px; "
        class="btn btn-outline-danger btn-lg"  name="Edit" value="Edit" onClick="Confirm(this.form)">
        Edit</button>


     </form>

   </div>
   </div>
   </div>
</body>
</html>