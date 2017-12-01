<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">

    <!-- Header -->
    <header id="akun">
      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
      <div class="w3-container">
        <h1><b>Panel Akun</b></h1>
        <div class="w3-section w3-bottombar w3-padding-16">
        </div>
        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
          <h3 class="w3-text-grey w3-padding-16 w3-container">Informasi Pribadi</h3>
          <div class="w3-container">
            <form >
              <label>Provinsi</label>
              <select class="w3-input w3-border w3-margin-bottom">
                <option>Pilih Provinsi</option>
                <option></option>
              </select>

              <label>Kota/Kabupaten</label>
              <select class="w3-input w3-border w3-margin-bottom">
                <option>Pilih Provinsi</option>
                <option></option>
              </select>

              <label>Kecamatan</label>
              <select class="w3-input w3-border w3-margin-bottom">
                <option>Pilih Provinsi</option>
                <option></option>
              </select>

              <label>Kode Pos</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="kode pos" name="kodePos" id="kodePos">

              <label>Alamat Lengkap (Jalan, RT/RW, Blok/Gang)</label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="alamat lengkap" name="alamat" id="alamat">
              <hr>
            </form>
          </div>
        </div>
      </div>
    </header>
  </div>

  

  