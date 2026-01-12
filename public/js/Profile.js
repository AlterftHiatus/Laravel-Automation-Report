/* ================================= */
/* DROPDOWN MULTI (VERSI PRO - AMAN) */
/* ================================= */

document.addEventListener("DOMContentLoaded", () => {

    const dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach(dropdown => {
        const btn = dropdown.querySelector(".dropdown-btn");
        const content = dropdown.querySelector(".dropdown-content");

        if (!btn || !content) return;

        btn.addEventListener("click", (e) => {
            e.stopPropagation();

            // Tutup dropdown lain
            dropdowns.forEach(other => {
                if (other !== dropdown) {
                    const otherContent = other.querySelector(".dropdown-content");
                    if (otherContent) {
                        otherContent.style.display = "none";
                    }
                }
            });

            // Toggle dropdown ini
            const isVisible = content.style.display === "block";
            content.style.display = isVisible ? "none" : "block";
        });
    });

    // Klik di luar → tutup semua dropdown
    window.addEventListener("click", () => {
        dropdowns.forEach(dropdown => {
            const content = dropdown.querySelector(".dropdown-content");
            if (content) {
                content.style.display = "none";
            }
        });
    });
});


