<div class="jumbotron" data-spy="affix">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div id="remotes" class="bg-light box-shadow" style="width: 100%; height: 100%;">
          <div class="overlay">
            <video id="selfVideo" width="20%" height="20%" style="left:0;"></video>
          </div>               
        </div>                                
      </div>
      <div class="col-sm-3">
        <div class="container">
          <div class="list-group-item list-group-item-action active">Online</div> 
          <div id="online" class="list-group">          
          </div>
        </div>
      </div>
    </div>
    <button id="cancel2" class="btn btn-default">Cancel</button>
  </div> 
</div>
  

    <script>
      setInterval(function(){
        load_unseen_notification();;
      }, 5000);
      enableVideo();
    </script>
    <style>
      .overlay {
          position:absolute;
          top:0;
          left:0;
          z-index:1;
      }
      .volume {
          position: absolute;
          right: 17%;
          width: 20%;
          bottom: 2px;
          height: 10px;
      }
    </style>