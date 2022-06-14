document.addEventListener('DOMContentLoaded', function () {
  let footerheight = document.querySelector("footer").offsetHeight;
  document.querySelector("body").style.paddingBottom = footerheight;
});