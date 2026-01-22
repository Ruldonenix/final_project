document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.querySelector('form');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');

    loginForm.addEventListener('submit', (event) => {
        // Cek jika input kosong
        if (usernameInput.value.trim() === "" || passwordInput.value.trim() === "") {
            alert("Ups! Username dan Password jangan dikosongkan ya.");
            event.preventDefault(); // Menghentikan form agar tidak terkirim ke PHP
        } else {
            // Efek simpel saat loading
            const loginBtn = document.querySelector('input[type="submit"]');
            loginBtn.value = "Mohon Tunggu...";
            loginBtn.style.opacity = "0.7";
        }
    });
});