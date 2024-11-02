        // JavaScript to toggle active class
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                // Remove active class from all links
                document.querySelectorAll('.nav-links a').forEach(link => link.classList.remove('active'));
                // Add active class to the clicked link
                this.classList.add('active');
            });
        });

        document.querySelectorAll('.quote-btn').forEach(button => {
    button.addEventListener('click', function (e) {
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        
        ripple.style.width = ripple.style.height = `${size}px`;
        ripple.style.left = `${e.clientX - rect.left - size / 2}px`;
        ripple.style.top = `${e.clientY - rect.top - size / 2}px`;
        ripple.classList.add('ripple');
        
        this.appendChild(ripple);
        
        // Remove the ripple after the animation
        ripple.addEventListener('animationend', () => {
            ripple.remove();
        });
    });
});

    // Function to update the section title based on the URL hash
    function updateSectionTitle() {
        // Get the hash from the URL (without the # symbol)
        const section = window.location.hash.substring(1);

        // Set the section title if the hash exists, otherwise set default value
        document.getElementById('section-title').textContent = section || 'Home';
    }

    // Run on initial page load
    updateSectionTitle();

    // Update title when the hash changes (e.g., clicking different nav links)
    window.addEventListener('hashchange', updateSectionTitle);