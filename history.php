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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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


    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    table{
    border-collapse: collapse;
    background-color: whitesmoke;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin:auto;

}
th,td
{
    border:2px solid grey;
    padding:14px 50px;
    text-align: center;
    color: black;
}
th{
    text-transform: uppercase;
    font-weight: 500;
}
td{
    font-size: 13px;
}
        body{
            background-color: #F0F3F4;
        }
        </style>
    </head>
<body>
     <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="./index.php">
          
          <p id="main_heading">Sparks Foundation</p>
        </a>
       <a class="header_link" id="trans" href="index.php">Home</a>
      </nav>
    
    <table class="table table-bordered">
  <thead>
    <tr>
        
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
      <th scope="col">Amount</th>
     
    </tr>
  </thead>
      
  <tbody>
      
     <?php
$username="root";
$password="";
$server="localhost";
$db="bank";
$con=mysqli_connect($server,$username,$password,$db);


      $selectquery="select * from history";
      $query=mysqli_query($con,$selectquery);
      $nums=mysqli_num_rows($query);
      while($fetch=mysqli_fetch_array($query)){
     
    echo "<tr>";

echo "<td>" . $fetch['name'] . "</td>";
          echo "<td>" . $fetch['email'] . "</td>";
          echo "<td>" . $fetch['amount'] . "</td>";
          
echo "</tr>";
      }
      mysqli_close($con);
   
    ?>
          
  </tbody>
       

</table>

</body>
</html>