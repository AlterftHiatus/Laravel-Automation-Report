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

// Fungsi tambah dokumentasi tetap sama, hanya layouting-nya diperbaiki via CSS
let docIndex = 1;
window.tambahDokumentasi = function () {
    const wrapper = document.getElementById("dokumentasi-wrapper");
    const div = document.createElement("div");
    div.classList.add("dokumentasi-item");
    div.innerHTML = `
        <h4>Dokumentasi #${docIndex + 1}</h4>
        <div class="form-row">
            <div class="form-group">
                <label>Foto</label>

                <input
                    type="file"
                    name="dokumentasi[${docIndex}][foto]"
                    accept="image/*"
                    capture="environment"
                    class="file-input-hidden"
                >

                <button type="button" class="btn-file">
                    📷 Ambil Gambar
                </button>

                <span class="file-name">Belum ada gambar</span>
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="dokumentasi[${docIndex}][keterangan]" placeholder="contoh: Kondisi mesin">
            </div>
        </div>
`;

    wrapper.appendChild(div);
    docIndex++;
};

document.addEventListener("click", function (e) {
    if (e.target.classList.contains("btn-file")) {
        const group = e.target.closest(".form-group");
        const input = group.querySelector('input[type="file"]');
        input.click();
    }
});

document.addEventListener("change", function (e) {
    if (e.target.type === "file") {
        const group = e.target.closest(".form-group");
        const fileName = group.querySelector(".file-name");

        if (fileName) {
            fileName.textContent = e.target.files.length
                ? e.target.files[0].name
                : "Belum ada gambar";
        }
    }
});
