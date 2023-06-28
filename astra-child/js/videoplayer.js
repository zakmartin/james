var modal = document.getElementById("myModal");
  var videoLink = document.getElementById("video-link");
  var span = document.getElementsByClassName("close")[0];
  var video = document.getElementById("myVideo");

  videoLink.onclick = function (event) {
    event.preventDefault();
    modal.style.display = "block";
    video.play();
  };

  span.onclick = function () {
    modal.style.display = "none";
    video.pause();
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
      video.pause();
    }
  };