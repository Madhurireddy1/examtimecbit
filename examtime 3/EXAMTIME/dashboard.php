<?php include 'header.php';
include 'connect.php';

if (!isset($_COOKIE['email'])) {
  # code...
  ?>
  <script>
    alert("Not Logged in. Please log in first.");
    window.location.assign("login.php");
  </script>
  <?php
}else {
  $email = $_COOKIE['email'];
  $user_sql = "select email,name from user where email = '$email'";
  
  $user_res = $conn->query($user_sql);
  
  if ($user_res->num_rows > 0) {
    # code...
    $user_row = $user_res->fetch_assoc();
      }else {
    ?>
    <script>
      alert("Not Logged in. Please log in first.");
      window.location.assign("log.php?out");
    </script>
    <?php
  }
}

?>
<!-- <div id="dash-pop" class="dash-pop" data-toggle="modal" data-target="#myModal">Please buy subcription to access these videos<h6 onclick="dashPopHide()">X</h6></div>   -->
<div class="dashboard">
<center>
  <h2>Welcome <?php echo $user_row['name']; ?>! Select your Year and semester . </h2>
  <script>
    dashPopHide();
  </script>
  
  
  <a href="year1sems.php"><div style="background: url(images/micro.jpg);color: #333;" class="dash-opt">1st year</div></a>
  <a href="year2sems.php"><div style="background: url(images/micro.jpg);color: #333;" class="dash-opt">2nd year</div></a>
  <a href="year3sems.php"><div style="background: url(images/micro.jpg);color: #333;" class="dash-opt">3rd year</div></a>
  <a href="year4sems.php"><div style="background: url(images/micro.jpg);color: #333;" class="dash-opt">4th year</div></a>


  </center>
</div>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="card text-center">
  <div class="card-header" style="background-color: #A2C17B;" >
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Schedule Maker.</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="schedule maker/index.php" class="btn btn-primary" style="background-color: #A2C17B;">Schedule </a>
  </div>
  <div class="card-body">
    <h5 class="card-title">GPA Calculator.</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="CGPA-Calculator/index.html" class="btn btn-primary" style="background-color: #A2C17B;">Calculate</a>
  </div>
  <div class="card-footer text-muted" style="background-color: #A2C17B;">
    
  </div>
</div>
</body>
</html>

<?php include 'footer.php';?>