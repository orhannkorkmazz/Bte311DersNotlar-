document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        acDuyuru();
    }, 1000);
  });
  
  function acDuyuru() {
    var duyuruContainer = document.getElementById("duyuruContainer");
    duyuruContainer.style.display = "block";
    duyuruContainer.style.opacity = 1;
    duyuruContainer.style.visibility = "visible";
    setTimeout(function () {
        kapatDuyuru();
    }, 5000);
  }
  
  function kapatDuyuru() {
    var duyuruContainer = document.getElementById("duyuruContainer");
    duyuruContainer.style.opacity = 0;
    duyuruContainer.style.visibility = "hidden";
  }