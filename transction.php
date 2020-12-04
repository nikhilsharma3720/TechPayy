<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Basic Banking System</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
    <style>
    .pay {
  background-color: grey;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
        cursor:pointer;
        border-radius: 6px;
}

.pay:hover {opacity: 0.6}
    #trans_form{
    margin-left: 20px;
    margin-right: 400px;
        
        border-radius: 8px;
        padding: 5px;}
    #trans_form{
        margin-left:400px;}</style>
   
</head>
    <body background="4685.jpg">

   
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="./index.php">
          <p id="main_heading">Sparks Foundation</p>
        </a>
       <a class="header_link" id="trans" href="index.php">Home</a>
      </nav>
        
        <h1 class="heading" style="margin-top:30px;">Transfer Money</h1>
            <br>
            
            
         <?php
     include("connection.php");
      $selectquery="select * from personal";
      $query=mysqli_query($con,$selectquery);
      $nums=mysqli_num_rows($query);
      while($fetch=mysqli_fetch_array($query)){
     echo "<tr>";
$txt="Current Balance : ";
          $txt="<h2 style='color:black;margin-left:450px;'>".$txt."</h2";
          $txt2="<h2 style='color:green;margin-left:420px;'>" . $fetch['Balance'] . "</h2>";
          $c=$txt.$txt2;
          echo $c;
echo "</tr>";
      }
      mysqli_close($con);
   
    ?><div>
        <div id="trans_form">
      <form action="" method="post">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Name</h5></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name">
    </div>
  </div>
          
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>Email</h5></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="inputPassword3" placeholder="Email">
    </div>
  </div>
          <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Amount</h5></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="amount" placeholder="Amount">
    </div>
  </div>
  

  <!--<a href="" class="btn btn-primary btn-lg active" name="submit" role="button" aria-pressed="true">Pay</a>-->
<button class="pay" name="submit">Pay</button>
<a href="./customerslist.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
</form>
        </div>
        
        <?php
$username="root";
$password="";
$server="localhost";
$db="bank";
$con=mysqli_connect($server,$username,$password,$db);
$con=mysqli_connect($server,$username,$password,$db);
 
if(isset($_POST["submit"])){
$sql="UPDATE customer SET balance=balance+'$_POST[amount]' WHERE email='$_POST[email]'";
    mysqli_query($con,$sql);
    $sql3="insert into history(name,email,amount) values('$_POST[name]','$_POST[email]','$_POST[amount]')";
    mysqli_query($con,$sql3);
    $sql2="UPDATE personal SET balance=balance-'$_POST[amount]'";
    mysqli_query($con,$sql2);
   


    

 
            
            
     
}

?>
        
        
       
    </body>
</html>