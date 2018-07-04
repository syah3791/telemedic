<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <title>vchat - a simple video chat app</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->

    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    
    <script src="https://webrtc.github.io/adapter/adapter-4.2.2.js"></script>
    <script src="https://simplewebrtc.com/latest-v3.js"></script>
    <script src="<?php echo base_url('assets/js/videos.js') ?>"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <h1><a href="/">vchat</a></h1>
        <h2><a href="/">a simple video chat app</a></h2>
      </header>


      <div id="remotes" class="row">
        <div class="col-md-6">
          <div class="videoContainer">
            <video id="selfVideo" width="500" height="100"></video>
            <meter id="localVolume" class="volume" min="-45" max="-20" high="-25" low="-40"></meter>
          </div>
        </div>
      </div>
    </div>

    <footer>
      
    </footer>

    <script>
      enableVideo();
    </script>
  </body>
</html>
