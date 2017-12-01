<!-- title header -->
<div>
	<div class="w3-container padding-baru">
	  <div class="w3-row-padding">
	    <div class="w3-col w3-margin-bottom">
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
		    <i class="w3-text-black fa fa-check-circle icon-blue w3-xxlarge"></i>
		    <i class="w3-text-black fa fa-circle icon-blue"></i>
		    <i class="w3-text-black fa fa-circle icon-blue"></i>
		    <i class="w3-text-black fa fa-circle icon-blue"></i>
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
				  <h4>Langkah 1 - <b class="icon-blue">Lengkapi Informasi Layanan</b></h4>
				</div>
				<div class="w3-container">
				<div class="w3-content" style="max-width:500px">
			      <div class="w3-row-padding" style="margin:0 -16px;">
			      	<form action="<?php echo base_url(); ?>index.php/CGabung/aksi_input3a" method="post">
			      	  <!-- laundry kilo -->
			          <input id="Kilo" class="w3-check" type="checkbox" style="max-width: 18px; max-height: 18px" value="K001" name="idKategori">
    				  <label class="w3-margin-bottom">Apakah jenis usaha laundry anda Laundry Kilo ?</label>
    				  <br><br>
			
			          <label>Nama Layanan</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="namaLayanan" id="namaLayanan">

			          <label>Harga</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="harga" id="harga">
			        
			          <label>Minimal Order</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="minimalOrder" id="minimalOrder">

			          <p><button class="w3-button dark-blue w3-left">Tambah Layanan</button></p>
			        </form>

			          <br><br><hr>
			        <form action="<?php echo base_url(); ?>index.php/CGabung/aksi_input3b" method="post">
			          <!-- laundry satuan -->
			          <input id="satu" class="w3-check" type="checkbox" style="max-width: 18px; max-height: 18px" name="idKategori2">
    				  <label class="w3-margin-bottom">Apakah jenis usaha laundry anda Laundry Satuan ?</label>
    				  <br><br>

    				  <label>Nama Layanan</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="namaLayanan" id="namaLayanan">

			          <label>Harga</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="harga" id="harga">
			        
			          <label>Minimal Order</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="minimalOrder" id="minimalOrder">

			          <p><button class="w3-button dark-blue w3-left">Tambah Layanan</button></p>
			        </form>

			          <br><br><hr>
			        <form action="<?php echo base_url(); ?>index.php/CGabung/aksi_input3c" method="post">
			          <!-- dry cleaning -->
			          <input id="dry" class="w3-check" type="checkbox" style="max-width: 18px; max-height: 18px" name="idKategori3">
    				  <label class="w3-margin-bottom">Apakah jenis usaha laundry anda Dry Cleaning ?</label>
    				  <br><br>

    				  <label>Nama Layanan</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="namaLayanan" id="namaLayanan">

			          <label>Harga</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="harga" id="harga">
			        
			          <label>Minimal Order</label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" name="minimalOrder" id="minimalOrder">

			          <p><button class="w3-button dark-blue w3-left">Tambah Layanan</button></p>
			        </form>

			          <br><br><hr>
			      	  <p><button class="w3-button dark-blue w3-right"><a href="<?php echo base_url(); ?>index.php/CMain">Selesai</a></button></p>
			        
			      </di>
			    </div>
			</div>
	    </div>
	</div>
</div>