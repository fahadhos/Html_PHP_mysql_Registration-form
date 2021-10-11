 <?php
 session_start();
 
 ?>
 <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>  -->
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration</title>
     <link rel="icon" href="Images/logo.png" type="image/x-icon">


     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="js/bootstrap-datepicker.min.js"></script>
    
     <link rel="stylesheet" type="text/css"media="screen"href="css/date/bootstrap-datepicker.min.cs">
 
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
     <!-- <link href="css/bootstrap-utilities.min.css" rel="stylesheet"> -->
     <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->

     <!-- <script src="js/jquery-1.10.2.js"></script> -->
     <!-- <script src="js/jquery-ui.js"></script> -->
     <link rel="stylesheet" type="text/css" media="screen" href="css/login.css">
     <link rel="stylesheet" type="text/css" href="css/navbar.css">
     <!-- <link rel="stylesheet"type="text/css" href="css/style.css"> -->
 </head>

 <style>

 </style>
<nav class="navbar   navbar-expand-md navbar-dark bg-danger " >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Education</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="display.php">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="print.php">Print</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul> -->
      <form class="navbar-form navbar-left ">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Signup/Signin</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 <!-- <body style="background-image:url('images/form.jpg')"> -->

 <body>

     <div class="card" id="particles-js">
