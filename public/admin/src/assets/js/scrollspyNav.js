function getContainerMargin() { 
  var p = document.querySelector(".main-content > .container");
  var style = p.currentStyle || window.getComputedStyle(p);

  document.querySelector('.sidenav').style.left = style.marginLeft;
  document.querySelector('.sidenav').style.display = 'block';

}
window.addEventListener('load',getContainerMargin,false);
window.addEventListener("resize", getContainerMargin);