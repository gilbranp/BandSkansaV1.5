<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Calon Anggota Band</title>
  <!-- Menggunakan Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      color: #495057;
    }

    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #007bff;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .info-box {
      background-color: #e9ecef;
      border-radius: 8px;
      padding: 15px;
      margin-top: 20px;
      display: none; /* Sembunyikan info-box secara default */
    }
  </style>

</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Formulir Pendaftaran</h2>
      <form>
        <!-- Nama -->
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <!-- Alamat Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Alamat Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Alat Musik Pilihan -->
        <div class="mb-3">
          <label for="alatMusik" class="form-label">Posisi Pilihan</label>
          <select class="form-select" id="alatMusik" name="alatMusik" required>
            <option value="" disabled selected>Pilih Posisi</option>
            <option value="vocal">Vocal</option>
            <option value="gitar">Gitar</option>
            <option value="bass">Bass</option>
            <option value="drum">Drum</option>
            <option value="kendang">Kendang</option>
            <option value="keyboard">Keyboard</option>
            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
          </select>
        </div>

        <!-- Pengalaman -->
        <div class="mb-3">
          <label for="pengalaman" class="form-label">Pengalaman Musik (jika ada)</label>
          <textarea class="form-control" id="pengalaman" name="pengalaman" rows="3"></textarea>
        </div>

        <!-- Tombol Pencetan untuk Menampilkan Informasi -->
        <button type="button" class="btn btn-warning mb-3" onclick="toggleInfo()">Persyaratan</button>

        <!-- Informasi Persyaratan dan Proses Seleksi -->
        <div class="info-box" id="infoBox">
          <h5>Informasi Persyaratan dan Proses Seleksi</h5>
          <p>
            Calon anggota band diharapkan memiliki pengetahuan dasar dalam memainkan alat musik pilihan dan
            dapat berkolaborasi dengan anggota band lainnya. Proses seleksi melibatkan audisi.
            Pastikan untuk mempersiapkan diri sebaik baiknya karena akan dilakukan pemfilteran best of the best.
          </p>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Daftar</button>
      </form>
    </div>
  </div>
</div>

<!-- Menggunakan Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
  // Fungsi untuk menampilkan/menyembunyikan informasi
  function toggleInfo() {
    var infoBox = document.getElementById("infoBox");
    infoBox.style.display = (infoBox.style.display === "none") ? "block" : "none";
  }
</script>

</body>
</html>
