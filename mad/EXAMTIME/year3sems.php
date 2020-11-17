<?php include 'header.php' ?>


<center>
  <h2 style="margin: 100px; margin-bottom: 50px;"> SELECT THE SEMESTER YOU WANT TO PROCEED WITH IN YEAR 3! </h2> 
  <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
   <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.pulse:hover,
.pulse:focus {
  -webkit-animation: pulse 1s;
          animation: pulse 1s;
  box-shadow: 0 0 0 2em rgba(255, 255, 255, 0);
}

@-webkit-keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 var(--hover);
  }
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 var(--hover);
  }
}

.pulse {
  --color: red;
  --hover: navy;
}



button {
  color: var(--color);
  -webkit-transition: 0.25s;
  transition: 0.25s;
}
button:hover, button:focus {
  border-color: var(--hover);
  color: #fff;
}



button {
  display: block;
  background: none;
  border: 2px solid;
  font: inherit;
  line-height: 0.5;

  margin: 2em;
  padding: 2em 5em;
}                                          
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="buttons">
  
    <a href='sem5branch.php'><button class="pulse" style="color: black;">SEMESTER 5</button></a>
  <a href='sem6branch.php'><button class="pulse" style="color: black;">SEMESTER 6</button></a>
  
</div>
<!-- partial -->
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

</center>
<?php include 'footer.php';?>


