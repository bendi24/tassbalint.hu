<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous"></script>

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

.ss-container{
  height: 50%;
  align-items: center;
}
.animated-text{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  font-size: 4.5em;
  }
  .animated-text2{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    align-items: center;
    text-align: center;
  }
  .ml5 {
  position: relative;
  font-weight: 300;
  font-size: 4.5em;
  color: #fff;
}

.ml5 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
  line-height: 1em;
}

.ml5 .line {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  height: 3px;
  width: 100%;
  background-color: #402d2d;
  transform-origin: 0.5 0;
}
.ml5 .letters {
  display: inline-block;
  opacity: 0;
}
.ml16 {
  color: #fff;
  padding: 40px 0;
  font-weight: 800;
  font-size: 4em;
  text-transform: uppercase;
  letter-spacing: 0.5em;
  overflow: hidden;
}

.ml16 .letter {
  display: inline-block;
  line-height: 1em;
}
  #slide{
	width:96%;
	}
	
* {
	box-sizing: border-box
}

.mySlides {
	display: none;
  text-align: center;

  }

.slideshow-container {
	width: auto;
	position: relative;
	margin: -10px;

}

.prev, .next {
	cursor: pointer;
	position: absolute;
	padding: 50px;
	margin-top: -400px;
	color: #423E32;
	font-weight: bold;
	font-size: 50px;
	transition: 0.6s ease;
	border-radius: 0 3px 3px 0;
}.next {
	right: 5%;
	border-radius: 3px 0 0 3px;
}
.prev{
  left: 5%;
}
.prev:hover, .next:hover {
	background-color: rgba(0,0,0,0.8);
}
.text {
	color: balck;
	font-size: 15px;
	padding: 8px 12px;
	position: absolute;
	bottom: 8px;
	width: 100%;
	text-align: center;
}

.dot {
	cursor: pointer;
	height: 13px;
	width: 13px;
	margin: 0 2px;
	background-color: #bbb;
	border-radius: 50%;
	display: inline-block;
	transition: background-color 0.6s ease;
}
.active, .dot:hover {
	background-color: #494B55;
}
/* Fading animation */
.fade {
	-webkit-animation-name: fade;
	-webkit-animation-duration: 2s;
	animation-name: fade;
	animation-duration: 2s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
  .ss-container{visibility: hidden; display: none}
  .dots{visibility: hidden; display: none}
}

@media only screen and (max-width: 600px) {
  .ss-container{visibility: hidden; display: none}
  .dots{visibility: hidden; display: none}

}
.pics
{
    border:3px solid #494B55;
    display: block;
  margin-left: auto;
  margin-right: auto;
}

.ml9 {
  position: relative;
  font-weight: 100;
  font-size: 1em;
}

.ml9 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml9 .letter {
  transform-origin: 50% 100%;
  display: inline-block;
  line-height: 1em;
}
.ml14 {
  font-weight: 200;
  font-size: 4em;
}

.ml14 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml14 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 2px;
  width: 100%;
  background-color: #fff;
  transform-origin: 100% 100%;
  bottom: 0;
}

.ml14 .letter {
  display: inline-block;
  line-height: 1em;
  color: #000;
}
</style>
</head>
<body>
<div id="main">
<div style="text-align:center; ">
  <h2>Novellák</h2>
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

