<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title> مشروع ادخال بيانات الموظفين </title>
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
    
 
     <form   method="POST" action="add.php">
       
     <label class="col-sm-2 col-form-label"> First_Name </label>
     <input  class="form-control" type="text" name="first_name"  required>

     <label class="col-sm-2 col-form-label"> Last_Name </label>
     <input class="form-control" type="text" name="last_name" id="" required>


     <label class="col-sm-2 col-form-label"> Address </label>
     <input class="form-control" type="text" name="addr" id="" required>

     <label class="col-sm-2 col-form-label"> Age </label>
     <input class="form-control" type="number" name="age" id="" required>

     <br> 
     <select class="form-select form-control" name="Gender" required>

          <option>male</option>
          <option>female</option>

 
     </select>
      <br><br>

     <button type="submit" style="margin-left:92px; "
        class="btn btn-outline-danger btn-lg"  name="add" value="add">
              Submit</button>

        <br><br>

      <a href="index.php" style="font-size:16px; margin-left:92px; width: 160px;"
         class="btn btn-outline-success btn-lg">Home</a>

     <br><br>

<!--      <a class= "btn btn-outline-warning btn-lg" href="search.php" role="button" >Search</a>


     <a href="print_pdf.php" class=" btn btn-outline-success pull-right" role="button">
       <span class="glyphicon glyphicon-print"> PDF </span></a>
 -->

     </form>

   </div>
   </div>
   </div>


</body>
</html>