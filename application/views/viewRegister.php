<form action="<?php echo base_url('index.php/CRegister/aksi_register'); ?>" method="post">
    <div class="login">
        <input type="text" placeholder="nama lengkap" name="namaLengkap" id="namaLengkap"><br>
        <input type="text" placeholder="email" name="email" id="email"><br>
        <input type="text" placeholder="username" name="username" id="username"><br>
        <input type="password" placeholder="password" name="password" id="password"><br>
        <input type="submit" value="Daftar">
    </div>
</form>
    <div class="register">
        <label>Sudah Punya Akun  ? Silahkan <a href="<?php echo base_url('index.php/CLogin') ?>">Login</a></label>
    </div>