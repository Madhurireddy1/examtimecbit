<?php include 'header.php' ?>


<center>
  <h2 style="margin: 100px; margin-bottom: 50px;"> SELECT THE SEMESTER YOU WANT TO PROCEED WITH IN YEAR 4! </h2> 
  <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
   <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

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
  
    <a href=''><button class="pulse" style="color: black;">SEMESTER 7</button></a>
  <a href=''><button class="pulse" style="color: black;">SEMESTER 8</button></a>
  
</div>
<!-- partial -->
  
</body>
</html>

</center>
<?php include 'footer.php';?>


