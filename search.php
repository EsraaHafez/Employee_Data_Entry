<!DOCTYPE html>
<html dir="ltr">
<head>

<title>search</title>
 <link href="bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
</head>
<style>
body{
background-image: url('paper-1074131_1280.jpg');
}

</style>

<script type="text/javascript">
$(function() {
$("#search_file").focus();
	});
</script> 


<div class="container">
 <div class="row">
 <div class="col-lg-12">

 <form method="post" action="">   
<br />
<p style="font-size:18px; margin-left:100px;"> 
<input type="text" autofocus="autofocus" name="search_file" id="search_file" style="width:230px; font-size:18px;" class="textboxclass" /> 

<input type="submit" style="font-size:18px; margin-top:-9px;"
 class="btn btn-dark" name="submit" value="Search"></p> 

</form>

<a href="index.php"><input type="submit" style="font-size:16px; margin-top:10px;"
 class="btn btn-success" name="submit" value="Back to Home"></a>	
<br>
<br>
 <table class="table  table-hover table-responsive  table-dark">
 <thead  class="table-warning">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First_Name</th>
                <th scope="col">Last_Name</th>
                <th scope="col">Address</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
		        </tr>
             

</thead>
<tbody>
<?php
include ('conn.php');

error_reporting(0);
if ($_POST['submit']) {
$search_file = $_POST['search_file'];

$sql=mysqli_query($conn,"select * from `users_emp` where first_name like '%$search_file%'
 or last_name like '%$search_file%'  or age like '%$search_file%' Order by last_name ASC");


			if (empty($search_file)) {
			echo '<script language="javascript">';
			echo 'alert("You Must Fill out the field , Please try again")';
			echo '</script>';
			header( "refresh:2; url=index.php" ); 
			}
			else if (mysqli_num_rows($sql) > 0) 
			{            
			$i = 1;
			while ($row = mysqli_fetch_array($sql)) {
				?>
				<tr>
				<td><?php echo $row ['ID'] ;?></td>
				<td><?php echo $row ['first_name'] ;?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['addr']; ?></td>
				<td><?php echo $row['age']; ?></td>
				<td><?php echo $row['Gender']; ?></td>
</tr>
				<?php
			$i++;
			}
			} 
			else 
			{
			echo '<div class="alert alert-danger" style="width:170px;  height:50px;
			float:left; margin-top:-70px; margin-left:189px; margin-buttom:-10px; "> No Results Found</div>';
			}
			
			?>       


<?php

}

?>


  
</tbody>
 </table>
 
</div>
</div>
</div>
</html>
    