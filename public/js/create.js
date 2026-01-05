/* =========================================================
   CREATE LAPORAN - UI SCRIPT (PROFESSIONAL VERSION)
   ========================================================= */

document.addEventListener("DOMContentLoaded", function () {
    const headers = document.querySelectorAll("h3");

    headers.forEach((header, index) => {
        // 1. Buat container untuk isi section
        const content = document.createElement("div");
        content.classList.add("section-content");

        // 2. Bungkus elemen-elemen di bawah h3 ke dalam div.section-content
        let next = header.nextElementSibling;
        while (next && next.tagName !== "H3") {
            const temp = next;
            next = next.nextElementSibling;
            content.appendChild(temp);
        }

        // 3. Sisipkan content tepat setelah h3
        header.after(content);

        // 4. Buka section pertama secara default (biar user tahu itu accordion)
        if (index === 0) {
            header.classList.add("active");
            content.classList.add("active");
        }

        // 5. Toggle accordion saat klik
        header.addEventListener("click", function () {
            // Opsional: Tutup section lain saat satu dibuka (Mode Solo)
            /*
            headers.forEach(h => {
                if(h !== header) {
                    h.classList.remove("active");
                    h.nextElementSibling.classList.remove("active");
                }
            });
            */

            header.classList.toggle("active");
            content.classList.toggle("active");
        });
    });
});

/* ------------------------------
   TAMBAH DOKUMENTASI FOTO
-------------------------------- */
let docIndex = 1; // Mulai dari 1 karena index 0 sudah ada di blade

window.tambahDokumentasi = function () {
    const wrapper = document.getElementById("dokumentasi-wrapper");
    if (!wrapper) return;

    const div = document.createElement("div");
    div.classList.add("dokumentasi-item");
    div.innerHTML = `
        <h4>Dokumentasi #${docIndex + 1}</h4>
        <label>Foto</label>
        <input type="file" name="dokumentasi[${docIndex}][foto]" accept="image/*">
        
        <label>Keterangan</label>
        <input type="text" name="dokumentasi[${docIndex}][keterangan]" placeholder="contoh: Detail bagian mesin">
        <hr>
    `;

    wrapper.appendChild(div);
    docIndex++;
};