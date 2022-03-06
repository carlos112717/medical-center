// Este código pone una imagen de fondo al body del documento.

img = new Image();
img.src = "img/nurse-pn.png";
img.onload = function() {
  document.body.style.backgroundImage = "url(" + img.src + ") no-repeat";   // no-repeat para que la imagen no se repita en el fondo" ;

};