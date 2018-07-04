<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <title>vchat - a simple video chat app</title>
    <link href="http://localhost/SIG/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="http://localhost/SIG/css/bootstrap-theme.min.css" rel="stylesheet">

    <script src="http://localhost/SIG/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/SIG/js/bootstrap.min.js"></script>
    
    <script src="https://webrtc.github.io/adapter/adapter-4.2.2.js"></script>
    <script src="./assets/js/auth.js"></script>
    <script src="./assets/js/video.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <h1><a href="/">vchat</a></h1>
        <h2><a href="/">a simple video chat app</a></h2>
      </header>

      <div id="okta-login-container"></div>

      <div class="row">
        <div class="col"></div>
        <div class="col-md-auto align-self-center">
          <p id="login"><b>NOTE</b>: You are not currently logged in. If you'd like to start your own
            chat room please <button type="button" class="btn btn-light" onclick="document.location='/'">log in</button></p>
          <div id="url" class="alert alert-dark" role="alert">
            <span id="roomIntro">ROOM URL</span>: <span id="roomUrl"></span>
          </div>
        </div>
        <div class="col"></div>
      </div>

      <div id="remotes" class="row">
        <div class="col-md-6">
          <div class="videoContainer">
            <video id="selfVideo" oncontextmenu="return false;"></video>
            <meter id="localVolume" class="volume" min="-45" max="-20" high="-25" low="-40"></meter>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <p>Hacked together by <a href="https://twitter.com/rdegges">@rdegges</a>
        and <a href="https://twitter.com/oktadev">@oktadev</a>.</p>
    </footer>

    <script>
      handleLogin();
    </script>
  </body>
</html>
