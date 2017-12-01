<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <div class="w3-content w3-section" style="max-width:1500px">
    <img class="w3-image mySlides" src="<?php echo base_url();?>assets/img/1.jpg" alt="Laundry" width="1500" height="700">
    <img class="w3-image mySlides" src="<?php echo base_url();?>assets/img/slide5.jpg" alt="Laundry" width="1500" height="700">
    <img class="w3-image mySlides" src="<?php echo base_url();?>assets/img/1.jpg" alt="Laundry" width="1500" height="700">
  </div>
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black transparant">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Lokasi');"><i class="fa fa-map-marker w3-margin-right"></i>Lokasi Laundry</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Nama');"><i class="fa fa-building w3-margin-right"></i>Nama Laundry</button>
    </div>

    <!-- Tabs -->
    <div id="Lokasi" class="w3-container w3-white transparant w3-padding-16 myLink">
      <h3>Temukan semua Laundry terdekat di lokasi anda !</h3>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-third">
          <label>Provinsi</label>
          <select class="w3-input w3-border w3-margin-bottom">
            <option>pilih provinsi</option>
            <option></option>
          </select>
        </div>
        <div class="w3-third">
          <label>Kota/Kabupaten</label>
          <select class="w3-input w3-border w3-margin-bottom">
            <option>pilih kota/kabupaten</option>
            <option></option>
          </select>
        </div>
        <div class="w3-third">
          <label>Kecamatan</label>
          <select class="w3-input w3-border w3-margin-bottom">
            <option>pilih kecamatan</option>
            <option></option>
          </select>
        </div>
      </div>
      <p><button class="w3-button w3-dark-grey">Search</button></p>
    </div>

    <div id="Nama" class="w3-container w3-white transparant w3-padding-16 myLink">
      <h3>Temukan Laundry langganan anda secara cepat !</h3>
      <input class="w3-input w3-border" type="text" placeholder="cari cepat">
      <p><button class="w3-button w3-dark-grey">Search</button></p>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3>Pilih Layanan Terbaik</h3>
    <h6><strong>Laundry Kilo / Laundry Satuan / Dry Cleaning</strong></h6>
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="<?php echo base_url();?>assets/img/6.jpg" alt="Cinque Terre" style="width:100%">
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft dark-blue w3-padding">Laundry Kilo</div>
            <img src="<?php echo base_url();?>assets/img/laund1.jpg" alt="New York" style="width:100%">
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft dark-blue w3-padding">Laundry Satuan</div>
            <img src="<?php echo base_url();?>assets/img/laund2.jpg" style="width:100%">
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft dark-blue w3-padding">Dry Cleaning</div>
            <img src="<?php echo base_url();?>assets/img/laund3.jpg" alt="Pisa" style="width:100%">
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft dark-blue w3-padding">Dapatlan diskon <b>10%</b></div>
            <img src="<?php echo base_url();?>assets/img/laund2.jpg" alt="Paris" style="width:100%">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-container w3-margin-top">
    <h3>Rekomendasi</h3>
  </div>
<!-- Photo Grid-->
  <div class="w3-row-padding">
  <?php foreach ($laundry as $key) {?>
  
    <div class="w3-third w3-container w3-margin-bottom">
    <a href="<?php echo base_url('index.php/CLaundry/order/'.$key['idLaundry']) ?>">
      <img src="<?php echo base_url();?>assets/img/<?php echo $key['gambar']; ?>" alt="Norway" style="width:100%; height: 260px;" class="w3-hover-opacity">
    </a>
      <div class="w3-container w3-white">
        <p><b><?php echo $key['namaLaundry'] ?></b></p>
        <p><?php echo $key['alamat'] ?></p>
        <p><?php echo $key['kategori'] ?></p>

        <div class=" w3-white w3-round-xlarge">
            <i class="fa fa-star w3-large w3-text-orange"></i>
            <i class="fa fa-star w3-large w3-text-orange"></i>
            <i class="fa fa-star w3-large w3-text-orange"></i>
            <i class="fa fa-star w3-large w3-text-dark-grey w3-opacity"></i>
            <i class="fa fa-star w3-large w3-text-dark-grey w3-opacity"></i>
          </div>
      </div>
    </div>
  <?php }?>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item dark-blue w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>