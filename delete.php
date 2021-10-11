<link href="css/bootstrap.min.css" rel="stylesheet">
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
   $id =$_REQUEST['id'];
include ("connection.php");
 
  
$delete_query ="DELETE FROM signup WHERE id='$id'";?>
<?php if(mysqli_query($connection,$delete_query))
{
  ?>
   <div class="alert alert-danger" role="alert">
  Data has been deleted successfully <a href="#" class ="alert-link"></a> 
</div>
 
<?php
}
else {echo "Failed!!!";}
header('Location:register.php');
 print_r($id);?>
</body>
</html>