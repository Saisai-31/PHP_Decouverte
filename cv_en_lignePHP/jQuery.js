//Menu buger, réglage du petit bug pour qu'il se referme correctement
$(document).ready(function(){
    $('.navbar-toggler').click(function(){
        $('#navbarSupportedContent').toggleClass('show');
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.navbar').length) {
            $('#navbarSupportedContent').removeClass('show');
        }
    });
});
// $(document).ready(function(){ : Cela signifie que lorsque le document HTML est entièrement chargé, la fonction suivante sera exécutée. C'est une bonne pratique pour s'assurer que le JavaScript ne fonctionne pas avant que toute la structure HTML ne soit prête.
// $('.navbar-toggler').click(function(){ : Cette ligne cible l'élément avec la classe .navbar-toggler (le bouton de bascule du menu) et lui attache un gestionnaire d'événements pour le clic. Lorsque ce bouton est cliqué, la fonction suivante sera exécutée.
// $('#navbarSupportedContent').toggleClass('show'); : Lorsque le bouton de bascule du menu est cliqué, cette ligne sélectionne l'élément avec l'ID navbarSupportedContent (votre menu) et ajoute ou supprime la classe 'show' à cet élément. La classe 'show' est généralement utilisée dans Bootstrap pour afficher le menu déroulant lorsqu'elle est présente.
// $(document).on('click', function(e) { : Cette ligne ajoute un gestionnaire d'événements de clic à l'ensemble du document. Elle écoute les clics partout sur la page.
// if (!$(e.target).closest('.navbar').length) { : Cette condition vérifie si l'élément sur lequel vous avez cliqué n'est pas à l'intérieur de l'élément avec la classe .navbar (c'est-à-dire le menu de navigation). Cela permet de déterminer si le clic provient du menu ou d'un autre endroit sur la page.
// $('#navbarSupportedContent').removeClass('show'); : Si le clic ne provient pas du menu de navigation, cette ligne supprime la classe 'show' de l'élément avec l'ID navbarSupportedContent, cachant ainsi le menu.
// En résumé, ce code utilise jQuery pour détecter les clics sur le bouton de bascule du menu pour l'ouvrir ou le fermer. De plus, il écoute les clics sur l'ensemble du document et ferme le menu si le clic se produit en dehors du menu lui-même.


// Écrire le script jQuery pour envoyer le formulaire en utilisant AJAX
$(document).ready(function() {
    $("#monFormulaire").submit(function(event) {
        event.preventDefault(); // Empêche le rechargement de la page
        var formData = $(this).serialize(); // Récupération des données du formulaire

        
        $.ajax({
            type: "POST",
            url: window.location.pathname, // Chemin vers mmon script PHP
            data: formData,
            success: function(response) {
                console.log(response);
                $("#message").html(response);
            },
            error: function(error) {
                console.error(error);
            }
        });
    });
});