<body>
  
  <div class="ss-container">
  
    <div class="mySlides fade" style="text-align: center; position: relative;">
      <a href="egyezseg/egyezseg.html">
        <img src="images/zongora.jpg" class="pics"/>
        <div class="animated-text" id="text1">
          <h1 class="ml9">
            <span class="text-wrapper">
              <span class="letters">Az egyezség</span>
            </span>
          </h1>          
        </div>
        </a>
    </div>
    <div class="mySlides fade" style="text-align: center; position: relative;">
      <a href="holdtolte/holdtolte.html">
      <img src="images/holdtolte.png" class="pics"/>
      <div class="animated-text2" id="text1">
        <h1 class="ml5">
          <span class="text-wrapper">
            <span class="line line1"></span>
            <span class="letters letters-left">Holdtölte</span>
            <span class="line line2"></span>
          </span>
        </h1>
      </div>
      </a>
    </div>
    <div class="mySlides fade" style="text-align: center; position: relative;">
      <a href="kenyer/kenyer.html">
      <img src="images/kenyer.jpg" class="pics" style="height: 700px"/>
      <div class="animated-text2" id="text1">
        <h1 class="ml16">Kenyér</h1>
      </div>
    </a>
    </div>
    <div class="mySlides fade" style="text-align: center; position: relative;">
      <a href="kekasszony/kekasszony.html">
      <img src="images/kekasszony.jpg" class="pics">
      <div class="animated-text2" id="text1">
        <h1 class="ml14">
          <span class="text-wrapper">
            <span class="letters">Kék asszony</span>
            <span class="line"></span>
          </span>
        </h1>
              </div>
              </a>
    </div>
   
   
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!--    Putting in the click dots   -->
<div class="dots" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
</div>

<a href="kartyaparti/kartyaparti.html" class="aw">
  <div class="container" style="background-color:#f1f1f1"  id="kartyaparti">
  <div class="row">
    <div class="column-33">
      <img src="images/kartyaparti.jpg" alt="kártyaparti" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="medium-font" style="color:red; text-align: center"><b>A kártyaparti</b></h1>
      <p><span style="font-size:25px">Nagyanyám karakán asszony volt, </span>  pontosan tudta, mikor mit kell tennie ahhoz, hogy minden úgy alakuljon, ahogy szeretné. Amikor Nagyapa egy görbe éjszaka elkártyázott egy kisebb vagyont, Nagyanyám elvette a kassza kulcsát, betiltotta a kártyázást, és csupán évente egyszer, szilveszterkor engedélyezett egy ultipartit, némi tojáslikőr társaságában.</p>
	<p style="font-size: 30px">Tovább...</p>   
 </div>
  </div>
</div></a>


<a href="holdtolte/holdtolte.html" class="ab">
  <div class="container" style="background: black; color: #fff"  id="holdtolte">
    <div class="row">
      <div class="column-66">
        <h1 class="large-font" style="color:MediumSeaGreen; text-align: center"><b>Holdtölte</b></h1>
        <p><span style="font-size:25px">Későre járt.</span>A Péter-Pál templom toronyórája elütötte az éjfélt amikor a Duna hullámain tükröződő telihold, mint a csillagok közé függesztett hatalmas lámpás, ezüst fénnyel bevilágította az óbudai Fő teret. Egy szikár, magányos alak bontakozott ki a félhomályból, a tér szélén megállt, körbenézett mintha keresne valakit, majd átvágott a macskaköveken</p>
    <p style="font-size: 30px">Tovább...</p>   
  </div>
      <div class="column-33">
          <img src="images/holdtolte.png" width="335" height="471" >
      </div>
    </div>
  </div>
  </div>
  </a>
  

<a href="aelia/aeliadala.html" class="aw">
<div class="container" style="background-color:#f1f1f1" id="aelia dala">
  <div class="row">
    <div class="column-33">
      <img src="images/aelia.jpg" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="large-font" style="color:red; text-align: center"><b>Aelia dala</b></h1>
      <p><span style="font-size:25px">Korán beköszöntött a nyár.</span>  A szél friss víz illatát hozta a folyó felől az aquincumi légiótáborba. Végigszaladt a Thermae Maiores és a kórház falai között, a parancsnokság épületénél jobbra fordult, végül hatalmas porfelleget kavarva szabadult ki a kaszárnyák és házak fogságából, hogy az északi kapun át a katonaváros előkelő része felé vegye az irányt.</p>
	<p style="font-size: 30px">Tovább...</p>    
</div>
  </div>
</div>
</a>

