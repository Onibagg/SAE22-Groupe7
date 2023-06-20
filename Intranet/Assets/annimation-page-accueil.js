window.addEventListener('load', function() {
    // Sélectionner toutes les images en lazy loading
    const lazyImages = document.querySelectorAll('.lazy');

    // Fonction pour charger les images en lazy loading
    const lazyLoad = function() {
        lazyImages.forEach(img => {
            // Vérifier si l'image est visible à l'écran
            if (img.getBoundingClientRect().top < window.innerHeight * 0.5 && img.classList.contains("lazy")) {
                console.log("In")
                // Charger l'image
                img.src = img.name;

                // Réaliser l'effet de fondu
                img.style.opacity = 0; // Commencer avec une opacité de 0
                img.style.transition = "opacity 2s"; // Ajouter une transition pour l'effet de fondu
                setTimeout(function() {
                    img.style.opacity = 1; // Augmenter progressivement l'opacité jusqu'à 1
                }, 100);

                // Supprimer la classe "lazy" pour ne pas recharger l'image à chaque scroll
                console.log(img.classList)
                img.classList.remove('lazy');
                console.log(img.classList)
            }
        });
    }

    // Charger les images en lazy loading au chargement de la page
    lazyLoad();

    // Charger les images en lazy loading lors du scroll
    window.addEventListener('scroll', lazyLoad);
});