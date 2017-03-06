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
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
  <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i> Menu</button>
        <a href="https://tawk.to/viachat"><div class="chatbtn">CHAT</div></a>

    <a href="logout.php"><span class="w3-right">Logg ut</span></a>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white" style="z-index:0;width:230px;top:5%;" id="mySidenav"><br>
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
  <a href="#" class="w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Oversikt</a>
  <!--<a href="#" class="w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a> -->
  <!--<a href="#" class="w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a> -->
  <a href="#" class="w3-padding"><i class="fa fa-cog fa-fw"></i>Instillinger</a><br><br>
</nav>

<!-- !PAGE CONTENT! -->
    <a href="konto.php"><div class="tilbakePil">
        <img src="img/pil_VIA_venstre_oransje.png" style="height:40px;"></img>
    </div></a>
<div class="transaksjoner">
        <h5>DNB SPAREKONTO</h5>
    
            <table class="w3-table w3-striped w3-white" >
                <tr>
                    <td class="w3-quarter">Varekjøp</td>
                    <td class="w3-quarter">02.03.17</td>
                    <td class="w3-quarter">-55.80</td>
                    <td class="w3-quarter">10 487.20</td>
                </tr>
                <tr>
                    <td class="w3-quarter">Overføring</td>
                    <td class="w3-quarter">28.02.17</td>
                    <td class="w3-quarter">-400.00</td>
                    <td class="w3-quarter">10 543.00</td>
                </tr>                
                <tr>
                    <td class="w3-quarter">Gebyr</td>
                    <td class="w3-quarter">20.02.17</td>
                    <td class="w3-quarter">-150.00</td>
                    <td class="w3-quarter">10 943.00</td>
                </tr>
                <tr>
                    <td class="w3-quarter">Stipend</td>
                    <td class="w3-quarter">15.02.17</td>
                    <td class="w3-quarter">+7 796.00</td>
                    <td class="w3-quarter">11 093.00</td>
                </tr>
                <tr>
                    <td class="w3-quarter">Giroinbetaling</td>
                    <td class="w3-quarter">13.02.17</td>
                    <td class="w3-quarter">-299.00</td>
                    <td class="w3-quarter">3 297.00</td>
                </tr> 
                <tr>
                    <td class="w3-quarter">Overførsel</td>
                    <td class="w3-quarter">10.02.17</td>
                    <td class="w3-quarter">+300.00</td>
                    <td class="w3-quarter">3 596.00</td>
                </tr>
                <tr>
                    <td class="w3-quarter">Varekjøp</td>
                    <td class="w3-quarter">10.02.17</td>
                    <td class="w3-quarter">-30.00</td>
                    <td class="w3-quarter">3 626.00</td>
                </tr>
                <tr>
                    <td class="w3-quarter">Varekjøp</td>
                    <td class="w3-quarter">10.02.17</td>
                    <td class="w3-quarter">-30.00</td>
                    <td class="w3-quarter">3 656.00</td>
                </tr>
                <tr>
                    <td class="w3-quarter">Varekjøp</td>
                    <td class="w3-quarter">05.02.17</td>
                    <td class="w3-quarter">-367.00</td>
                    <td class="w3-quarter">4 023.00</td>
                </tr>
                <tr>
                    <td class="w3-quarter">Lønn</td>
                    <td class="w3-quarter">01.02.17</td>
                    <td class="w3-quarter">+4 000.00</td>
                    <td class="w3-quarter">4 390.00</td>
                </tr>
                <tr>
                    <td class="w3-quarter">Giroinnbetaling</td>
                    <td class="w3-quarter">27.01.17</td>
                    <td class="w3-quarter">-100.00</td>
                    <td class="w3-quarter">390.00</td>
                </tr>
        </table>
      </div>
  <!-- Footer -->
  <footer id="foot" class="w3-container w3-padding-16 dnbGrey">
    <h4>FOOTER</h4>
    <p><p>© 2016 - 2017 DNB ASA</p></p>
  </footer>

  <!-- End page content -->
</body>
</html>