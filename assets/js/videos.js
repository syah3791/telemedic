
// Enable video on the page.
function enableVideo() {
  loadSimpleWebRTC();
}

// Dynamically load the simplewebrtc script so that we can
// kickstart the video call.
function loadSimpleWebRTC() {
  var webrtc = new SimpleWebRTC({
    // the id/element dom element that will hold "our" video
    localVideoEl: 'selfVideo',
    // the id/element dom element that will hold remote videos
    remoteVideosEl: '',
    // immediately ask for camera access
    autoRequestMedia: true,
    debug: false,
    detectSpeakingEvents: true,
    autoAdjustMic: false
  });
  webrtc.on('readyToCall', function () {
    // you can name it anything
    webrtc.joinRoom('your awesome room name');
  });



}
