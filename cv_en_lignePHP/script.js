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



// Surligner mon menu lorsque je fais défiler de section en section
// Récupération des liens du menu
const links = document.querySelectorAll('.navbar-nav .nav-link');

// Fonction pour mettre en surbrillance le lien actif
// C'est une fonction qui sera appelée à chaque événement de défilement de la page.
function highlightNavLink() {
    // Cela boucle à travers toutes les sections de la page.
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        //Cette condition vérifie si la section est visible à l'écran en utilisant la position verticale actuelle de la fenêtre (window.scrollY) et la position de la section par rapport au haut de la page (sectionTop). La valeur -50 est utilisée pour ajuster la zone visible et éviter les surbrillances trop proches du bord.
        if (window.scrollY >= sectionTop - 50 && window.scrollY < sectionTop + sectionHeight - 50) {
            links.forEach(link => link.classList.remove('highlight'));
            const href = '#' + section.getAttribute('id');
            const correspondingLink = document.querySelector(`.navbar-nav .nav-link[href='${href}']`);
            if (correspondingLink) {
                //Si la section est visible, cela ajoute la classe highlight au lien correspondant dans le menu de navigation.
                correspondingLink.classList.add('highlight');
            }
        }
    });
}

// Écouteur d'événement de scroll pour appeler la fonction de mise en surbrillance
//Cela ajoute un écouteur d'événement qui détecte chaque fois que la fenêtre est défilée. Lorsque cela se produit, la fonction highlightNavLink est appelée pour vérifier quelle section est visible et ajouter la classe de surbrillance au lien correspondant.
window.addEventListener('scroll', highlightNavLink);

// Récupération de toutes les sections
//Cela récupère toutes les balises <section> de la page et les stocke dans la variable sections. Ces sections sont utilisées pour déterminer quelles parties de la page sont actuellement visibles lors du défilement.
const sections = document.querySelectorAll('section');

//En résumé, ce code utilise le défilement de la page pour détecter quelles sections sont visibles à l'écran et ajoute une classe spécifique (highlight) aux liens du menu correspondants à ces sections pour les mettre en surbrillance.

