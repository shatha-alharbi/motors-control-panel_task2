<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slidecontainer {
 
opacity:2;
  margin-left:10%;
margin-right:40%;
padding:3%;
z-index: 1;
color:white;

}

.buttons{
	position:relative;
left:260px;
margin-left:200px;
margin-top:50px;

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
  <h1 style="    margin-left:42%;border: none;padding: 4px 20px; font-size: 30px; color: white; " > PANEL 2</h1>

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


<div class="">
<form action="index1.php" method="post">


<input type="submit" name="forward" value="forward"style=" margin-top:5%; margin-left:45%; padding:10px;font-size: 24px;border-radius: 8px;" ><br>

<input  type="submit" name="left" id="left" value="left"style="margin-left:35%; padding:10px;font-size: 24px; border-radius: 8px;">
<input  type="submit" name="stop" id="stop" value="stop"style="margin-top:5%; margin-left:7%; padding:10px;font-size: 24px;border-radius: 8px;">
<input  type="submit" name="right" id="right" value="right"style="margin-left:5%;padding:10px;font-size: 24px;border-radius: 8px;"><br>

<input  type="submit" name="backward" id="backward" value="backward"style="margin-top:5%;margin-left:45%;padding:10px;font-size: 24px;border-radius: 8px;">

</form>

<?php 

if (isset($_POST['forward'])) {
 
$sql = " UPDATE `data2` SET `button_value`='forward'";
$result = $conn->query($sql);
 }

if (isset($_POST['left'])) {
 
$sql = " UPDATE `data2` SET `button_value`='left'";
$result = $conn->query($sql);
 }
 
 if (isset($_POST['stop'])) {
 
$sql = " UPDATE `data2` SET `button_value`='stop'";
$result = $conn->query($sql);
 }
 
 if (isset($_POST['right'])) {
 
$sql = " UPDATE `data2` SET `button_value`='right'";
$result = $conn->query($sql);
 }
 
 if (isset($_POST['backward'])) {
 
$sql = " UPDATE `data2` SET `button_value`='backward'";
$result = $conn->query($sql);
 }
 
 ?>




</body>
</html>
