<!DOCTYPE html>
<html>
<title>FindLaundry</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> <!-- main -->
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" media="screen" />
<body class="w3-light-grey">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
    <a href="<?php echo base_url(); ?>index.php/CMain"><img src="<?php echo base_url();?>assets/img/findLaundry6.png"   style="height: 34px; width:120px;" href="<?php echo base_url(); ?>index.php/CMain"></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="<?php echo base_url(); ?>index.php/CLogin/logout" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>

<br><br><br>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="<?php echo base_url();?>assets/img/<?php $data = $this->session->userdata("dataMember"); echo $data[0]['gambar'] ?>" style="width:45%;" class="w3-round"><br><br>
    <h4><i class="fa-fw w3-margin-right"></i><b><?php $data = $this->session->userdata("dataMember"); echo $data[0]['namaLengkap'] ?></b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="<?php echo base_url(); ?>index.php/CAdminView" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa-fw w3-margin-right"></i>Akun</a> 
    <a href="<?php echo base_url(); ?>index.php/CAdminView/tabelTransaksi" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa-fw w3-margin-right"></i>Tabel Transaksi</a> 
    <a href="<?php echo base_url(); ?>index.php/CAdminView/bantuan" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa-fw w3-margin-right"></i>Bantuan</a>
  </div>
</nav>

  
<!-- contents -->
<?php echo $contents; ?>

<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green"></a></p>
</footer>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" dark-blue", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " dark-blue";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();

//carousel main
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}

// Status pesanan
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}



// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

</body>
</html>
