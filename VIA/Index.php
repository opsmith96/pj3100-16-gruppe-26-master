<?php
session_start();
require 'database.php';
require 'database.php';
if( isset($_SESSION['user_id']) ){
    $records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = NULL;
    if( count($results) > 0){
        $user = $results;
    }
}

?>
<!DOCTYPE html>
<html>
    <title>Via by DNB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css.css">
<body>

<!-- Side Navigation -->
<!--<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none" id="mySidenav">
  <h1 class="w3-xxxlarge w3-text-teal">Side Navigation</h1>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-theme">Close <i class="fa fa-remove"></i></a>
  <a href="javascript:void(0)">Link 1</a>
  <a href="javascript:void(0)">Link 2</a>
  <a href="javascript:void(0)">Link 3</a>
  <a href="javascript:void(0)">Link 4</a>
  <a href="javascript:void(0)">Link 5</a>
</nav>-->

<!-- Header -->
<header class="w3-display-container w3-dnbfarge w3-padding " id="myHeader">
  <!--<i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i>-->
  <div class="w3-row ">
	<div class="w3-onethird "> 
		<div class="w3-quarter w3-center w3-padding-24">
	<!--<h1 >VIA av DNB</h1>  --> 
            <a href="Index.php"><img src="img/Logo_VIA_hvit_alt.png" class="w3-image  w3-animate-zoom"  style="width:100%;max-width:120px" alt=""></a></div></div>
		<div class="w3-twothird">
			<div class="w3-third w3-center w3-padding-32"> 
                <a href="kontaktOss.php"><h4>Kontakt oss</h4></a></div>
					<div class="w3-third  w3-center w3-padding-32"> 
			<a href="register.php"><h4>Registrering</h4></a>
            </div>
     
         
                    
                    <a href="login.php"><button class="w3-btn w3-dnbfarge  w3-xlarge w3-border w3-border-white w3-hover-white w3-round-xlarge" style="font-weight:900;">Logg Inn</button></a>
                    
	   </div>
	  </div>
    <a class="menybtn" href="meny.php"><img src="img/Valgmeny_hvit.png" style="height:35px;"></img></a>

    </div>
</header>

  




<div class="w3-row-padding w3-center w3-margin-top">
    <div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:550px">
      <img src="img/tablatIcon.png"class="w3-image" width="150" height="200"></img>
          <h3>Sett opp et budsjett</h3><br>

  <p>Med tilgang til alle kontoene din</p>
  <p>kan du på en god og oversiktlig måte </p>
      <p> lage et personlig budsjett på tvers av </p>
<p>alle dine banker og kontoer </p><br>
      <p>LES MER</p>
    </div>
</div>
    
<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:550px">
      <img src="img/pcIcon.png"class="w3-image" width="200" height="200"></img>
      <h3>Full oversikt fra ett sted</h3><br>

      <p>Med Via fra DNB kan du få en oversikt over alle </p>
  <p>bankkontoene dine fra alle dine banker på en side. </p>
  <p>Du trenger bare å logge inn i Via og du har du har full kontroll</p><br><br><br>
  <p>LES MER</p>
  </div>
</div>


<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:550px">
      <img src="img/phoneIcon.png" class="w3-image" width="100" height="200"></img>
      <h3>Mobilapp</h3>
<br>
  <p>Via er også tilgjengelig som mobilapplikasjon</p>
  <p>Last ned Via fra Google PLay eller App Store </p>
  <p>og ha oversikt over alle dine kontoer hvor som helst</p><br><br><br>
  <p>LES MER OG LAST NED APPEN HER</p>
  </div>
</div>
</div>
<div class="w3-row-padding w3-center w3-margin-top">
    <div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:550px">
<a class="twitter-timeline" data-height="420" href="https://twitter.com/realDonaldTrump">Tweets by realDonaldTrump</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>
    
<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:550px">
      <img src="img/pcIcon.png"class="w3-image" width="200" height="200"></img>
      <h3>Full oversikt fra ett sted</h3><br>

      <p>Med Via fra DNB kan du få en oversikt over alle </p>
  <p>bankkontoene dine fra alle dine banker på en side. </p>
  <p>Du trenger bare å logge inn i Via og du har du har full kontroll</p><br><br><br>
  <p>LES MER</p>
  </div>
</div>


<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:550px">
      <div class="forsideicon"><img src="img/phoneIcon.png" class="w3-image" width="100" height="200"></img></div>
      <h3>Mobilapp</h3>
<br>
  <p>Via er også tilgjengelig som mobilapplikasjon</p>
  <p>Last ned Via fra Google PLay eller App Store </p>
  <p>og ha oversikt over alle dine kontoer hvor som helst</p><br><br><br>
  <p>LES MER OG LAST NED APPEN HER</p>
  </div>
</div>
<div class="w3-threethird">
<div id="emptyDiv"></div>
</div>

<!-- Script for Sidenav, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
    var x = document.getElementById("mySidenav");
    x.style.width = "100%";
    x.style.textAlign = "center";
    x.style.fontSize = "50px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/arrow.js"></script>
<!-- Footer -->
<footer id="footforside" class="w3-container dnbGrey w3-padding-16">
  <h3>VIA</h3>
  <p>by DNB</p>
  <!--<div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span> 
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>-->
  <p>© 2016 - 2017 DNB ASA</p>
</footer>
</body>
</html>

