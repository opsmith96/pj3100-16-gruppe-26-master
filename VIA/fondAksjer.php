<!DOCTYPE html>
<html>
<title>Via by DNB</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/css.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-container w3-top dnbGrey w3-large w3-padding" style="z-index:4">
  <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <a href="logout.php"><span class="w3-right">Logg ut</span></a>
        <a href="https://tawk.to/viachat" target="_blank"><div class="chatbtn">CHAT</div></a>

</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white" style="z-index:0;width:230px;" id="mySidenav"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/ProfilePic.jpg"  class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8">
      <span>Velkommen, <strong>Bruker</strong></span><br>
      <a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
<a href="Favoritter.php" class="w3-padding w3-cog"><i class="fa fa-users fa-fw"></i>Favoritter</a>
  <!--<a href="#" class="w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a> -->
  <!--<a href="#" class="w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a> -->
  <a href="#" class="w3-padding"><i class="fa fa-cog fa-fw"></i>   Instillinger</a><br><br>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Min oversikt</b></h5>
  </header>

  <A href="konto.php"><div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container dnbColor w3-padding-16" >
          <div class="w3-left"><img src="img/BankIcon.png" style="height:50px"</img></div>
        <div class="w3-right">
          <h3>5</h3>
        </div>
        <div class="w3-clear"></div>
        <div class="button2"><h4>Kontoer</h4></div>
      </div>
    </div></A>
      
    <a href="forsikringer.php"> <div class="w3-quarter">
      <div class="w3-container dnbColor w3-padding-16">
          <div class="w3-left"><img src="img/forsikringIcon.png" style="height:50px"></img></div>
        <div class="w3-right">
          <h3>3</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Forsikring</h4>
      </div>
        </div></a>
      
    <a href="fondAksjer.php"><div class="w3-quarter">
      <div class="w3-container dnbColor2 w3-padding-16">
          <div class="w3-left"><img src="img/fondIcon.png" style="height:50px"></img></div>
        <div class="w3-right">
          <h3>3</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Fond og aksjer</h4>
      </div>
    </div></a>
    
    <a href="budsjett.php"><div class="w3-quarter">
      <div class="w3-container dnbColor w3-text-white w3-padding-16">
          <div class="w3-left"><img src="img/nett_mobil.png" style="height:50px"></img> </div>        <div class="w3-right">
          <h3>0</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Budsjett</h4>
      </div>
    </div>
    </a>
    
    </div>
    
          <div class="w3-threethird">
        <h5>Fond og aksjer</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td class="w3-quarter">DNB</td>
            <td class="w3-quarter">Teknologiaksjefond</td>
              <td class="w3-quarter"><div class="button1">Se utvikling</div></td>             
            <td class="w3-green" class="w3-quarter">+3,7%</td>
            </tr>
            
             <tr>
            <td class="w3-quarter">DNB</td>
            <td class="w3-quarter">Ettellerannetfond</td>
            <td class="w3-quarter"><div class="button1">Se utvikling</div></td>             
            <td class="w3-red" class="w3-quarter">-2,3%</td>
            </tr> 
            
             <tr>
            <td class="w3-quarter">DNB</td>
            <td class="w3-quarter">Dårligfond</td>
            <td class="w3-quarter"><div class="button1">Se utvikling</div></td> 
            <td class="w3-red" class="w3-quarter">-11,8%</td>
            <tr>
            <td class="w3-quarter"><div class="button1">+Legg til fond/akjse</div></td>          </tr>
        </table>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer id="foot" class="w3-container w3-padding-16 dnbGrey">
    <h4>FOOTER</h4>
    <p><p>© 2016 - 2017 DNB ASA</p></p>

  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>