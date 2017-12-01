<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/mystyle.css" media="screen" />
<title>Project Laundry</title>
<meta charset="utf-8">
</head>

<body>

 <nav>
    <div class="orange">
      <a href="Laundry.html"> <img src="<?php echo base_url();?>assets/img/findLaundry.png" width="150" height="64"> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Menjadi Penyedia Jasa</a></li>
        <li><a href="sass.html">Pelayanan Pelanggan</a></li>
        <li><a href="badges.html">Lacak Pesanan</a></li>
        <li><a href="<?php echo base_url();?>login.html">Masuk</a></li>
      </ul>
    </div>
  </nav>
  
   <div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo base_url();?>assets/img/laundry1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Temukan, Pilih, dan Pesan Jasanya</h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url();?>assets/img/laundry2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="light grey-text text-lighten-3">Dapatkan harga promo dengan cara berlangganan</h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url();?>assets/img/laundry3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url();?>assets/img/laundry4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Temukan jasa Laundry sesuai budget anda</h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
    </ul>
  </div>
            
  	    <footer class="orange">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">FindLaunDry</h5>
                <p class="grey-text text-lighten-4">Indralaya</p>
                
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Follow Us</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Path</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright findlaundry.com
            
            </div>
          </div>
        </footer>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.js"></script>

<script>
  $(document).ready(function(){
      $('.slider').slider();
    });
</script>

</body>
</html>