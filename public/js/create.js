/* =========================================================
   CREATE LAPORAN - UI SCRIPT
   - Accordion per section (h3)
   - Tambah dokumentasi foto
   TIDAK menyentuh logika backend
   ========================================================= */

/* ------------------------------
   ACCORDION FORM SECTION
-------------------------------- */
document.addEventListener("DOMContentLoaded", function () {
    const headers = document.querySelectorAll("h3");

    headers.forEach((header) => {
        // Buat container untuk isi section
        const content = document.createElement("div");
        content.classList.add("section-content");

        // Ambil semua elemen sampai h3 berikutnya
        let next = header.nextElementSibling;
        while (next && next.tagName !== "H3") {
            const temp = next;
            next = next.nextElementSibling;
            content.appendChild(temp);
        }

        // Sisipkan content setelah h3
        header.after(content);

        // Toggle accordion saat klik judul
        header.addEventListener("click", function () {
            header.classList.toggle("active");
            content.classList.toggle("active");
        });
    });
});

/* ------------------------------
   TAMBAH DOKUMENTASI FOTO
-------------------------------- */
let index = 1;

// expose ke global karena dipanggil dari onclick=""
window.tambahDokumentasi = function () {
    const wrapper = document.getElementById("dokumentasi-wrapper");

    if (!wrapper) return;

    const html = `
        <div class="dokumentasi-item">
            <h4>Dokumentasi #${index + 1}</h4>

            <label>Foto</label><br>
            <input 
                type="file"
                name="dokumentasi[${index}][foto]"
                accept="image/*"
            ><br><br>

            <label>Keterangan</label><br>
            <input 
                type="text"
                name="dokumentasi[${index}][keterangan]"
                placeholder="contoh: Detail bagian mesin"
            ><br><br>

            <hr>
        </div>
    `;

    wrapper.insertAdjacentHTML("beforeend", html);
    index++;
};
