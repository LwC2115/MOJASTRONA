// Obsługa lightboxów
document.addEventListener("DOMContentLoaded", () => {
    // Otwieranie lightboxa
    document.querySelectorAll('.open-lightbox').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal');
            const lightbox = document.getElementById(modalId);
            if (lightbox) {
                lightbox.style.display = 'flex';
            }
        });
    });

    // Zamykanie lightboxów
    document.querySelectorAll('.lightbox').forEach(lightbox => {
        const closeButton = lightbox.querySelector('.close');
        
        // Zamknięcie po kliknięciu na "X"
        if (closeButton) {
            closeButton.addEventListener('click', () => {
                lightbox.style.display = 'none';
            });
        }

        // Zamknięcie po kliknięciu w tło
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.style.display = 'none';
            }
        });
    });

    // Smooth scrolling dla linków kotwicy
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            // Wyklucz linki z karuzeli
            if (this.closest('.carousel')) return;

            e.preventDefault(); // Zablokowanie domyślnego przewijania
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Opcjonalne: Pokazanie sukces-lightbox po załadowaniu strony (jeśli istnieje)
    const successLightbox = document.getElementById("success-lightbox");
    if (successLightbox) {
        successLightbox.style.display = 'flex'; // Pokazanie lightboxa
        const closeSuccessBtn = successLightbox.querySelector(".close");
        
        // Obsługa zamknięcia sukces-lightboxa
        if (closeSuccessBtn) {
            closeSuccessBtn.addEventListener('click', () => {
                successLightbox.style.display = 'none';
            });
        }

        // Zamknięcie po kliknięciu w tło
        successLightbox.addEventListener('click', (e) => {
            if (e.target === successLightbox) {
                successLightbox.style.display = 'none';
            }
        });
    }
});
