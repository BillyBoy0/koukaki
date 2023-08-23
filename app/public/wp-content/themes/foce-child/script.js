//  Menu BURGER

// Récupérer le bouton du menu
const menuToggle = document.querySelector(".menu-toggle");

// Récupérer la liste du menu
const menuList = document.querySelector("nav ul");





/* Effet titres*/



//Slider personnages
const swiper = new Swiper(".swiper", {
    direction: 'horizontal',
    centeredSlides: true,
    allowTouchMove: false,

    slidesPerView: "auto",
    speed: 1500,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    loop: true,
    loopedSlides: 2,
    loopAdditionalSlides: 1,
    effect: "coverflow",
    coverflowEffect: {
        slideShadows: false,
        rotate: 70,
        stretch: 0,
        depth: 50,
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

window.addEventListener('scroll', () => {
    const sectionTop = section.offsetTop;
    const sectionBottom = sectionTop + section.clientHeight;
    const scrollPosition = window.scrollY + window.innerHeight;

    if (scrollPosition >= sectionBottom - triggerOffset) {
        const offsetX = (scrollPosition - (sectionBottom - triggerOffset)) / window.innerHeight * 500;

        cloudsElements.forEach(clouds => {
            clouds.style.transform = `translateX(-${offsetX}px)`;
        });
    } else {
        cloudsElements.forEach(clouds => {
            clouds.style.transform = 'translateX(0)';
        });
    }
});

