//Pour agrandir les photos du Portfolio au click
//La fonction agrandirPhoto est appelée lorsqu'une des div avec la classe .photographe est cliquée. Elle prend deux paramètres : src pour l'emplacement de l'image et description pour le texte de la description de l'image.
function agrandirPhoto(element, src, description) {
  //Création de l'élément modal (div avec la classe .modal) :
  const modal = document.createElement('div');
  modal.classList.add('modal');

  //Création de l'élément img pour afficher l'image agrandie :
  const img = document.createElement('img');
  img.src = src;
  img.alt = description;

  //Création de l'élément p pour la description de l'image :
  const caption = document.createElement('p');
  caption.textContent = description;

  //Ajout des éléments dans le modal :
  modal.appendChild(img);
  modal.appendChild(caption);
  //Ajout du modal à la page :
  document.body.appendChild(modal);

  //Écouteur d'événement pour fermer le modal :
  modal.addEventListener('click', function() {
      modal.remove();
  });
}



//Pour gérer mon fondu par section
document.addEventListener('DOMContentLoaded', function() {
  const sections = document.querySelectorAll('section');

  function fadeInSections() {
      sections.forEach(section => {
          const sectionTop = section.getBoundingClientRect().top;
          const sectionBottom = section.getBoundingClientRect().bottom;

          // Définir une condition pour détecter la visibilité de la section dans la fenêtre
          if (sectionTop < window.innerHeight && sectionBottom >= 300) {
              section.style.opacity = '1';
          } else {
              section.style.opacity = '0';
          }
      });
  }

  // Appeler la fonction au chargement initial et au scroll
  fadeInSections();
  window.addEventListener('scroll', fadeInSections);
});