<script type="text/javascript" src="js/particles.js"></script>
 <script type="text/javascript" src="js/app.js"></script>
         <div class="Container">
             <form id="formfill" action=" " method="POST">

                 <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>

                 <div class="input-group ">
                     <input type="text" placeholder="Firstname" name="firstname" required>
                 </div>

                 <div class="input-group  ">
                     <input type="text" placeholder="Lastname" name="lastname" required>
                 </div>

                 <div class="input-group">
                     <input type="text" placeholder="Username" name="username" required>


                 </div>
                 <div class="input-group">
                     <input type="email" placeholder="Email" name="mail" required>
                 </div>
                 <div class="input-group">
                     <input type="tel" placeholder="Phone Number" name="phone" required>
                 </div>
                 <div class="input-group  ">
                     <input class="datepicker" data-date-format="mm/dd/yyyy" data-provide="datepicker" name="dob" id="dob" type="" placeholder="Enter Date of Birth" required>
                 </div>
                 <div class="input-group">
                     <select   name="gender" id="gender" required type="">
                         <option    disabled selected required value="">Choose Your Gender</option>
                         <option  value="male">Male</option>
                         <option  value="female"> Female</option>
                         <option   value="other">Other</option>
                     </select>
                 </div>
                 <div class="input-group">
                     <select   name="country" id="country" required type="">
                         <option disabled selected required value="">Select Your Country</option>
                         <option  value="united states">United States</option>
                         <option   value="united kingdom">United Kingdom</option>
                         <option   value="bangladesh">Bangladesh</option>
                         <option   value="india">India</option>
                        
                     </select>
                 </div>
                 <div class="input-group">
                     <input type="password" placeholder="Password" name="password" required>
                 </div>
                 <div class="input-group">
                     <input type="password" placeholder="Confirm Password" name="retypepassword" required>
                 </div>

                 <div class="input">
                     <label><input type="checkbox" name="check" id="check" class="check" required>
                         By clicking You are accepting our <a href="#"> terms & conditions</a></label>

                 </div>

                 <div class="input-group">

                     <button name="submit" id="btn" class="btn">Register</button>
                 </div>
                 <br> </br><br></br>

                 <?php
                    //  echo '<pre>'; 
                    include("connection.php");
                    if (isset($_POST['submit'])) {

                        $Firstname = $_POST['firstname'];
                        $Lastname = $_POST['lastname'];
                        $Username = $_POST['username'];

                        $Email = $_POST['mail'];
                        $Country = $_POST['country'];
                        $Gender = $_POST['gender'];
                        $phone = $_POST['phone'];
                        $dob = $_POST['dob'];
                        $Password = $_POST['password'];
                        $Confirmpassword = $_POST['retypepassword'];
                        $Checkbox = $_POST['check'];
                        //? >
                        //print_r($connection);

                        $insert_query = "INSERT INTO signup(firstname, lastname , username, mail,country,gender,phone,dob,password,retypepassword) values('$Firstname','$Lastname','$Username','$Email', '$Country','$Gender','$phone','$dob','$Password','$Confirmpassword')";
                        $result = mysqli_query($connection, $insert_query);

                        if ($result) {
                            echo "data has been inserted successfully!";
                        } else {
                            echo "data insertation failed!";
                        }

                    ?><?php
                        //< ? php

                    }
                    // $select_query = "SELECT * FROM signup";
                    // $result = mysqli_query($connection, $select_query);
                    // $serial = 1;
    ?>

             </form>
         </div>
         <!-- end of   Registration form code  -->

     </div>

     <!-- <div class="card" style="left:10%; position:absolute; margin-top:60%;height:40% ;width: 990px; display: flex;
      box-shadow: 1px 1px 1px 2px ">


         <table class="table table-bordered table-hover" style="width:40% ; background-color:#17dab7">
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
                 <td>Retype Password: </td> -->
                 <!-- <td>Checkbox: </td> -->
                 <!-- <td>Delete</td>
                 <td>Update</td>
                 <td>Print</td>
             </tr>
             < ?php
                while ($row = mysqli_fetch_array($result)) {
                    //  echo '<pre>';
                    //  print_r($row);
                ?>

                 <tr>
                     <td>< ?php echo $serial; ?></td>
                     <td> < ?php echo $row['firstname'] ?></td>
                     <td> < ?php echo $row['lastname'] ?></td>
                     <td> < ?php echo $row['username'] ?></td>
                     <td> < ?php echo $row['mail'] ?></td>
                     <td> < ?php echo $row['country'] ?></td>
                     <td> < ?php echo $row['gender'] ?></td>
                     <td> < ?php echo $row['phone'] ?></td>
                     <td> < ?php echo $row['dob'] ?></td>
                     <td> < ?php echo md5($row['password']) ?></td>
                     <td> < ?php echo md5($row['retypepassword']) ?></td> -->
                     <!-- <td> < ?php echo $row['check'] ?></td> -->
                     <!-- <td><a onclick="confirm('Do you really want to Remove your data?')" class="btn btn-danger" href='delete.php?id=<?php echo $row['id'] ?>' style="text-decoration: none;"><i class="fa fa-trash"></i> Delete</a></td>

                     <td><a class="btn btn-primary" data-toggle="modal" data-target="#editModal_<?php echo $row['id'] ?>" style="text-decoration: none;">
                             <i class="fa fa-edit"></i> Update</a></td>

                     <td><a onclick="confirm('Do you wish to Print your data?')" class="btn btn-warning" href="print.php?id=<?php echo $row['id'] ?>" style="text-decoration: none;"><i class="fa fa-print"></i> Print</a></td> -->

                     <!-- Button trigger modal -->
                     <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->
                     <!-- Modal -->
                     <!-- <div class="modal fade" id="editModal_< ?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                         < ?php
                                            include('connection.php'); /*Database name*/

                                            $id = $row['id'];
                                            $select_query = "SELECT * FROM signup where id='$id'";
                                            $result_edit = mysqli_query($connection, $select_query);
                                            $result_edit_row = mysqli_fetch_row($result_edit);

                                            ?>
                                         <input id="id" type="hidden" name="id" value="< ?php echo $result_edit_row[0] ?>">
                                         <div class="form-group">
                                             <input type="text" placeholder="Firstname" value="< ?php echo $result_edit_row[1] ?>" name="firstname">
                                         </div>

                                         <div class="form-group  ">
                                             <input type="text" value="< ?php echo $result_edit_row[2] ?>" placeholder="Lastname" name="lastname">
                                         </div>

                                         <div class="form-group">
                                             <input type="text" placeholder="Username" name="username">

                                         </div>
                                         <div class="form-group">
                                             <input type="email" placeholder="Email" name="mail">
                                         </div>
                                         <div class="form-group">
                                             <input type="tel" placeholder="Phone Number" name="phone">
                                         </div>
                                         <div class="form-group">
                                             <input name="dob" id="dob" type="date" placeholder="Enter Date of Birth">
                                         </div>
                                         <div class="form-group">
                                             <select class="opt-group" name="gender" id="gender" type="">
                                                 <option disabled selected required value="< ?php echo $result_edit_row[3] ?>">Choose Your Gender</option>
                                                 <option   value="male">Male</option>
                                                 <option  value="female"> Female</option>
                                                 <option  value="other">Other</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <select class="opt-group" name="country" id="country">
                                                 <option disabled value="< ?php echo $result_edit_row[3] ?>" selected>Select Your Country</option>
                                                 <option  value="united states">United States</option>
                                                 <option  value="united kingdom">United Kingdom</option>
                                                 <option value="bangladesh">Bangladesh</option>
                                                 <option  value="india">India</option>
                                                 <option   value="viet nam">Viet Nam</option>
                                             </select>
                                         </div> -->
                                         <!-- <div class="form-group">
                 <input type="password" placeholder="Password" name="password"  >
             </div>
             <div class="form-group">
                 <input type="password" placeholder="Confirm Password" name="retypepassword"  >
             </div> -->

                                 <!-- </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     <button name="submit" class="btn btn-primary"><i class="fa fa-save"></i>Save changes</button>
                                 </div> -->

                                 <!-- <div class="input-group"> -->

                                 <!-- <button name="submit" id="btn" class="btn">Register</button>   -->
                                 <!-- </div> -->

                                 <!-- </form>

                             </div>
                         </div>
                     </div>
                 </tr>
             < ?php
                    $serial++;
                }
                // print_r($result); 
                ?>


         </table>
     </div> -->








     <!-- <script>
    jQuery('.container').on('submit',function(e)
    {  jQuery('#btn').val('Loading...');
        jQuery('#btn').attr('disabled',true);
        jQuery.ajax({
            url:'register.php',
            type:'post',
            data: jQuery('.container').serialize(),
            success:function(result){

                jQuery('.container')['0'].reset();
     jQuery('#btn').val('Loading...');
     jQuery('#btn').attr('disabled',false);
          
    }
        });
        e.preventDefault();
    });
    </script> -->
    <script>
    $(function () {
     $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
        // $("#dateOfBirth").datepicker({
        //     appendText: "(yy-mm-dd)",
        //     dateFormat: "yy-mm-dd",
        //     altField: "#datepick-2",
        //     altFormat: "DD, d MM, yy"
        // });
    });
</script>  

     <footer>
         <center>
             <div class="text-muted">
                 <p>


                     © Copyright 2021 FH Limited. &nbsp;&nbsp;

                 </p>
             </div>
         </center>

     </footer>
 </body>


 </html>
 