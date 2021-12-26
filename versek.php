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
  <h2>Versek</h2>
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

<a href="semmicsak/semmicsak.html" class="aw">
<div class="container" style="background-color: #e0e0d2	"  id="semmicsak">
  <div class="row">
    <div class="column-66">
      <h1 class="medium-font" style="color:black;"><b>Semmi csak, avagy versek skandináv gyerekversek mintájára</b></h1>
      <p><span style="font-size:36px">Semmi csak </span>
egy irgalmatlan pofon apámtól, mert nem szóltam,
hogy kocsikázni megyek vidékre,
mentségemre legyen mondva,
abban az időben csak a szomszéd bácsinak volt kocsija az utcában,
és a bátyám is velem volt, ő is kinyithatta volna a száját.</p>
	<p style="font-size: 30px">Tovább...</p>    
</div>
    <div class="column-33">
      <img src="images/skandinav.jpeg" width="335" height="471">
    </div>
  </div>
</div>
</a>

<a href="hallgasugy/hallghassugy.html" class="ab">
<div class="container" style="background-color:#adad85" id="hallgassugy">
  <div class="row">
    <div class="column-33">
      <img src="images/hallgassugy.jpg" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="large-font" style="color:black"><b>Hallgass úgy</b></h1>
      <p><span style="font-size:24px">Hallgass úgy,</span> mint amikor a fürdőszobában, két kézzel a mosdónak támaszkodva vártad a teszt csíkjait.
Hallgass úgy, mint amikor először kezedbe vetted a fekete-fehér ultrahangos képet.
</p>
	<p style="font-size: 30px">Tovább...</p>
    </div>
  </div>
</div>
</a>

<a href="kenyer/kenyer.html" class="aw">
  <div class="container" style="background-color: #e0e0d2;" id="kenyer">
    <div class="row">
      <div class="column-66">
        <h1 class="large-font" style="color: black"><b>Kenyér</b></h1>
        <p><span style="font-size:36px">Az otthon </span>az ahol a kutya nem kap a 
          bokád után és jutalomfalat reményében a 
          bejáratig kísér ahol húsleves illat fogad 
          gyerekzsivaj ölelő karok és vetett ágy ahol 
          a családi ebédhez áldás jár és keresztet 
          vetnek a kenyérre mielőtt megszegik</p>
    <p style="font-size: 30px">Tovább...</p>    
  </div>
      <div class="column-33">
        <img src="images/kenyer.jpg" width="335" height="471">
    </div>
    </div>
  </div></a>

  <a href="vagyakozas/vagyakozas.html" class="ab">
    <div class="container" style="background-color:#adad85" id="vagyakozas">
      <div class="row">
        <div class="column-33">
          <img src="images/vagyakozas.jpg" alt="App" width="335" height="471">
        </div>
        <div class="column-66">
          <h1 class="large-font" style="color:black"><b>Vágyakozás</b></h1>
          <p><span style="font-size:24px">Ultrahangos képen</span>eltűnődni, hosszan, mélán.
            Gyertyafényes vacsorát készíteni két személyre, borral, a pohárra falatnyi zoknit függeszteni, és várni a hatást.
            Három hónapig őrizni a titkot, majd kidüllesztett hassal, szűk pólóban az utcára menni.
    </p>
      <p style="font-size: 30px">Tovább...</p>
        </div>
      </div>
    </div>
    </a>

    <a href="aludjkincsem/aludjkincsem.html" class="aw">
      <div class="container" style="background-color: #e0e0d2;" id="aludjkincsem">
        <div class="row">
          <div class="column-66">
            <h1 class="large-font" style="color: black"><b>Aludj kincsem</b></h1>
            <p><span style="font-size:36px">Aludj, kincsem,</span><br>Álmodd, hogy a karom erős vár,  <br>
              Hogy a dér az üvegen nem jeges lehelet, a falon játszó árny nem lidérc, a csövekben futó víz nem suttogás.

      </p>
        <p style="font-size: 30px">Tovább...</p>    
      </div>
          <div class="column-33">
            <img src="images/aludjkincsem.jpg" width="335" height="471">
        </div>
        </div>
      </div></a>

     


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#semmicsak" onclick="closeNav()">"Semmi csak" avagy versek a skandináv gyerekversek mintájára</a>
  <a href="#hallgassugy" onclick="closeNav()">Hallgass úgy</a>
  <a href="#kenyer" onclick="closeNav()">Kenyér</a>
  <a href="#vagyakozas" onclick="closeNav()">Vágyakozás</a>
  <a href="#aludjkincsem" onclick="closeNav()">Aludj kincsem</a>




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
