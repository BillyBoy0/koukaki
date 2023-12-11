//  Menu BURGER

$(document).ready(function() { //fermer le menu apres cliquer sur les liens
    $(".main-navigation a").on("click", function() {
        $(".menu-toggle").attr("aria-expanded", "false");
        $("#site-navigation").removeClass("toggled");
    });
});




/* Effet titres*/
                     //Déclenchement Animation Titre sur les H2
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
        const titre = entry.target.querySelector('h2 span');
              if (entry.isIntersecting) {
            titre.classList.add('animation-title');
            return; 
        }
          titre.classList.remove('animation-title');
    });
});

  observer.observe(document.querySelector('.story'));
  observer.observe(document.querySelector('#studio'));

                      //Déclenchement Animation Titre sur les H3 */
    const observer2 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          const titre = entry.target.querySelector('h3 span');
              if (entry.isIntersecting) {
            titre.classList.add('animation-title')
            return; 
          }
          titre.classList.remove('animation-title');
    });
});

  observer2.observe(document.querySelector('#place'));
  observer2.observe(document.querySelector('.main-character'));
  observer2.observe(document.querySelector('.oscars'));




//Slider personnages
const swiper = new Swiper(".swiper", {
    direction: 'horizontal',
    centeredSlides: true,
    allowTouchMove: false,

    slidesPerView: "auto",
    speed: 1000,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    loop: true,
    loopedSlides: 2,
    effect: "coverflow",
    coverflowEffect: {
        slideShadows: false,
        rotate: 70,
        stretch: -130,
        modifier: 1, 
    },
});

//Effet fade in au scroll

document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll(".scrollFade");

    function isInViewport(element) {                        //je déclenche mon animation quand j'arrive au centre de l élément
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const elementCenter = rect.top + rect.height / 2;
        
        return elementCenter >= 0 && elementCenter <= windowHeight;
    }
    function handleScroll() {
        sections.forEach(section => {
            if (isInViewport(section)) {
                section.classList.add("fadeInUp");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Pour déclencher l'animation des sections déjà visibles à l'ouverture de la page
});


//Parallax nuages


const cloudsElements = document.querySelectorAll('.clouds');
const section = document.getElementById('place');
const triggerOffset = -700; // Ajustez cette valeur en pixels selon votre besoin
const maxTranslation = 300; // La limite de translation vers la gauche

window.addEventListener('scroll', () => {
    const sectionTop = section.offsetTop;
    const sectionBottom = sectionTop + section.clientHeight;
    const scrollPosition = window.scrollY + window.innerHeight;

    if (scrollPosition >= sectionBottom - triggerOffset) {
        const offsetX = Math.min(
            maxTranslation,
            (scrollPosition - (sectionBottom - triggerOffset)) / window.innerHeight * 500
        );

        cloudsElements.forEach(clouds => {
            clouds.style.transform = `translateX(-${offsetX}px)`;
        });
    } else {
        cloudsElements.forEach(clouds => {
            clouds.style.transform = 'translateX(0)';
        });
    }
});

