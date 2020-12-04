<?php
   $username="root";
$password="";
$server="localhost";
$db="bank";
    $con=mysqli_connect($server,$username,$password,$db);
    include("connection.php");

    
/*$sql="INSERT INTO customer (id,name,email,balance,account)
VALUES (1, 'Nikhil Sharma','nikhil@gmail.com',500000,'1231531'),
(2, 'Sonali','sonali@gmail.com',800000,'5867657'),
(3, 'Shiva Singh','shiva@gmail.com',652110,'5453453'),
(4, 'Tarun Gupta','tarun@gmail.com',892800,'5867657'),
(5, 'Yatendra Singh','yatendra@gmail.com',762100,'7973126'),
(6, 'Naman Rawat','naman@gmail.com',216970,'58676571'),
(7, 'Neha Sharma','neha@gmail.com',345000,'7212886'),
(8, 'Shiva','shiva@gmail.com',876540,'6812690'),
(9, 'Pakhi Gupta','pakhi@gmail.com',670000,'7927919'),
(10, 'Shaan Saini','shaan@gmail.com',232010,'3739123')
";*/

    if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>