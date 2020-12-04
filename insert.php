<?php
include("connection.php");
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $amount=$_POST['amount'];
  $id=$_POST['id'];
  $insertquery= "insert into add_customer(Name, E-mail,Phone no., Amount,ID) values ('$name','$email','$phone','$amount','$id')";
  mysqli_query($con,$insertquery);
}
?>