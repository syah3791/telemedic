<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    
  <?php if($this->session->id != ''):?>
    <script src="<?php echo base_url('assets/js/noti.js') ?>"></script>
    <script src="https://simplewebrtc.com/latest-v3.js"></script>
    <script src="https://webrtc.github.io/adapter/adapter-4.2.2.js"></script>  
  <?php endif;?>  
  <script src="<?php echo base_url('assets/js/videos.js') ?>"></script>
  <script src="<?php echo base_url('assets/css/custom.css') ?>"></script>
 
	<title>Login atau Register</title>
</head>
<body>
  <header>
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="<?php if($this->session->id != '') echo base_url('home'); else  echo base_url();?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <?php           
          if($this->session->username != ''):         
        ?>
          <a class="py-2 d-none d-md-inline-block" href="logout"><?php echo $this->session->username;?> Logout</a>
        <?php endif ?>
      </div>
    </nav>
  </header>
	<div class="body">
    <div class="container">