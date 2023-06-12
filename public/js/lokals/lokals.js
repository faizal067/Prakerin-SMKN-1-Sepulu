// const lokalDetailModal = new bootstrap.Modal("#lokal-detail-modal");
const lokalDetailModal = document.getElementById(
    "lokal-detail-modal"
);

// const lokalDetailModalTriggers = document.querySelectorAll(
//     ".lokal-detail-modal-triggers"
// );

// lokalDetailModalTriggers.forEach((el) => {
//     el.addEventListener("click");
// });

lokalDetailModal.addEventListener("show.bs.modal", async (event) => {
    const badgeTrigger = event.relatedTarget;
    const { lokalId } = badgeTrigger.dataset;
    const res = await fetch(lokalUrl + "?id=" + lokalId);
    const data = await res.json();
    const lokalTglkegiatanModal =
        lokalDetailModal.querySelector("#lokal-tglkegiatan");
    const lokalKegiatanModal = lokalDetailModal.querySelector(
        "#lokal-kegiatan"
    );
    const lokalRincianModal = lokalDetailModal.querySelector(
        "#lokal-rincian"
    );
    const lokalFotoModal = lokalDetailModal.querySelector(
        "#lokal-foto"
    );
    lokalTglkegiatanModal.textContent = data.tglkegiatan;
    lokalKegiatanModal.textContent = data.kegiatan;
    lokalRincianModal.textContent = data.rincian;
    lokalFotoModal.textContent = data.foto;
});
