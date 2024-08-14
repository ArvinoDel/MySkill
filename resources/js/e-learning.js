document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', function() {
        document.querySelectorAll('.card').forEach(c => c.classList.remove('border-indigo-500', 'scale-105'));
        this.classList.add('border-indigo-500', 'scale-105');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('[data-target]');
    const images = document.querySelectorAll('[id^="img"]');

    cards.forEach(card => {
        card.addEventListener('click', () => {
            const targetId = card.getAttribute('data-target');

            // Hide all images with fade-out animation
            images.forEach(img => {
                if (!img.classList.contains('hidden')) {
                    img.classList.add('fade-out-right');
                    img.classList.remove('fade-in-left');
                    setTimeout(() => img.classList.add('hidden'), 1); // Match duration with animation
                }
            });

            // Show the selected image with fade-in animation
            const targetImage = document.getElementById(targetId);
            if (targetImage) {
                targetImage.classList.remove('hidden');
                targetImage.classList.add('fade-in-left');
            }
        });
    });
});
