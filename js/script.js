document.addEventListener('DOMContentLoaded', () => {

// ----------------------------------------------------------------
// 1. ANIMATION TEXTE SCRAMBLE + DACTYLOGRAPHIE 
// ----------------------------------------------------------------
const scrambleElement = document.getElementById('scramble-target');
const phrasesAttr = scrambleElement ? scrambleElement.getAttribute('data-phrases') : '[]';
const phrases = JSON.parse(phrasesAttr);

if (scrambleElement && phrases.length > 0) {

    const SCRAMBLE_CHARS = '!@#$%^&*()_+-=[]{}|;:",.<>/?';
    let phraseIndex = 0;
    const typingSpeed = 100; 
    const scrambleDuration = 300; // Durée de l'effet de scramble
    const newPhraseDelay = 1500; // Délai entre les phrases (après le scramble)

    function getRandomChar() {
        return SCRAMBLE_CHARS[Math.floor(Math.random() * SCRAMBLE_CHARS.length)];
    }

    // Fonction principale pour l'effet de dactylographie
    function type(text) {
        let charIndex = 0;
        
        function typingLoop() {
            if (charIndex < text.length) {
                // Affichage du caractère avec le curseur
                scrambleElement.textContent = text.substring(0, charIndex + 1);
                scrambleElement.innerHTML += '<span class="cursor">|</span>';
                charIndex++;
                setTimeout(typingLoop, typingSpeed);
            } else {
                // Fin de la dactylographie, attente et lancement du scramble
                scrambleElement.innerHTML = text + '<span class="cursor">|</span>';
                setTimeout(startScramble, newPhraseDelay);
            }
        }
        typingLoop();
    }

    // Fonction pour l'effet de scramble 
    function startScramble() {
        const currentText = scrambleElement.textContent.trim();
        const nextPhraseIndex = (phraseIndex + 1) % phrases.length;
        const targetText = phrases[nextPhraseIndex];
        const maxLength = Math.max(currentText.length, targetText.length);
        let startTime = null;
        
        function scrambleLoop(timestamp) {
            if (!startTime) startTime = timestamp;
            const elapsed = timestamp - startTime;
            const progress = elapsed / scrambleDuration;
            
            let newText = '';
            
            // Scrambler tous les caractères pendant la transition
            for (let i = 0; i < maxLength; i++) {
                if (progress < 1) {
                    newText += getRandomChar();
                } else {
                    newText += targetText[i] || ''; 
                }
            }

            scrambleElement.textContent = newText;
            scrambleElement.innerHTML += '<span class="cursor">|</span>'; // Maintenir le curseur

            if (progress < 1) {
                requestAnimationFrame(scrambleLoop);
            } else {
                // Fin du scramble, passer à la dactylographie de la phrase suivante
                phraseIndex = nextPhraseIndex;
                type(targetText);
            }
        }
        requestAnimationFrame(scrambleLoop);
    }
    
    // Démarrage initial : commencer par la première phrase
    setTimeout(() => type(phrases[phraseIndex]), 500);
}

    
    // ----------------------------------------------------------------
    // 2. ANIMATION AU DÉFILEMENT (Scroll Reveal)
    // ----------------------------------------------------------------

    function scrollReveal() {
        const observerOptions = {
            root: null, 
            rootMargin: '0px',
            threshold: 0.2 
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('scrolled');
                    observer.unobserve(entry.target); 
                }
            });
        }, observerOptions);

        const scrollElements = document.querySelectorAll('.js-scroll');
        scrollElements.forEach(element => {
            observer.observe(element);
        });
    }

    scrollReveal();
    
    // ----------------------------------------------------------------
    // 3. HEADER SCROLL EFFECT
    // ----------------------------------------------------------------
    
    function headerScrollEffect() {
        const header = document.querySelector('.main-header');
        
        if (!header) return;
        
        const checkScroll = () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };

        window.addEventListener('scroll', checkScroll);
        checkScroll(); 
    }

    headerScrollEffect();
    
    // ----------------------------------------------------------------
    // 4. ANCRAGE DOUX 
    // ----------------------------------------------------------------
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            
            const header = document.querySelector('.main-header');
            const headerHeight = header ? header.offsetHeight : 0;
            
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - headerHeight,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ----------------------------------------------------------------
    // 5. GESTION DES ONGLETS DE COMPÉTENCES
    // ----------------------------------------------------------------
    
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanes = document.querySelectorAll('.tab-pane');

    if (tabButtons.length > 0 && tabPanes.length > 0) {
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetTab = this.getAttribute('data-tab');

                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabPanes.forEach(pane => pane.classList.remove('active'));

                this.classList.add('active');

                const activePane = document.getElementById(targetTab);
                if (activePane) {
                    activePane.classList.add('active');
                }
            });
        });
    }

    }

);

document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card-v2');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // 1. Changer l'état actif des boutons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            // 2. Filtrer les cartes
            projectCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');

                if (filterValue === 'all' || filterValue === cardCategory) {
                    card.classList.remove('hide');
                    card.classList.add('show');
                } else {
                    card.classList.remove('show');
                    card.classList.add('hide');
                }
            });
        });
    });
});

const backToTopBtn = document.getElementById("backToTop");

// Afficher le bouton quand on descend de 300px
window.onscroll = function() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        backToTopBtn.style.display = "block";
    } else {
        backToTopBtn.style.display = "none";
    }
};

// Remonter en haut au clic
backToTopBtn.onclick = function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' 
    });
};