<!-- title header -->
<div>
	<div class="w3-container padding-baru">
	  <div class="w3-row-padding">
	    <div class="w3-col l8 m6">
	      <h3 class="w3-text-black"><b>Menjadi Partner FindLaundry</b></h3>
	    </div>
	  </div>
	</div>
	<div class="w3-content w3-light-grey" style="max-width:450px;margin-bottom:20px;padding-left: 109px; max-height: 50px;">
	  <div class="w3-row-padding">
	    <div class="w3-col l8 m6 w3-section">
			<i class="w3-text-black fa fa-check-circle icon-blue w3-xxlarge"></i>
			<i class="w3-text-black fa fa-circle icon-blue"></i>
			<i class="w3-text-black fa fa-circle icon-blue"></i>
			<i class="w3-text-black fa fa-circle icon-blue"></i>
		    <i class="w3-text-black fa fa-check-circle w3-text-dark-grey w3-xxlarge"></i>
		    <i class="w3-text-black fa fa-circle w3-text-dark-grey"></i>
		    <i class="w3-text-black fa fa-circle w3-text-dark-grey"></i>
		    <i class="w3-text-black fa fa-circle w3-text-dark-grey"></i>
		    <i class="w3-text-black fa fa-check-circle w3-text-dark-grey w3-xxlarge"></i>
	    </div>
	  </div>
	</div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:800px;margin-bottom:80px">

	<div class="w3-padding-16 w3-white w3-border">
		<div class="w3-content" style="max-width:500px">
			<div class="w3-row-padding">
				<div class="w3-col w3-margin-bottom">
				  <h4>Langkah 1 - <b class="icon-blue">Isi Informasi Laundry</b></h4>
				</div>
				<div class="w3-container">
				<div class="w3-content" style="max-width:500px">
			      <div class="w3-row-padding" style="margin:0 -16px;">
			      	<form action="<?php echo base_url(); ?>index.php/CGabung/aksi_input2" method="post">
			      	  <!-- <label>Nama Lengkap</label>
			          <radiobutton class="w3-input w3-border w3-margin-bottom" type="text"> -->

			          <label>Nama Laundry</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="nama laundry" name="namaLaundry" id="namaLaundry">
			
			          <label>Nomor Identitas Pribadi (KTP) / Nomor Surat Izin Usaha</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="nomor surat" name="surat" id="surat">

			          <label>Email</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="email" name="email" id="email">

			          <label>Nomor Telepon</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="nomor telepon" name="noTelpon" id="noTelpon">
			
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

                  	  <label>Deskripsi</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="deskripsi" name="deskripsi" id="deskripsi">

			          <!-- <label>Upload Gambar</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text"> -->

			          <hr>
			      	  <p><button class="w3-button dark-blue w3-right">Next</a></button></p>
			        </form>
			        
			      </div>
			    </div>
			</div>
	    </div>
	</div>
</div>