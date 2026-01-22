document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.querySelector('.nav-toggle');
    const navList = document.getElementById('navList');

    // Pastikan elemen ditemukan sebelum menambahkan event listener
    if (navToggle && navList) {
        navToggle.addEventListener('click', function() {
            // Toggle class 'active' untuk menu dan ikon toggle
            navList.classList.toggle('active');
            navToggle.classList.toggle('active');

            // Mengelola status ARIA (Aksesibilitas)
            const isExpanded = navToggle.classList.contains('active');
            navToggle.setAttribute('aria-expanded', isExpanded);
        });
    }
});