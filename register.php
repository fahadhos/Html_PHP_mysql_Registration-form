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

     <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
     <!-- <link href="css/bootstrap-utilities.min.css" rel="stylesheet"> -->
     <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->

     <!-- <script src="js/jquery-1.10.2.js"></script> -->
     <!-- <script src="js/jquery-ui.js"></script> -->
     <link rel="stylesheet" href="css/login.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
 </head>
 <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: serif;
}

body { 
    width: 100%;
    min-height: 100vh;
    
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container { 
    width: 500px;
    min-height: 400px;
    /* height: 700px; */
    background:#17dab7;
     /* #17dab7; */
    opacity: 99%;
    border-radius: 5px;
    box-shadow: 1px 0 40px #17dab7;
    padding: 40px 30px;
   
    display: inline-block;
}
.boxx { 
    width: 500%;
    /* min-height: 400px; */
    height: 60%;
    background: #17dab7;
    opacity: 99%;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
   left: -10%;
   right: 30%;
    display: inline-block;
}
.container .login-text {
  color: rgb(0, 0, 0);
  font-weight: 500;
  font-size: 1.1rem;
  text-align: center;
  margin-bottom: 20px;
  display: block;
  text-transform: capitalize;
}

 
 ::placeholder{
  color: white;
  opacity: 1; 
}
 .container .input-group  input   {
    width: 100%;
    height: 100%;
    border: 2px solid #f5efef;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}
.container .input-group  {
    
    height: 50px;
    margin-bottom: 25px;
    
    width: 200px;
     display: inline-block;  
    text-align: right; 
}
 .container .input-group .opt-group option  {
    width: 100%;
    height: 100%;
    border: 3px solid #ece5e5;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background:#17dab7; 
    /* transparent; */
    outline: none;
    transition: .3s;


   /* border: 2px solid #ece5e5;color: white; */
}
 /* for designing option bar */
 .container .opt-group select 
 { 
      width: 120px;
       height: 30px;
    border: 1px solid #999;
    font-size: 18px;
    color: #1c87c9;
    background-color: #eee;
    border-radius: 5px;
    box-shadow: 4px 4px #ccc;
    /* height: 50px;
    margin-bottom: 25px;
    color :white;
    background: green;
    width: 200px;
     display: inline-block;  
    text-align: right;   */
    /* border-radius: 30px;
  display: block;
  width: 100%;
  padding: 15px 20px;
  outline: none;
   background-color:transparent ; */
 
 }
 /* .container .opt-group  select option :focus {
    box-shadow: 0 0 3pt 2pt #719ECE;    
} */
  /* textfield border color */
.container .input-group   input:focus ,   .container  .input-group input:valid  {
    border-color: #a29bfe;
}
 .input label input{
  
    color:royalblue;
  
} 
.opt-group option{
  
  color:royalblue;

} 
.container .input-group .opt-group select:focus-visible option:focus,   .container  .input-group .opt-group select:valid  {
    border-color: #a29bfe;
}

 /* for button */
.container   .input-group .btn {
    display: block;
    width: 100%;
    left:55%;
   top:40%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #14df35;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}

.container  .input-group .btn:hover {
    transform: translateY(-5px);
    background: #2ddbd3;
}

.login-register-text {
    color: rgb(10, 10, 10);
    font-weight: 600;
}

.login-register-text a {
    text-decoration: none;
    color: #6c5ce7;
}

@media (max-width: 430px) {
    .container {
        width: 300px;
    }
    
}

 </style>

 <body style="background-image:url('images/form.jpg')">

     <div class="container" style="  box-shadow: 1px 1px 1px 2px ">
         
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
             <div class="input-group">
                 <input style=" color:white;" name="dob" id="dob" type="date" placeholder="Enter Date of Birth" required>
             </div>
             <div class="input-group">
                 <select style="   border-radius: 30px;
   
                       transition: .3s; padding: 15px 20px; background: #17dab7;color :white" class="opt-group" name="gender" id="gender" required type="">
                     <option disabled selected required value="">Choose Your Gender</option>
                     <option style="border-color: #a29bfe; background:#17dab7;   border-color: #a29bfe;" value="male">Male</option>
                     <option style="background:#17dab7" value="female"> Female</option>
                     <option style="background:#17dab7" value="other">Other</option>
                 </select>
             </div>
             <div class="input-group">
                 <select style=" border-radius: 30px;   
                  transition: .3s; padding: 15px 20px; background: #17dab7;color :white" class="opt-group" name="country" id="country">
                     <option disabled value="" required selected>Select Your Country</option>
                     <option style="background:#17dab7" value="united states">United States</option>
                     <option style="background:#17dab7" value="united kingdom">United Kingdom</option>
                     <option style="background:#17dab7" value="bangladesh">Bangladesh</option>
                     <option style="background:#17dab7" value="viet nam">Viet Nam</option>
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
             echo '<pre>'; 
               include ("connection.php");  
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
             $select_query = "SELECT * FROM signup";
              $result = mysqli_query($connection, $select_query);
                $serial = 1;
          ?>

        
                 </form>
     </div>  
   
     <div class="card" style="left:10%; position:absolute; margin-top:60%;height:40% ;width: 990px; display: flex;
      box-shadow: 1px 1px 1px 2px ">
   
  
             <table class="table table-bordered table-hover" style="width:40% ;color:white;background-color:#17dab7">
                 <tr>
                     <!-- <td>SL.</td> -->
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
                    while ($row = mysqli_fetch_array($result)) {
                        //  echo '<pre>';
                        //  print_r($row);
                    ?>

                     <tr>
                         <!-- <td>< ?php echo $row['1']] ?></td> -->
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
            <!-- </div> --> -->

       </form>
     
    </div>
  </div>
</div>  
         </tr>
                <?php
                   }
                    // print_r($result); 
                      ?>

                  
              </table>
      </div>








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
    <!-- <script>
    $(function () {
        $("#dateOfBirth").datepicker({
            appendText: "(yy-mm-dd)",
            dateFormat: "yy-mm-dd",
            altField: "#datepick-2",
            altFormat: "DD, d MM, yy"
        });
    });
</script> -->
 
 <footer ><center>
     <div class="text-muted">
      <h6>
          <span>
            " 
			    
                © Copyright 2021 FH Limited. &nbsp;&nbsp;
               
            "  
          </span>
      </h6>   
     </div>
 </center>
     
 </footer>
</body>


 </html>