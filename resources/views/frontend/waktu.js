

<p>Waktu saat ini: <span id="waktu"></span></p>


  // Fungsi untuk memperbarui waktu
  function updateWaktu() {
    var waktuSekarang = new Date();
    var jam = waktuSekarang.getHours();
    var menit = waktuSekarang.getMinutes();
    var detik = waktuSekarang.getSeconds();

    // Menambahkan angka 0 di depan angka tunggal
    jam = padZero(jam);
    menit = padZero(menit);
    detik = padZero(detik);

    // Menampilkan waktu dalam format Jam:Menit:Detik
    var waktuFormatted = jam + ":" + menit + ":" + detik;

    // Menampilkan waktu pada elemen dengan id "waktu"
    document.getElementById("waktu").innerHTML = waktuFormatted;
  }

  // Fungsi untuk menambahkan angka 0 di depan angka tunggal
  function padZero(angka) {
    return angka < 10 ? "0" + angka : angka;
  }

  // Memanggil fungsi pertama kali untuk memulai waktu otomatis
  updateWaktu();

  // Menjalankan fungsi pembaruan waktu setiap detik (1000 milidetik)
  setInterval(updateWaktu, 1000);

