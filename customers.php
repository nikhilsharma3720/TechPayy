<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Basic Banking System</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet"
    href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body background="Pngtree2.png">
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="./index.php">
      <p id="main_heading">Sparks Foundation</p>
    </a>
    <a class="header_link" id="trans" href="index.php">Home</a>
  </nav>
  <br><br>
  <div class="flex">
    <div class="card" style="width: 18rem;">
      <img src="icons8-web-64 (1).png" height="200" width="40" class="card-img-top" alt=".vjj..">

      <div class="card-body">
        <button onclick="document.getElementById('id01').style.display='block'" id="add_btn"
          class="w3-button w3-black">Add Customers</button><br><br>
        <p style="color:black;">Save the details of customers</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="icons8-money-transfer-64.png" height="200" width="40" class="card-img-top" alt=".vjj..">
      <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
          data-title="Report Error"><a href="./customerslist.php">Customers</a></button>
        <p class="card-text">
        <p style="color:black;"> Transfer money between multiple users</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="icons8-view-64.png" height="200" width="40" class="card-img-top" alt=".vjj..">
      <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
          data-title="Report Error"><a href="./history.php">Check History</a></button>
        <p class="card-text">
        <p style="color:black;">Check tranction history of Customers</p>
      </div>

    </div>
  </div>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal">
        <span onclick="document.getElementById('id01').style.display='none'"
          class="w3-button w3-display-topright">&times;</span>
        <h2 style="text-align:center">Add Customer</h2>
      </header>

      <div class="w3-container">
        <form action="" method="post">

          <div class="form-group">
            <label for="text">Customer Name</label>
            <input class="form-control" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="email">Customer E-mail</label>
            <input class="form-control" name="email" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label for="text">balance</label>
            <input class="form-control" name="amount" placeholder="Amount">
          </div>
          <div class="form-group">
            <label for="text">Account No</label>
            <input class="form-control" name="account" placeholder="Account">
          </div>
          <button type="submit" name="save" class="btn btn-default">Save</button>
        </form>

      </div>

    </div>
  </div>
  </div>

  </div>
  </div>
  <script>
    $(document).ready(function () {
      $("#myModal").on("show.bs.modal", function (event) {
        // Get the button that triggered the modal
        var button = $(event.relatedTarget);

        // Extract value from the custom data-* attribute
        var titleData = button.data("title");
        $(this).find(".modal-title").text(titleData);
      });
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php
   include("connection.php");
     if(isset($_POST['save'])){
     $name=$_POST['name'];
        $email=$_POST['email'];
        $amount=$_POST['amount'];
        $account=$_POST['account'];
        $insertquery="insert into customer(name,email,balance,account) values('$name','$email','$amount','$account')";
    mysqli_query($con,$insertquery);
    }
  
    ?>

</body>

</html>