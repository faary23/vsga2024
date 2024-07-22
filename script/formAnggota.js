document.getElementById('anggotaForm').addEventListener('submit', function (event) {
    // Prevent form submission
    event.preventDefault();

    // Clear previous error messages
    document.getElementById('nimError').textContent = '';
    document.getElementById('namaError').textContent = '';
    document.getElementById('prodiError').textContent = '';
    document.getElementById('jenisKelaminError').textContent = '';
    document.getElementById('nomorTeleponError').textContent = '';
    document.getElementById('alamatError').textContent = '';

    // Validate form fields
    let isValid = true;

    // Validate NIM
    const nim = document.getElementById('nim').value.trim();
    if (nim === '') {
        document.getElementById('nimError').textContent = 'NIM harus diisi.';
        isValid = false;
    }

    // Validate Nama
    const nama = document.getElementById('nama').value.trim();
    if (nama === '') {
        document.getElementById('namaError').textContent = 'Nama harus diisi.';
        isValid = false;
    }

    // Validate Prodi
    const prodi = document.getElementById('prodi').value.trim();
    if (prodi === '') {
        document.getElementById('prodiError').textContent = 'Prodi harus diisi.';
        isValid = false;
    }

    // Validate Jenis Kelamin
    const jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked');
    if (!jenisKelamin) {
        document.getElementById('jenisKelaminError').textContent = 'Jenis kelamin harus dipilih.';
        isValid = false;
    }

    // Validate Nomor Telepon
    const nomorTelepon = document.getElementById('nomor_telepon').value.trim();
    if (nomorTelepon === '') {
        document.getElementById('nomorTeleponError').textContent = 'Nomor telepon harus diisi.';
        isValid = false;
    }

    // Validate Alamat
    const alamat = document.getElementById('alamat').value.trim();
    if (alamat === '') {
        document.getElementById('alamatError').textContent = 'Alamat harus diisi.';
        isValid = false;
    }

    // Submit form if valid
    if (isValid) {
        alert('Form submitted successfully!');
        document.getElementById('anggotaForm').submit();
    }
});