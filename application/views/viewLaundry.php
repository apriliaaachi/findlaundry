<br><br>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    <?php foreach($laundry as $l){ ?>
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="<?php echo base_url();?>assets/img/<?php echo $l['gambar']; ?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $l['namaLaundry']; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large icon-blue"></i><?php echo $l['alamat']; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large icon-blue"></i><?php echo $l['email']; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large icon-blue"></i><?php echo $l['noTelpon']; ?></p>
          <hr>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-star fa-fw w3-margin-right icon-blue"></i>Rate Laundry</b></p>
          <div class=" w3-white w3-round-xlarge" style="margin-left: 40px;">
            <i class="fa fa-star w3-large w3-text-orange"></i>
            <i class="fa fa-star w3-large w3-text-orange"></i>
            <i class="fa fa-star w3-large w3-text-orange"></i>
            <i class="fa fa-star w3-large w3-text-dark-grey w3-opacity"></i>
            <i class="fa fa-star w3-large w3-text-dark-grey w3-opacity"></i>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-4 w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-cloud fa-fw w3-margin-right w3-xxlarge icon-blue"></i>Daftar Layanan</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $l['deskripsi']; ?></b></h5>
          <?php if($kategori!=null) {foreach ($kategori as $key) { ?>
          <h7 class="w3-opacity"><?php echo $key['namaKategori']?>, </h7>
          <?php }} ?>
          <hr>

        </div>
      </div>
      <?php }; ?>
      <div class="w3-border">
        <div class="w3-bar">
          <?php if ($kategori!=null) {foreach ($kategori as $key) { ?>
            <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'<?php echo $key['idKategori'] ?>')"><?php echo $key['namaKategori'];?></button>
          <?php }} ?>
          <button class="w3-bar-item w3-button testbtn w3-padding-16 w3-right w3-third" onclick="document.getElementById('checkout').style.display='block'">Checkout</button>
          <label class="w3-right w3-bar-item w3-padding-16">Total</label>
        </div>
      </div> 

      <!-- Checkout Modal -->
      <div id="checkout" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom" style="max-width: 700px">
          <div class="w3-container dark-blue w3-display-container">
            <span onclick="document.getElementById('checkout').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h4>Pick Up</h4>

          </div>
          <br>
          <div class="w3-container">
            <div class="w3-content" style="max-width:500px; margin-left: 50px">
              <div class="w3-row-padding" style="margin:0 -16px;">
                <form>
                  <label>Tanggal</label>
                  <input type="text" name="tanggal1" id="tanggal" class="w3-input w3-border w3-margin-bottom" placeholder="dd/mm/yy" />
                  
                  <label>Provinsi</label>
                  <select class="w3-input w3-border w3-margin-bottom">
                    <option>pilih provinsi</option>
                    <option></option>
                  </select>

                  <label>Kota/Kabupaten</label>
                  <select class="w3-input w3-border w3-margin-bottom">
                    <option>pilih kota/kabupaten</option>
                    <option></option>
                  </select>

                  <label>Kecamatan</label>
                  <select class="w3-input w3-border w3-margin-bottom">
                    <option>pilih kecamatan</option>
                    <option></option>
                  </select>

                  <label>Kode Pos</label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="kode pos" name="kodePos">

                  <label>Alamat Lengkap</label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="jalan, rt/rw, blok/gang" name="alamat1">
                
              </div>
            </div>
          </div>
          <div class="w3-container dark-blue w3-display-container">
            <h4>Delivery</h4>
            
          </div>
          <br>
          <div class="w3-container">
            <div class="w3-content" style="max-width:500px; margin-left: 50px">
              <div class="w3-row-padding" style="margin:0 -16px;">
                <form>
                  <label>Tanggal</label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="dd/mm/yy" name="tanggal2">
                  
                  <label>Provinsi</label>
                  <select class="w3-input w3-border w3-margin-bottom">
                    <option>pilih provinsi</option>
                    <?php foreach ($provinsi as $key) { ?>
                    
                    <option><?php echo $key['namaProvinsi'] ?></option>

                    <?php } ?>
                  </select>

                  <label>Kota/Kabupaten</label>
                  <select class="w3-input w3-border w3-margin-bottom">
                    <option>pilih kota/kabupaten</option>
                    <?php foreach ($kota as $key) { ?>
                    
                    <option><?php echo $key['namaKota'] ?></option>

                    <?php } ?>
                  </select>

                  <label>Kecamatan</label>
                  <select class="w3-input w3-border w3-margin-bottom">
                    <option>pilih kecamatan</option>
                    <?php foreach ($kecamatan as $key) { ?>
                    
                    <option><?php echo $key['namaKecamatan'] ?></option>

                    <?php } ?>>
                  </select>

                  <label>Kode Pos</label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="kode pos" name="kodePos">

                  <label>Alamat Lengkap</label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="jalan, rt/rw, blok/gang" name="alamat2">
                </form>
              </div>
            </div>
          </div>
          <div class="w3-container dark-blue w3-display-container">
            <h4>Processing</h4>
            
          </div>
          <br>
          <div class="w3-container">
            <div class="w3-content" style="max-width:500px; margin-left: 50px">
              <div class="w3-row-padding" style="margin:0 -16px;">
                <form>
                  <label>Pewangi Pakaian</label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="pilih pewangi pakaian">
                
                  <label>Catatan Tambahan</label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="tambahkan catatan penting">
                </form>
              </div>
            </div>
          </div>
          <div class="w3-container dark-blue w3-display-container">
            <h4>Detail Pesanan</h4>
        
          </div>
          <br>
          <div class="w3-container">
            <div class="w3-content" style="max-width:500px; margin-left: 50px">
              <div class="w3-row-padding" style="margin:0 -16px;">
                <p>Semua detail pesanan disini, harga, jumlah, total</p>
                <button type="button" class="w3-button w3-padding-large dark-blue w3-margin-bottom w3-right">Konfirmasi Pesanan</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Laundry Kiloan -->
      <div id="K001" class="city w3-animate-opacity">
        <div class="w3-container w3-card-4 w3-white w3-margin-bottom">
          <?php foreach ($kodeJasa as $key) { if($key['idKategori']=='K001') {?>
          <div class="w3-row-padding" style="margin:0 -16px;">
            <div class="w3-container w3-half">
              <h4 class="w3-opacity"><b><?php echo $key['namaLayanan'];?></b></h4>
              <h6 class="icon-blue"><i class="fa fa-money fa-fw w3-margin-right"></i><?php echo $key['harga'] ?>/<?php echo $key['satuan'] ?></h6>
              <h7 class="icon-blue"><?php echo $key['namaKategori'];?></h7>
              <hr>
            </div>
            
            <div class="w3-half">
              <?php $a=0; ?>
              <h5 class="w3-opacity">Kuantitas</h5>
              <i class="fa fa-chevron-left fa-fw w3-margin-top w3-large icon-blue"><?php $a+1; ?></i>
              <label><?php echo $a; ?></label>
              <i class="fa fa-chevron-right fa-fw w3-margin-top w3-large icon-blue"><?php $a-1; ?></i>
            </div>
          </div>
          <?php } }?>
        </div>
      </div>

      <!-- Laundry Satuan -->
      <div id="K002" class="city w3-animate-opacity">
        <div class="w3-container w3-card-4 w3-white w3-margin-bottom">
          <?php foreach ($kodeJasa as $key) { if($key['idKategori']=='K002') {?>
          <div class="w3-row-padding" style="margin:0 -16px;">
            <div class="w3-container w3-half">
              <h4 class="w3-opacity"><b><?php echo $key['namaLayanan'];?></b></h4>
              <h6 class="icon-blue"><i class="fa fa-money fa-fw w3-margin-right"></i><?php echo $key['harga'] ?>/<?php echo $key['satuan'] ?></h6>
              <h7 class="icon-blue"><?php echo $key['namaKategori'];?></h7>
              <hr>
            </div>
            
            <div class="w3-half">
              <h5 class="w3-opacity">Kuantitas</h5>
              <i class="fa fa-chevron-left fa-fw w3-margin-top w3-large icon-blue"></i>
              <label>0</label>
              <i class="fa fa-chevron-right fa-fw w3-margin-top w3-large icon-blue"></i>
            </div>
          </div>
          <?php } } ?>
        </div>
      </div>

      <!-- Laundry Dry Cleaning -->
      <div id="K003" class="city w3-animate-opacity">
        <div class="w3-container w3-card-4 w3-white w3-margin-bottom">
          <?php foreach ($kodeJasa as $key) { if($key['idKategori']=='K003') {?>
          <div class="w3-row-padding" style="margin:0 -16px;">
            <div class="w3-container w3-half">
              <h4 class="w3-opacity"><b><?php echo $key['namaLayanan'];?></b></h4>
              <h6 class="icon-blue"><i class="fa fa-money fa-fw w3-margin-right"></i><?php echo $key['harga'] ?>/<?php echo $key['satuan'] ?></h6>
              <h7 class="icon-blue"><?php echo $key['namaKategori'];?></h7>
              <hr>
            </div>
            
            <div class="w3-half">
              <h5 class="w3-opacity">Kuantitas</h5>
              <i class="fa fa-chevron-left fa-fw w3-margin-top w3-large icon-blue"></i>
              <label>0</label>
              <i class="fa fa-chevron-right fa-fw w3-margin-top w3-large icon-blue"></i>
            </div>
          </div>
          <?php } }?>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>