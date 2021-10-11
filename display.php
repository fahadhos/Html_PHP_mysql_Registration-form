
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="Images/logo.png" type="image/x-icon">

     
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link href="css/bootstrap-utilities.min.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->

  <!-- <script src="js/jquery-1.10.2.js"></script> -->
  <!-- <script src="js/jquery-ui.js"></script> -->
  <link rel="stylesheet" href="css/login.css">
  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
  
</head>
<body>
    <div class="card" style="">
   
  
             <table class="table bg-success table-responsive-md table-bordered table-hover">
                 <tr>
                     <td>SL.</td>
                     <td>Firstname: </td>
                     <td>Lastname: </td>
                     <td>Username: </td>
                     <td>Email: </td>
                     <td>Country: </td>
                     <td>Gender: </td>
                     <td>Phone: </td>
                     <td>Date of birth: </td>
                     <td>Password: </td>
                     <td>Retype Password: </td>
                     <!-- <td>Checkbox: </td> -->
                     <td>Delete</td>
                     <td>Update</td><td>Print</td>
                 </tr>
                 <?php
//  session_start();  
 
?>
                 <?php 
                 include "connection.php";
                 $select_query = "SELECT * FROM signup";
                 $result = mysqli_query($connection, $select_query);
                 $serial = 1;
                  $total=mysqli_num_rows($result);
                  //echo "$total";
                  $res=mysqli_fetch_assoc($result);
                
                 // echo $res['firstname'];
                 if($total!=0)
                 {
                     echo "Table has records";
                 }
                 else 
                 {echo "no records found";}
                //  $_SESSION['test']='test';
                    while ($row = mysqli_fetch_array($result)) {
                        //  echo '<pre>';
                        //  print_r($row);
                    ?>

                     <tr>
                         <td><?php echo $serial; ?></td>
                         <td> <?php echo $row['firstname'] ?></td>
                         <td> <?php echo $row ['lastname']?></td>
                         <td> <?php echo $row ['username'] ?></td>
                         <td> <?php echo $row ['mail'] ?></td>
                         <td> <?php echo $row ['country'] ?></td>
                         <td> <?php echo $row ['gender'] ?></td>
                         <td> <?php echo $row ['phone']?></td>
                         <td> <?php echo $row ['dob'] ?></td>
                         <td> <?php echo md5($row['password']) ?></td>
                         <td> <?php echo md5($row['retypepassword']) ?></td>
                         <!-- <td> < ?php echo $row['check'] ?></td> -->
                         <td><a onclick ="confirm('Do you really want to Remove your data?')"
                         class="btn btn-danger" href='delete.php?id=<?php echo $row['id']?>' style="text-decoration: none;" ><i   class="fa fa-trash"></i> Delete</a></td>
                         
                         <td><a  class="btn btn-primary" data-toggle="modal" data-target ="#editModal_<?php echo $row['id']?>" style="text-decoration: none;" >
                         <i class="fa fa-edit"></i> Update</a></td>
                         
                         <td><a onclick ="confirm('Do you wish to Print your data?')"
                         class="btn btn-warning" href="print.php?id=<?php echo $row['id']?>" style="text-decoration: none;" ><i   class="fa fa-print"></i> Print</a></td>
                 
  <!-- Button trigger modal -->
                 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->
        <!-- Modal -->
  <div class="modal fade" id="editModal_<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Your Data Here!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="update.php" method="post" enctype="multipart/form-data">
       <?php
   include ('connection.php'); /*Database name*/

   $id=$row['id'];
   $select_query="SELECT * FROM signup where id='$id'";
   $result_edit=mysqli_query($connection,$select_query);
   $result_edit_row =mysqli_fetch_row($result_edit);

       ?>
       <input id="id"type="hidden" name="id" value ="<?php echo $result_edit_row[0]?>">
       <div class="form-group">
                 <input type="text" placeholder="Firstname"value="<?php echo $result_edit_row[1]?>"  name="firstname"  >
             </div>

             <div class="form-group  ">
                 <input type="text"  value="<?php echo $result_edit_row[2]?>" placeholder="Lastname" name="lastname"  >
             </div>

             <div class="form-group">
                 <input type="text"  placeholder="Username" name="username"  >

             </div>
             <div class="form-group">
                 <input type="email" placeholder="Email" name="mail"   >
             </div>
             <div class="form-group">
                 <input type="tel" placeholder="Phone Number" name="phone"  >
             </div>
             <div class="form-group">
                 <input  name="dob" id="dob" type="date" placeholder="Enter Date of Birth"  >
             </div>
             <div class="form-group">
                 <select   class="opt-group" name="gender" id="gender"   type="">
                     <option disabled selected required value="<?php echo $result_edit_row[3]?>">Choose Your Gender</option>
                     <option style="border-color: #a29bfe; background:#17dab7;   border-color: #a29bfe;" value="male">Male</option>
                     <option style="background:#17dab7" value="female"> Female</option>
                     <option style="background:#17dab7" value="other">Other</option>
                 </select>
             </div>
             <div class="form-group">
                 <select  class="opt-group" name="country" id="country">
                     <option disabled value="<?php echo $result_edit_row[3]?>"   selected>Select Your Country</option>
                     <option style="background:#17dab7" value="united states">United States</option>
                     <option style="background:#17dab7" value="united kingdom">United Kingdom</option>
                     <option style="background:#17dab7" value="bangladesh">Bangladesh</option>
                     <option style="background:#17dab7" value="viet nam">India</option>
                     <option style="background:#17dab7" value="viet nam">Viet Nam</option>
                 </select>
             </div>
             <!-- <div class="form-group">
                 <input type="password" placeholder="Password" name="password"  >
             </div>
             <div class="form-group">
                 <input type="password" placeholder="Confirm Password" name="retypepassword"  >
             </div> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button   name="submit" class="btn btn-primary"><i class="fa fa-save"></i>Save changes</button>
      </div>

             <!-- <div class="input-group"> -->

                 <!-- <button name="submit" id="btn" class="btn">Register</button>   -->
            <!-- </div> -->  

       </form>
     
    </div>
  </div>
</div>  
         </tr>
                <?php
                $serial++;
                   }
                    // print_r($result); 
                      ?>

                  
              </table>
      </div>


</body>
</html>
