
      <form class="jumbotron text-center">
        <h1>Login</h1>
        <p>Silahkan masuk untuk mengakses fiturnya</p>
      </form>
      <form name="form1" id="form1" class="text-center" action="<?php echo base_url('login/login')?>" method="POST">
        <input type="text" placeholder="Username" name="username" required>
        <input type="password" placeholder="Password" name="password" required>
        <input type="submit" class="btn btn-primary" value="Login" name="submit">
        <br></br>
        <p>Belum punya akun? Silahkan mendaftar <a href="<?php echo base_url('register');?>" method="POST">disini</a></p>
      </form>
 



