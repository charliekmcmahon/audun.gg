
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-zrnmn8R8KkWl12rAZFt4yKjxplaDaT7/EUkKm7AovijfrQItFWR7O/JJn4DAa/gx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Froen</title>
  </head>
  <body>
    <?php require_once ('assets/header.php');?>
    <div class="left-section column">
      <div class="padding-content">
        <h1 class="blacky poppins">Vær stolt av hoodien deres!</h1>
        <h4 class="gray text-bold">
          Tekst her, jeg vet ikke om noe jeg kan skrive.  Tekst her, jeg vet ikke om noe jeg kan skrive.
          <br>
          Tekst her, jeg vet ikke om noe jeg kan skrive.  ekst her, jeg vet ikke om noe jeg kan skrive.
          <br>
          Tekst her, jeg vet ikke om noe jeg kan skrive. Tekst her, jeg vet ikke om noe jeg kan skrive.
        </h4>
        <p>
        <br>
        <div class="column">
          <div class="button-red">
            Les mer
          </div>
          <div class="socials">

          </div>
        </div>

      </div>
    </div>
    <div class="right-section column">
      <img src="froen-logo-white.png" class="logo">
    </div>

    <header id="headermenu" class="pink" style="clear:both;">
      <div class="wrapper">
        <img src="./froen-logo-white.png" class="logo-header">
            <ul class="pink">
            <li class="pink"><a href="#" class="pink">Hvem er vi?</a></li>
            <li class="pink"><a href="#" class="pink">Portfolio</a></li>

            <li class="pink" style="float:right">
              <a class="pink-messenger" href="#">
                <i class="fab fa-facebook-messenger mr-10"><!-- icon --></i> Snakk med oss
              </a>
            </li>
          </ul>
      </div>
    </header>
<div style="clear:both;">&nbsp;</div>
    <div class="section2">
      <h2 class="blacky text-center top-70">Velg mellom pakker</h2>
      <h4 class="gray text-bold text-center">
        Usikker på hvilken pakke du skal velge? Scroll neddover for eksempler.
      </h4>
      <div class="top-70">
        <div class="wrapper">
          <div class="pakkewrapper">
            <div class="pakke pakkeleft" style="float:left;">
              <span id="small">noe her</span>
              <h2 class="font-regular title">
                Standard
              </h2>
              <div class="content">
                hva som er i pakken
                <br>
                seriøst? har du dette
                <br>
                dritkult, skriv noe her
              </div>

              <!-- endre pris her -->
              <span class="price">

                5600 <span id="kr">kr</span>

              </span>
              <div class="btn-pakke" style="color:#6ee3c7;">
                VIS
              </div>
            </div>
            <div class="pakke pakkecenter" style="display:inline-block;">
              <span id="small">noe her</span>
              <h2 class="font-regular title">
                Premium
              </h2>
              <div class="content">
                hva som er i pakken
                <br>
                seriøst? har du dette
                <br>
                dritkult, skriv noe her
              </div>

              <!-- endre pris her -->
              <span class="price">

                5600 <span id="kr">kr</span>

              </span>
              <div class="btn-pakke" style="color:#47b3f8;">
                VIS
              </div>
            </div>
            <div class="pakke pakkeright" style="float:right;">
              <span id="small">noe her</span>
              <h2 class="font-regular title">
                Premium Gold
              </h2>
              <div class="content">
                hva som er i pakken
                <br>
                seriøst? har du dette
                <br>
                dritkult, skriv noe her
              </div>

              <!-- endre pris her -->
              <span class="price">

                5600 <span id="kr">kr</span>

              </span>
              <div class="btn-pakke" style="color:#9150f7;">
                VIS
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-end">&nbsp;</div>

  </body>
</html>
<style>
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
header.sticky{
  margin-top:200px;
}
.sticky + .section2 {
  padding-top: 102px;
}
.btn-pakke{
  display:inline-block;
  border-radius:500px;
  padding:10px 80px;
  background: white;
  color:red;
  margin-top:40px;
  font-weight: bold;
  font-family: 'Poppins', sans-serif !important;
}
#kr{font-size: 10px;}
#small{
  padding:.2em .35em;
  border-radius:1px;
  font-size:.75em;
  color:white;
  border-radius:.2em;
  display:inline-block;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: bold;
  font-family: 'Poppins', sans-serif !important;

}
.poppins{
  font-family: 'Poppins', sans-serif !important;
}
.pakkewrapper{
  text-align:center;
}
.mr-10{
  margin-right:10px;
}
.pakke >.title{
  font-size: 40px;
}
.pakke >.price{
  font-weight:bold;
  font-size:30px;
  margin-top:40px;
  display:block;
}
.pakke >.content{
  color:white;
  font-size:.75em;
  line-height:40px;
}
.pakkeleft{
  background-position: bottom 0px right 400px !important;
}
.pakkecenter{
  background-position: bottom 0px right 600px !important;

}
.pakkeright{
  background-position: bottom 0px right 0px !important;
}
.pakke{
  width: 310px;
  height: 480px;
  border-radius:.8em;
  background: red;
  background: url(https://theultralinx.com/.image/c_limit%2Ccs_srgb%2Cq_auto:good%2Cw_860/MTU5ODU3NjQ0NDQ4Nzg1NTY1/gradient-waves.webp);
  padding-top:40px;
  margin:20px;
  text-align:center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.pink-messenger{
  background-color: white;
  border-radius:500px;
  margin-top:10px;
  display:inline-block;
  padding: 15px 40px;
  color:#00a3ff;
}
.fa-facebook-messenger{
  color:#00a3ff !important;
}
.section-end{
  margin-bottom:350px;
}
header.pink{
  background-color:#da0d4b;
}
.section2{
  margin-top:50px;
}
.top-70{margin-top:70px;}
.top-150{margin-top:150px;}
.text-center{
  text-align:center;
}
ul.pink {
  text-align: center;
  display:inline-block;
  vertical-align:top;
}
li.pink{
  list-style-type:none;

}

li a.pink {
  display: block;
  color: white !important;
  list-style-type:none;
  text-align: center;
  padding: 25px;
  text-decoration: none;
}
ul {
  text-align: center;
  display:inline-block;
  vertical-align:top;
}

li {
  float: left;
}

li a {
  display: block;
  color: #231a2b;
  text-align: center;
  padding: 25px;
  text-decoration: none;
}
.font-regular{
  font-weight:300;
}

.button-red{
  display:inline-block;
  border-radius:500px;
  padding:20px 60px;
  background: rgb(205,15,73);
  background: linear-gradient(0deg, rgba(205,15,73,1) 0%, rgba(217,13,75,1) 100%);:
}
img.logo-header{
  width:100px;
  padding:25px;

}
img.logo {
  position: relative;
  top: 50%;
  text-align: center;
  transform: translateY(-50%);
}
h1{
  font-size:70px;
}
h4{
  font-weight:lighter;
}
.wrapper{
  margin-left: auto;
  margin-right: auto;
  max-width:1300px;
}
.padding-content{
  padding:70px;
}
.text-bold{
  font-weight:bolder;
}
.blacky{
  color:#231b2c;
}
  .gray{
    color:#838383;
  }
  .column{
    float:left;
  }
  .left-section{
    width:60%;
  }
  .right-section{
    height:100vh;
    text-align: center;
    width:40%;
    background: rgb(166,20,64);
    background: linear-gradient(0deg, rgba(34,41,47,1) 0%, rgba(166,20,64,1) 100%);
  }
  body{
    font-family: 'Roboto', sans-serif;
    margin:0;
    color:white;
  }
</style>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("headermenu");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
