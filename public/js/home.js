// Mengambil tombol dropdown dan kontennya
const dropdownBtn = document.querySelector(".dropdown-btn");
const dropdownContent = document.querySelector(".dropdown-content");

if (dropdownBtn) {
    dropdownBtn.addEventListener("click", (e) => {
        // Mencegah bubbling agar event window tidak langsung memicu penutupan
        e.stopPropagation();

        // Toggle tampilan: Jika block maka sembunyikan, jika tidak maka tampilkan
        const isVisible = dropdownContent.style.display === "block";
        dropdownContent.style.display = isVisible ? "none" : "block";
    });
}

// Menutup dropdown jika user mengklik di mana saja di luar area dropdown
window.addEventListener("click", () => {
    if (dropdownContent && dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    }
});