<a href="oregszel/oregszel.html" class="ab">
<div class="container" style="background-color:black; color: white" id="aprankentoregszelmeg">
  <div class="row">
    <div class="column-66">
      <h1 class="medium-font" style="color: mediumseagreen"><b>Apránként öregszel meg</b></h1>
      <p><span style="font-size:25px">Apránként öregszel meg.</span>  Először csak a rokonok idegesítenek azzal, hogy jé, mekkorát nőtt ez a gyerek, mióta nem láttuk, aztán úgy érzed, a farmernadrágot és a pólót ideje lecserélned öltönyre, hogy friss diplomásként komolyan vegyenek. A beosztás és a fizetés rendben, a külcsín és a belbecs klappol, jól elvagy, szépen haladsz felfelé a szamárlétrán. A munkába temetkezel. Mire aligazgatónak kineveznek a kollégák magáznak, az ismeretlenek zavarukban tetszikelnek, vagy előre, jó hangosan tiszteletemmel köszönnek, csak a fiatalok nem csinálnak gondot a megszólításból, simán letegeznek. 
	<p style="font-size: 30px">Tovább...</p>    
</div>
    <div class="column-33">
      <img src="images/oregszel.jpeg" alt="App" width="535" height="671">
    </div>
  </div>
</div>
</a>

<a href="egyezseg/egyezseg.html" class="aw">
<div class="container" style="background-color: white; color: black;" id="egyezseg">
  <div class="row">
    <div class="column-33">
        <img src="images/zongora.jpg" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="large-font" style="color:red;"><b>Az egyezség</b></h1>
      <p><span style="font-size:25px">Amióta az eszemet tudom, </span>Amióta az eszemet tudom, a zongora a nappali sarkában áll, de hiába kértem, anya soha nem játszott nekem.</p>
	<p style="font-size: 30px">Tovább..<p>    
</div>
  </div>
</div>
</a>

<a href="almos/almos.html" class="ab">
<div class="container" style="background-color: black; color: white;" id="almos">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font" style="color: mediumseagreen"><b>Álmos</b></h1>
      <p><span style="font-size:24px">Átkozottul meleg volt</span> a reggel. Az ébredéssel és a másnapossággal küzdve, egy bögre kávé társaságában kiültem a diófa alá. Hunyorogva elkevertem a tejhab tetejére szórt kristálycukron megcsillanó napfényt, majd hosszan kortyoltam az ismerős, keserédes ízt. A koffein jótékony hatása szétáradt a szervezetemben.</p>
	<p style="font-size: 30px">Tovább...<p>    
</div>
    <div class="column-33">
      <img src="images/almos.jpg" alt="Álmos" width="100%" >
    </div>
  </div>
</div>
</a>

<a href="eskuvo/eskuvo.html" class="aw">
<div class="container" style="background: white;" id="eskuvo">
  <div class="row">
    <div class="column-33">
      <img src="images/eskuvo.jpg" width="335" height="471">
  </div>
    <div class="column-66">
      <h1 class="large-font" style="color:red;text-align: center"><b>Esküvő</b></h1>
      <p><span style="font-size:25px">Nagyapám magának való, </span> különös figura volt, aki elvek szerint élt. Vallotta, hogy csak annak a temetésére megy el, aki az övére is, így életében temető felé se járt.</p>
	<p style="font-size: 30px">Tovább...</p>    
</div>
  </div>
</div>
</a>

<a href="kekasszony/kekasszony.html" class="ab">
  <div class="container" style="background-color: black; color: white;" id="kekasszony">
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font" style="color: mediumseagreen"><b>Kék asszony, avagy egy tabáni május elseje</b></h1>
        <p><span style="font-size:24px">Azt mondta rossznak lenni jó, a jó pedig unalmas</span>  szóval fülig belezúgtam. Két újjal tudott fütyülni, a nyelvével elérte a könyökét, kívülről tudta az összes Beatles számot és az Angie szövegét.</p>
    <p style="font-size: 30px">Tovább...<p>    
  </div>
      <div class="column-33">
        <img src="images/kekasszony2.jpeg" alt="Álmos" width="100%" >
      </div>
    </div>
  </div>
  </a>
  <a href="moszkvater/moszkvater.html" class="aw">
