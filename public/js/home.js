const buttons = document.querySelectorAll(".dropdown-btn");

buttons.forEach(button => {
    button.addEventListener("click", () => {
        const dropdownContent = button.nextElementSibling;

        // Tutup dropdown lain
        document.querySelectorAll(".dropdown-content").forEach(menu => {
            if (menu !== dropdownContent) {
                menu.style.display = "none";
            }
        });

        // Toggle dropdown yang diklik
        dropdownContent.style.display =
            dropdownContent.style.display === "block" ? "none" : "block";
    });
});

// Tutup dropdown jika klik di luar
window.addEventListener("click", function (e) {
    if (!e.target.classList.contains("dropdown-btn")) {
        document.querySelectorAll(".dropdown-content").forEach(menu => {
            menu.style.display = "none";
        });
    }
});
