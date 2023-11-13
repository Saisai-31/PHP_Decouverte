function agrandirPhoto(numero) {
  var photo = document.querySelector(".photographe:nth-child(" + numero + ") .photo");
  photo.classList.toggle("agrandie");
}