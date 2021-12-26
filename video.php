<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="UTF-8">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
* {
  box-sizing:border-box;
}
html{
  scroll-behavior: smooth;

}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
  
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 8px 10px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

#main {
  transition: margin-left .5s;
}

@media screen and (max-width: 450px) {
  .sidenav {padding-top: 40px;}
  .sidenav a {font-size: 15px;}
}

.ab, .ab:link, .ab:visited, .ab:hover, .ab:focus, .ab:active{
  color: #fff;
}
.aw, .aw:link, .aw:visited, .aw:hover, .aw:focus, .aw:active{
  color: #000;
}

</style>
</head>
<body>
<div id="main">
<div style="text-align:center; ">
  <h2>Videók</h2>
</div>

<div id="navbar">
<ul>
  <li><span style="color: white;font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></li>
  <li id="nav0"><a href="novella.php">Novellák</a></li>
  <li id="nav1"><a href="versek.php">Versek</a><li>
  <li id="nav2"><a href="video.php">Videók</a></li>
    <li style="float:right;"><a style="border-radius: 10%" href="https://www.facebook.com/profile.php?id=100009591849535"><i class="fa">&#xf230;</i>
</a></li>
    <li style="float:right;"><a style="float:right; border-radius: 10%" href="mailto:tass.balint.info@gmail.com"><i class="fa">&#xf2b6;</i>

</a></li>
</ul>
</div>
<div class="container" style="background-color: #e0e0d2	"  id="holdtolte">
  <div class="row">
    <div class="column-66">
      <h1 class="medium-font" style="color:black;"><b>Holdtölte</b></h1>
      <p>Előadó: Őze Áron<br> Helyszn: Óbudai Társaskör<br> Dátum: 2017. május 14.</p>
    </div>
    <div class="column-33">
        <video width="100%" height="80%" controls>
            <source src="hodtolte.mp4" type="video/mp4">
            <source src="hodtolte.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video> 
    </div>
  </div>
</div>

<div class="container" style="background-color:#adad85" id="eskuvo">
  <div class="row">
    <div class="column-33">
        <video width="100%" height="80%" controls>
            <source src="eskuvo.mp4" type="video/mp4">
            <source src="eskuvo.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video> 
    </div>
    <div class="column-66">
      <h1 class="large-font" style="color:black"><b>Esküvő</b></h1>
      <p>Előadó: Sztarenki Pál<br> Helyszn: Óbudai Társaskör<br> Dátum: 2019. május 12. </p>
    </div>
  </div>
</div>





<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#holdtolte" onclick="closeNav()">Holdtölte</a>
  <a href="#eskuvo" onclick="closeNav()">Esküvő</a>

</div>

<script>
  const mediaQuery = window.matchMedia('(max-width: 700px)')

  function openNav() {
  if(!mediaQuery.matches){
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}else{
  document.getElementById("mySidenav").style.width = "40%";
}}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
window.onscroll = function() {myFunction()};

var header = document.getElementById("navbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

if(!mediaQuery.matches){
  document.getElementById("nav0").style.paddingLeft = "30px";
  document.getElementById("nav1").style.paddingLeft = "30px";
  document.getElementById("nav2").style.paddingLeft = "30px";

}
else{
  document.getElementById("nav0").style.fontSize = "20px";
  document.getElementById("nav1").style.fontSize = "20px";
  document.getElementById("nav2").style.fontSize = "20px";
}
</script>
   

</body>
</html>
