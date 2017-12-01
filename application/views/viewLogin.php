<form action="<?php echo base_url('index.php/CLogin/aksi_login'); ?>" method="post">
    <div class="login">
        <input type="text" placeholder="username" name="username"><br>
        <input type="password" placeholder="password" name="password"><br>
        <input type="submit" value="Login">
    </div>
</form>
    <div class="buttom">
        <label>Forgot Password ?</label>
        <a href="<?php echo base_url('index.php/CRegister') ?>"><input  type="button" value="Create an Account"></a>
    </div>
