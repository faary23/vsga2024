document.getElementById('peminjamanForm').addEventListener('submit', function(event) {
    // Prevent form submission
    event.preventDefault();

    // Clear previous error messages
    document.getElementById('nimError').textContent = '';
    document.getElementById('idBukuError').textContent = '';
    document.getElementById('tanggalPeminjamanError').textContent = '';
    document.getElementById('tanggalPengembalianError').textContent = '';
    document.getElementById('statusError').textContent = '';

    // Validate form fields
    let isValid = true;

    // Validate NIM
    const nim = document.getElementById('nim').value.trim();
    if (nim === '') {
        document.getElementById('nimError').textContent = 'NIM harus diisi.';
        isValid = false;
    }

    // Validate ID Buku
    const idBuku = document.getElementById('id_buku').value.trim();
    if (idBuku === '') {
        document.getElementById('idBukuError').textContent = 'ID Buku harus diisi.';
        isValid = false;
    }

    // Validate Tanggal Peminjaman
    const tanggalPeminjaman = document.getElementById('tanggal_peminjaman').value.trim();
    if (tanggalPeminjaman === '') {
        document.getElementById('tanggalPeminjamanError').textContent = 'Tanggal Peminjaman harus diisi.';
        isValid = false;
    }

    // Validate Tanggal Pengembalian
    const tanggalPengembalian = document.getElementById('tanggal_pengembalian').value.trim();
    if (tanggalPengembalian === '') {
        document.getElementById('tanggalPengembalianError').textContent = 'Tanggal Pengembalian harus diisi.';
        isValid = false;
    }

    // Validate Status
    const status = document.getElementById('status').value.trim();
    if (status === '') {
        document.getElementById('statusError').textContent = 'Status harus diisi.';
        isValid = false;
    }

    // Submit form if valid
    if (isValid) {
        alert('Form submitted successfully!');
        document.getElementById('peminjamanForm').submit();
    }
});