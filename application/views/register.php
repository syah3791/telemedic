
	<div class="jumbotron text-center">
		<form action="<?php echo base_url('regis');?>" method="POST" class="text-center">
			<h1>Daftar Member</h1>
			<br>
			<input type="text" class="form-control" placeholder="Username" name="username" required data-validation-required-message="Please enter your username" />
			<br>
			<input type="text" class="form-control" placeholder="Full Name" name="name" required/>
			<br>
			<select class="form-control" placeholder="Gender" name="gender" required>
				<option value="Laki-laki">Laki-laki</option>
				<option value="perempuan">perempuan</option>
			</select>
			<br>
			<input type="text" class="form-control" placeholder="e-mail" name="email" required/>
			<br>
			<input type="number" class="form-control" placeholder="Nomor Telepon" name="phone"/>
			<br>
			<input type="password" class="form-control" placeholder="Kata Sandi" name="password" required/>
			<br>
			<p><input type="submit" class="btn btn-danger" value="Daftar" name="register">
		</form>
		</div>
		<form action="<?php echo base_url('login');?>" method="POST" class="text-center">
			<p>Sudah punya akun?</p>
			<input type="submit" class="btn btn-primary" value="Masuk">
		</form>

	
			