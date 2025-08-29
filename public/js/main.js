document.addEventListener('DOMContentLoaded', function () {

    // Validasi form kontak
    const contactForm = document.querySelector('form[action*="contact/send"]');
    if(contactForm){
        contactForm.addEventListener('submit', function(e){
            const name = contactForm.querySelector('input[name="name"]').value.trim();
            const email = contactForm.querySelector('input[name="email"]').value.trim();
            const message = contactForm.querySelector('textarea[name="message"]').value.trim();
            let valid = true;
            let errorMessage = '';

            if(name === ''){
                valid = false;
                errorMessage += 'Nama wajib diisi.\n';
            }

            if(email === '' || !email.match(/^\S+@\S+\.\S+$/)){
                valid = false;
                errorMessage += 'Email tidak valid.\n';
            }

            if(message === ''){
                valid = false;
                errorMessage += 'Pesan wajib diisi.\n';
            }

            if(!valid){
                e.preventDefault();
                alert(errorMessage);
            }
        });
    }

   document.addEventListener('DOMContentLoaded', function () {
    // Animasi fade-in untuk card
    const cards = document.querySelectorAll('.card');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.add('fade-in');
            }
        });
    }, { threshold: 0.1 });

    cards.forEach(card => {
        card.classList.add('opacity-0'); // awalnya transparan
        observer.observe(card);
    });
});


});
