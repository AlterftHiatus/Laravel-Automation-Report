document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("reportForm");
    const headers = document.querySelectorAll("form h3");
    const sections = [];
    let currentSlide = 0;

    const slideContainer = document.createElement("div");
    slideContainer.classList.add("slide-container");

    headers.forEach((header, index) => {
        const slide = document.createElement("div");
        slide.classList.add("slide");
        if (index === 0) slide.classList.add("active");

        const content = document.createElement("div");
        content.classList.add("section-content");

        // Ambil elemen antara H3 ini dan H3 berikutnya
        let next = header.nextElementSibling;
        slide.appendChild(header); // Masukkan header ke dalam slide

        while (next && next.tagName !== "H3") {
            const temp = next;
            next = next.nextElementSibling;
            content.appendChild(temp);
        }

        slide.appendChild(content);
        sections.push(slide);
        slideContainer.appendChild(slide);
    });

    form.prepend(slideContainer);

    const nav = document.createElement("div");
    nav.classList.add("slide-nav");
    nav.innerHTML = `
        <button type="button" id="prev-btn">← Sebelumnya</button>
        <span id="slide-indicator">1 / ${sections.length}</span>
        <button type="button" id="next-btn">Selanjutnya →</button>
    `;
    form.appendChild(nav);

    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");
    const indicator = document.getElementById("slide-indicator");

    function updateSlide() {
        sections.forEach((slide, index) => {
            slide.classList.toggle("active", index === currentSlide);
        });

        indicator.textContent = `${currentSlide + 1} / ${sections.length}`;
        prevBtn.style.visibility = currentSlide === 0 ? "hidden" : "visible";
        nextBtn.textContent =
            currentSlide === sections.length - 1
                ? "Simpan Laporan"
                : "Selanjutnya →";

        // Scroll ke atas form saat ganti slide
        form.scrollIntoView({ behavior: "smooth" });
    }

    prevBtn.onclick = () => {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlide();
        }
    };

    nextBtn.onclick = () => {
        if (currentSlide < sections.length - 1) {
            currentSlide++;
            updateSlide();
        } else {
            if (form.checkValidity()) {
                form.submit();
            } else {
                form.reportValidity();
            }
        }
    };
});

/* ===============================
   CUSTOM FILE BUTTON HANDLER
=============================== */

// Klik tombol -> trigger input file
document.addEventListener("click", function (e) {
    if (e.target.classList.contains("btn-file")) {
        const group = e.target.closest(".form-group");
        const input = group.querySelector('input[type="file"]');

        if (input) {
            input.click();
        }
    }
});

// Tampilkan nama file setelah dipilih
document.addEventListener("change", function (e) {
    if (e.target.type === "file") {
        const group = e.target.closest(".form-group");
        const fileNameSpan = group.querySelector(".file-name");

        if (fileNameSpan) {
            fileNameSpan.textContent = e.target.files.length
                ? e.target.files[0].name
                : "Belum ada file";
        }
    }
});
