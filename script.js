function confirmDelete() {
    return confirm("Yakin ingin menghapus data ini?");
}

function filterTable() {
    const input = document.getElementById("search").value.toLowerCase();
    const rows = document.querySelectorAll("#produkTable tr:not(:first-child)");
    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? "" : "none";
    });
}