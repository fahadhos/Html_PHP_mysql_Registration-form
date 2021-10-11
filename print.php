<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data</title>
    <link rel="icon" href="Images/logo.png" type="image/x-icon">

     
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="print.css" media="print">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Student Data</h2>
            <table class="table table-bordered table-hover print">
                <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Email</th>
<th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
 $sn=1;
 $user_query="SELECT * From signup ";
 $result=mysqli_query($connection,$user_query);
 while($userdata=mysqli_fetch_assoc($result))
 { 
      ?>
    <tr>
         <td><?php echo $sn; ?></td>
         <td><?php echo $userdata['firstname']; ?></td>
         <td><?php echo $userdata['lastname']; ?></td>
         <td><?php echo $userdata['username']; ?></td>
         <td><?php echo $userdata['mail']; ?></td>
         <td><?php echo $userdata['phone']; ?></td>
        </tr>
                <?php
                $sn++;
                }
                ?>
                </tbody>
            </table>
            <div class="text-left">
            <!-- <a onclick ="window.print();" class="btn btn-warning" id="print-btn" -->
            <!-- ><i class="fa fa-print"></i> Print</a> -->
                <button onclick="window.print();"class="btn btn-warning"id="print-btn"><i class="fa fa-print"></i>Print</button>
            </div>
        </div>
    </div>
</div>  


</body>
</html>