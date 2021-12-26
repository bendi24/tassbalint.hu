<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tass Bálint</title>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<div class="test1" style="width: 100%">
<div class="flexWrap">
  <div class="flexCol1">
    <h1 class="yeet" style="padding-top: 20px; font-size: 130px;">Tass<br/></br>Bálint
    </h1></br>
  </div>
  <div class="flexCol2">
    <a href="ajanlo.html">
    <img src="images/apaIndex.jpg" style="width: 400px;"alt="">
    </a>
    <h3 style="color: #FFF; padding-left: 80px;">Fotó: <a class="blanks" href="https://www.instagram.com/blanks_photo/">Blank's photography</a></h3>
  </div>
</div>
 <div class="links">
<span><a id="link1" class="link1" href="novella.php">Novellák<a></span>
<span><a id="link2" class="link2" href="versek.php">Versek<a></span>
<span><a id="link3" class="link3" href="video.php">Videók<a></span>
</div>
</div>


<div class="test2" style="width: 100%;">
    <div class="title">
     <h1>Tass<br/></br>Bálint
    </h1></br>
     </div>
     <div class="links">
    <span><a id="link1" class="link1" href="novella.php">Novellák<a></span>
    <span><a id="link2" class="link2" href="versek.php">Versek<a></span>
    <span><a id="link3" class="link3" href="video.php">Videók<a></span>
    </div>
</div>
</body>
<h3 style="color: #FFF;   position: absolute; bottom: 8px; right: 16px;">Developed by Bendegúz</h3>

</html>
<style>
    
    @media screen and (max-width: 1200px) {
        .test1 {
            display: none;
        }
        .test2{
            display: inline-block;
        }
	}
    @media screen and (max-width: 0px) {
        .test1 {
            display: inline-block;
        }
	.test2{
            display: none;
        }
    }
    @media screen and (min-width: 1200px){
        .test1{
            display: inline-block;
        }
	.test2{
            display: none;
        }
   
    }
* {
  box-sizing:border-box;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.container {
  padding: 5%;
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
  padding: 1.09% 2.18%;
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
@import url('https://fonts.googleapis.com/css?family=Montserrat');
body {
	background-color: #111;
}
.title {
	font-family: "Montserrat";
	text-align: center;
	color: #FFF;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
  letter-spacing: 1px;
  margin-top: 7.81%;
  padding-bottom: 15.6%;
}
h1 {
	background-image: url(https://media.giphy.com/media/26BRvIYDe4ILO60Ni/giphy.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 90px;
	line-height: .75;
  margin: 10px 0;
}
h2{
  background-image: url(https://media.giphy.com/media/26BRvIYDe4ILO60Ni/giphy.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	line-height: .75;
  margin-bottom: 2%;
}
.links{
  width: 100%;
  text-align: center; 
  padding-top: 10px;
}
.link1{
  text-decoration: none;
  background-image: url(https://media.giphy.com/media/26BRvIYDe4ILO60Ni/giphy.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 50px;
  line-height: .75;
  margin: 6.25%;
}
.link2{
  text-decoration: none;
  background-image: url(https://media.giphy.com/media/26BRvIYDe4ILO60Ni/giphy.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 50px;
  line-height: .75;
  margin: 6.25%;
}
.link3{
  text-decoration: none;
  background-image: url(https://media.giphy.com/media/26BRvIYDe4ILO60Ni/giphy.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 50px;
  line-height: .75;
  margin: 6.25%;
}
a:hover {
  text-decoration: none;
}
a:active {
  text-decoration: none;
}
.date{
color: #fff;
position: absolute;
bottom: 0px;
right: 0px;
}
.flexWrap {
  display: flex;
  width: 100%;
  height: 700px;
  padding-top: 10px;

}
.flexCol1 {
  text-align: center;
  box-sizing: border-box;
  padding: 10px;
  width: 70%;
}
.flexCol2 {
  box-sizing: border-box;
  padding: 10px;
  width: 30%;
}
/* (B) BREAK DOWN 1 COLUMN ON SMALL SCREENS */
@media only screen and (max-width: 768px) {
  .flexWrap { flex-wrap: wrap; }
  .flexCol { width: 100%; }
}
.blanks:link {
  color: #fff;
  text-decoration: none;
  font-weight: lighter;

}

.blanks:visited {
  color: #fff;
  text-decoration: none;
  font-weight: lighter;

}

.blanks:hover {
  color: #fff;
  text-decoration: none;
  font-weight: lighter;

}

.blanks:active {
  color: #fff;
  text-decoration: none;
  font-weight: lighter;

}

        </style>
