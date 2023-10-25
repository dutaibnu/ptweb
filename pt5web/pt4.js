document.addEventListener("DOMContentLoaded", function () {
    var popup = document.getElementById("popup");
    var closeButton = document.getElementById("closePopup");

    // Menampilkan popup box secara otomatis
    popup.style.visibility = "visible";

    // Menangani penutupan popup saat tombol "X" diklik
    closeButton.onclick = function (e) {
    e.preventDefault(); // Mencegah tindakan default dari tombol X
    popup.style.visibility = "hidden"; // Menyembunyikan popup box
    };

    // Menangani penutupan popup saat bagian luar popup diklik
    popup.onclick = function (e) {
    if (e.target === popup) {
        popup.style.visibility = "hidden"; // Menyembunyikan popup box
    }
    };
    });
    const modeToggle = document.getElementById('mode-toggle');
const body = document.body;

modeToggle.addEventListener('change', () => {
    if (modeToggle.checked) {
        body.classList.remove('light-mode');
        body.classList.add('dark-mode');
    } else {
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
    }
});

// Check the user's preferred mode from local storage (optional)
const preferredMode = localStorage.getItem('preferred-mode');
if (preferredMode === 'dark') {
    body.classList.add('dark-mode');
    modeToggle.checked = true;
} else if (preferredMode === 'light') {
    body.classList.add('light-mode');
    modeToggle.checked = false;
}

// Store the user's preferred mode in local storage
modeToggle.addEventListener('change', () => {
    if (modeToggle.checked) {
        localStorage.setItem('preferred-mode', 'dark');
    } else {
        localStorage.setItem('preferred-mode', 'light');
    }
});
