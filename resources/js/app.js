import './bootstrap';
// resources/js/app.js

document.addEventListener("DOMContentLoaded", function() {
    const darkModeToggle = document.getElementById("dark-mode-toggle");
    const body = document.body;
    const sidebar = document.querySelector(".sidebar");

    // Fungsi untuk mengaktifkan tampilan gelap
    function enableDarkMode() {
        body.classList.add("dark-mode");
        sidebar.classList.add("dark-mode");
    }

    // Fungsi untuk menonaktifkan tampilan gelap
    function disableDarkMode() {
        body.classList.remove("dark-mode");
        sidebar.classList.remove("dark-mode");
    }

    // Fungsi untuk menangani perubahan mode saat tombol ditekan
    function handleDarkModeToggle() {
        if (body.classList.contains("dark-mode")) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    }

    // Tambahkan event listener untuk tombol toggle
    darkModeToggle.addEventListener("click", handleDarkModeToggle);
});
