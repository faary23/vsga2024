document.getElementById('myForm').addEventListener('submit', function (event) {
    // Prevent form submission
    event.preventDefault();

    // Clear previous error messages
    document.getElementById('idBukuError').textContent = '';
    document.getElementById('judulBukuError').textContent = '';
    document.getElementById('penulisError').textContent = '';
    document.getElementById('penerbitError').textContent = '';
    document.getElementById('tahunTerbitError').textContent = '';
    document.getElementById('sampulError').textContent = '';

    // Validate form fields
    let isValid = true;

    // Validate ID Buku
    const idBuku = document.getElementById('id_buku').value.trim();
    if (idBuku === '') {
        document.getElementById('idBukuError').textContent = 'ID Buku harus diisi.';
        isValid = false;
    }

    // Validate Judul Buku
    const judulBuku = document.getElementById('judul_buku').value.trim();
    if (judulBuku === '') {
        document.getElementById('judulBukuError').textContent = 'Judul Buku harus diisi.';
        isValid = false;
    }

    // Validate Penulis
    const penulis = document.getElementById('penulis').value.trim();
    if (penulis === '') {
        document.getElementById('penulisError').textContent = 'Nama Penulis harus diisi.';
        isValid = false;
    }

    // Validate Penerbit
    const penerbit = document.getElementById('penerbit').value.trim();
    if (penerbit === '') {
        document.getElementById('penerbitError').textContent = 'Nama Penerbit harus diisi.';
        isValid = false;
    }

    // Validate Tahun Terbit
    const tahunTerbit = document.getElementById('tahun_terbit').value.trim();
    if (tahunTerbit === '') {
        document.getElementById('tahunTerbitError').textContent = 'Tahun Terbit harus diisi.';
        isValid = false;
    }

    // Validate Sampul
    const sampul = document.getElementById('sampul').value.trim();
    if (sampul === '') {
        document.getElementById('sampulError').textContent = 'Sampul harus diisi.';
        isValid = false;
    }

    // Submit form if valid
    if (isValid) {
        alert('Form submitted successfully!');
        document.getElementById('myForm').submit();
    }
});