<div class="container" style="background: white;" id="moszkvater">
  <div class="row">
    <div class="column-33">
      <img src="images/moszkvater.jpg" width="335" height="471">
  </div>
    <div class="column-66">
      <h1 class="large-font" style="color:red;text-align: center"><b>Moszkva tér</b></h1>
      <p><span style="font-size:25px">Abban az időben,</span></p> amikor még csak trapézszárú és indigó festésű farmert lehetett kapni a boltokban, amely egész napos viselet után olyan kékre színezte a lábat, mintha a Goldberger gyár kékfestő üzemében fürdőzött volna az ember.
	<p style="font-size: 30px">Tovább...</p>    
</div>
  </div>
</div>
</a>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#kartyaparti" onclick="closeNav()">A kártyaparti</a>
  <a href="#holdtolte" onclick="closeNav()">Holdtölte</a>
  <a href="#aelia dala" onclick="closeNav()">Aelia dala</a>
  <a href="#aprankentoregszelmeg" onclick="closeNav()">Apránként öregszel meg</a>
  <a href="#egyezseg" onclick="closeNav()">Az egyezség</a>
  <a href="#almos" onclick="closeNav()">Álmos</a>
  <a href="#eskuvo" onclick="closeNav()">Esküvő</a>
  <a href="#kekasszony" onclick="closeNav()">Kék asszony</a>
  <a href="#moszkvater" onclick="closeNav()">Moszkva tér</a>


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
var textWrapper = document.querySelector('.ml16');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  var slideIndex = 0;
 var textWrapper2 = document.querySelector('.ml9 .letters');
textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

var elso = anime.timeline({loop: false})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

showSlides();
//add the global timer variable
var slides,dots,timer;

function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    //put the timeout in the timer variable
    timer = setTimeout(showSlides, 4000); // Change image every 8 seconds
    if(slideIndex == 1){
      elso.play();
    }else if(slideIndex == 2){
      masodik.play();
    } else if(slideIndex == 3){
      harmadik.play();
    }else if(slideIndex == 4){
      negyedik.play();
    };
}

function plusSlides(position) {
    //clear/stop the timer
    clearTimeout(timer);
    slideIndex +=position;
    if (slideIndex> slides.length) {slideIndex = 1}
    else if(slideIndex<1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    //create a new timer
    timer = setTimeout(showSlides, 4000);
    if(slideIndex == 1){
  elso.play();
} else if(slideIndex == 2){
  masodik.play();
} else if(slideIndex == 3){
  harmadik.play();
} else if(slideIndex == 4){
  negyedik.play();
}
};

function currentSlide(index) {
    //clear/stop the timer
    clearTimeout(timer);
    if (index> slides.length) {index = 1}
    else if(index<1){index = slides.length}
    //set the slideIndex with the index of the function
    slideIndex = index;
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";  
    dots[index-1].className += " active";
    //create a new timer
    timer = setTimeout(showSlides, 4000);
};

var masodik = anime.timeline({})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  });
  
var harmadik = anime.timeline({})
  .add({
    targets: '.ml16 .letter',
    translateY: [-100,0],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 30 * i
  }).add({
    targets: '.ml16',
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  var textWrapper3 = document.querySelector('.ml14 .letters');
textWrapper3.innerHTML = textWrapper3.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

var negyedik = anime.timeline({loop: false})
  .add({
    targets: '.ml14 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeInOutExpo",
    duration: 900
  }).add({
    targets: '.ml14 .letter',
    opacity: [0,1],
    translateX: [40,0],
    translateZ: 0,
    scaleX: [0.3, 1],
    easing: "easeOutExpo",
    duration: 800,
    offset: '-=600',
    delay: (el, i) => 150 + 25 * i
  });
</script>
   

</body>
</html>
