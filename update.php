<?php

include "connection.php";


 
    $id = $_POST['id'];
 
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
$update_query= "UPDATE signup set firstname='$Firstname',lastname ='$Lastname', gender='$Gender'  Where id ='$id'";
// $update_query= "UPDATE signup set firstname='$Firstname',lastname ='$Lastname', username='$Username', 
//  mail ='$Email' ,country='$Country' ,gender='$Gender',phone= '$phone',dob='$dob',
//  password= '$Password',retypepassword= '$Confirmpassword' Where id ='$id'";

$result = mysqli_query($connection,$update_query);

if($result)
{
    echo 'Data has been updated successfully';
}else{
    echo 'Update faiiled!!';
}
header('Location:register.php');