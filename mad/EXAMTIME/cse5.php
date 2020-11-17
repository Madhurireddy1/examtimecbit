<?php include 'header.php' ?>


<center>
  <h2 style="margin: 50px; margin-bottom: 50px;"> SELECT THE COURSE ! </h2> 
  

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
	
.fill:hover,
.fill:focus {
  box-shadow: inset 0 0 0 3em var(--hover);
}

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



.offset {
  box-shadow: 0.5em 0.5em 0 0 var(--color), inset 0.3em 0.3em 0 0 var(--color);
}
.offset:hover, .offset:focus {
  box-shadow: 0 0 0 0 var(--hover), inset 6em 5em 0 0 var(--hover);
}



.offset {
  --color: #19bc8b;
  --hover: #19bc8b;
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
<body >
<!-- partial:index.partial.html -->
<div class="buttons">
  
  <div class="row">
 <div class="col-lg-4 col-md-6 col-12"><a href='os.php'><button class="offset">Operating Systems</button></a></div>
 <div class="col-lg-4 col-md-6 col-12"><a href='daa.php'><button class="offset">Design Analysis and Automata</button></a></div>
 <div class="col-lg-4 col-md-6 col-12"><a href='flat.php'><button class="offset">Formal language and  AT</button></a></div>
 <div class="col-lg-4 col-md-6 col-12"><a href='oe.php'><button class="offset">Optional Elective1</button></a></div>
 <div class="col-lg-4 col-md-6 col-12"><a href='pe.php'><button class="offset">Professional Elective1</button></a></div>
 <div class="col-lg-4 col-md-6 col-12"><a href='oslab.php'><button class="offset">OperatingSys LAB</button></a></div>
 <div class="col-lg-4 col-md-6 col-12"><a href='daalab.php'><button class="offset">Design Analysis LAB</button></a></div>
 <div class="col-lg-4 col-md-6 col-12"><a href='pelab.php'><button class="offset">Professional E LAB</button></a></div>
 <div class="col-lg-4 col-md-6 col-12"><a href='miniproject.php'><button class="offset">Mini Project</button></a></div>

</div>
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


