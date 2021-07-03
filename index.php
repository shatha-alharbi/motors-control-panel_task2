<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.slidecontainer {
  margin-top:-3%;
opacity:2;
  margin-left:30%;
margin-right:20%;
padding:3%;

color:white;

}


.background {
 z-index: -1;
  background-color:white;
 opacity:0.3;
  margin-left:30%;
margin-right:20%;
margin-top:-200px;
padding:100px;
  

}
.slider {
  -webkit-appearance: none;
  width: 50%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  margin-left: 2%;
    border-radius: 5px;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

header{
background-color:white;
/*padding-top:1%;*/
padding-bottom:1%;
left:0;
border-bottom: 3px solid #e4bad4;
overflow: visible;
z-index: 1;    
position: fixed; /* Set the navbar to fixed position */
 top: 0px;  
width: 100%; /* Full width */}

header nav ul{
margin:1%;
padding-bottom:1%;
position: absolute;
right:6%;
top: 20%;
font-size:130%; 
float:center;
font-family:Lucida Console;
}
header nav li{
display:inline;
  
}
nav a{
color:black;
background-color:white; text-decoration:none;
border:1px solid;
padding: 2px 10px;

margin-left:20px;
}
nav a:hover{
background-color: white;
color:black;
font-weight: bold;
font-size:100%;}

   
    header img {
        margin-right: 75%;
    }
</style>
</head>
<header>
<div class="logo"><a href="home.html"> <img src="logo.png" height="70" width="90"/></a> </div>

<nav>
<ul>

<li><a href="index.php">PANEL 1</a></li>
<li><a href="index1.php" >PANEL 2</a>
 

</ul>
</nav>
</header>
<body style="margin-top:10%; background-image:url(background-image.png);">
  <h1 style="    margin-left:35%;border: none;padding: 4px 20px; font-size: 24px; color: white; " >MOTORS CONTROL PANEL</h1>

  <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"motors");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>




<form action="index.php" method="post">

<div class="slidecontainer">
 <p>Motor 1<input type="range" min="1" max="180" value="90" class="slider" id="myRange1"name="slider1">  Value:<label> <span id="demo1"></span></label></p>

 <p>Motor 2<input type="range" min="1" max="180" value="90" class="slider" id="myRange2"name="slider2" style="padding-top:0%;">  Value:<label> <span id="demo2"></span></label></p>
 <p>Motor 3<input type="range" min="1" max="180" value="90" class="slider" id="myRange3"name="slider3">  Value:<label> <span id="demo3"></span></label></p>
 <p>Motor 4<input type="range" min="1" max="180" value="90" class="slider" id="myRange4"name="slider4">  Value:<label> <span id="demo4"></span></label></p>
 <p>Motor 5<input type="range" min="1" max="180" value="90" class="slider" id="myRange5"name="slider5">  Value:<label> <span id="demo5"></span></label></p>
 <p>Motor 6<input type="range" min="1" max="180" value="90" class="slider" id="myRange6"name="slider6">  Value:<label> <span id="demo6"></span></label></p>


<input type="submit" name="send" value="send" style=" border-radius: 8px;padding:7px;font-size:28px;margin-top:20px; margin-left:70px; background-color: #e7e7e7;  color: black;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); ">
<input  type="submit" name="on" id="on" value="start"style="border-radius: 8px;padding:7px;font-size:28px;margin-top:20px; margin-left:70px; background-color: #e7e7e7; color: black;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); ">


</div>

<?php 

if (isset($_POST['send'])) {
 
$sql = " UPDATE `data` SET `motor1`='".$_POST['slider1']."', `motor2`='".$_POST['slider2']."', `motor3`='".$_POST['slider3']."', `motor4`='".$_POST['slider4']."', `motor5`='".$_POST['slider5']."', `motor6`='".$_POST['slider6']."'  WHERE `ID`='1'";

$result = $conn->query($sql);
 }

 ?>

 <?php 

if (isset($_POST['on'])) {
$sql =" UPDATE `data` SET `start`='on'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>



<script>
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
var slider2= document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}
var slider4= document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}
var slider6= document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;
}
</script>

</body>
</html>
