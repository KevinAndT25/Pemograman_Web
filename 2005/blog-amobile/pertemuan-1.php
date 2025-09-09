<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kevin Andhika</title>
    <link href="..\external\bootstrap\bootstrap.min.css" rel="stylesheet">
    <link href="..\external\fontawesome\fontawesome.all.min.css" rel="stylesheet">
</head>
<style>
    :root {
            --primary: #161179;
            --primary-dark: #0C0950;
            --accent: #00A8FF;
            --light: #f0f4ff;
            --white: #ffffff;
            --text-dark: #2c3e50;
            --text-muted: #6c757d;
            --border: #e0e0e0;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: var(--white);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
        }

        /* PERTEMUAN 7 PHP */
        .back-btn {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .back-btn i {
            font-size: 24px;
            margin-right: 10px;
        }

        .up-btn {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .up-btn i {
            font-size: 24px;
            margin-left: 10px;
        }

        .container-custom {
            background-color: var(--white);
            padding: 40px;
            border-radius: 18px;
            box-shadow: var(--shadow);
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .badge-info {
            background-color: #0d6efd;
            color: #fff;
        }

        img.guide-img {
            width: 90%;
            height: auto;
            max-width: 800px;
            margin: 10px 0;
            border-radius: 8px;
            justify-content: center; align-items: center;
        }

        h1, h2, h3, h4 {
            font-weight: 700;
            color: var(--primary);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            border-left: 5px solid var(--accent);
            padding-left: 15px;
        }

        h3 {
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        ul {
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }

        ul li {
            margin-bottom: 8px;
        }

        p {
            font-size: 1rem;
            line-height: 1.7;
        }

        code {
            background-color: #eef3ff;
            padding: 2px 6px;
            border-radius: 5px;
            font-family: monospace;
            color: var(--primary-dark);
        }

        .guide-img {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .badge-info {
            background-color: var(--accent);
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .text-muted {
            color: var(--text-muted);
        }

        .back-btn, .up-btn {
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .back-btn:hover,
        .up-btn:hover {
            color: var(--accent);
        }

        .back-btn i,
        .up-btn i {
            font-size: 20px;
        }

        .back-btn i {
            margin-right: 8px;
        }

        .up-btn i {
            margin-left: 8px;
        }

        @media screen and (max-width: 768px) {
        .container-custom {
            padding: 20px;
        }

        h1 {
            font-size: 1.75rem;
        }

        .back-btn, .up-btn {
            font-size: 14px;
        }
    }
</style>
<body>
  <!-- Navbar -->
  <?php include '../structure/navbar2.php'; ?>

  <!-- Next/Prev Arrow -->
  <?php include '../structure/prevnext2.php'; ?>

  <!-- Main Content -->
  <div class="container-fluid px-4 py-4">
    <div class="container-custom  mb-5">
    <a href="../study_pweb.php" class="back-btn"><i class="fas fa-arrow-left"></i></a>
      <div class="container">
        <span class="badge badge-info mb-2">Laporan Praktikum</span>
        <p class="text-muted">3 September 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>Setup Environment, Dart Dasar dan OOP Dart</h1>

        <h3>1. Tujuan</h3>
        <p>Tujuan praktikum ini yaitu mahasiswa membuat menginstall kebutuhan Praktikum 
            Aplikasi Mobile menggunakan bahasa Dart pada framework Flutter, mahasiswa 
            menguasai dasar-dasar Bahasa pemrograman Dart serta konsep OOP Dart</p>
        <ul>
            <li>Install SDK Dart dan Integrated Development Editor (IDE)</li>
            <li>Membuat program sederhana untuk memahami dasar Bahasa pemrograman dart</li>
            <li>Membuat program sederhana menggunakan konsep OOP</li>
        </ul>
        <br>

        <h3>2. Alat yang Digunakan</h3>
        <ul>
            <li>Computer / laptop yang telah terinstall SDK Dart, SDK Flutter</li>
            <li>IDE (Visual Studio Code / Android Studio)</li>
        </ul>
        <br>

        <h3>3. Langkah-langkah</h3>
        <h4>A. Instalasi SDK Dart</h4>
        <ul>
          <li>Buka link <strong>https://dart.dev/get-dart/archive#stable-channel</strong> kemudian download Dark SDK versi terbaru dengan mengklik Download</li>
            <img src="../picture_amob/p1/1install.png" alt="Instalasi SDK" class="guide-img"> 
          <li>Setelah file zip berhasil didownload, ekstrak hasil file kedalam file yang diinginkan <strong>C:\Users\Kevin Andhika</strong> selama kamu tau dimana file itu disimpan</li>
            <img src="../picture_amob/p1/2ekstrak.png" alt="Ekstrak SDK" class="guide-img"> 
          <li>Lalu atur <strong>System Properties > Environment Variables > Path</strong> kemudian tambahkan variabel baru dengan path dimana menyimpan file tadi dengan tambahan namafile\bin <strong>C:\Users\Kevin Andhika\dart-sdk\bin</strong></li>
            <img src="../picture_amob/p1/3path1.png" alt="Atur Path" class="guide-img"> 
            <img src="../picture_amob/p1/3path2.png" alt="Atur Path" class="guide-img"> 
          <li>Kemudian cek di command prompt apakah Dart sudah terinstal atau belum dengan mengetikkan <code>dart</code> dan jika keluar output berikut maka artinya dart berhasil di instal</li>
            <img src="../picture_amob/p1/4cmddart.png" alt="CMD Dart" class="guide-img"> 
          <li>Selain itu versi Dart juga bisa di cek dengan mengetikkan <code>dart --version</code> di dalam command prompt</li>
            <img src="../picture_amob/p1/5cmdversion.png" alt="CMD Version" class="guide-img"> 
        </ul>
        <br>

        <h4>B. Project Mini</h4>
        <ul>
          <li>Buat folder baru di command prompt dengan mengetikkan <code>mkdir Dart_Dev</code> kemudian masuk kedalam file dengan <code>cd Dart_Dev</code></li>
            <img src="../picture_amob/p1/6dev.png" alt="Dart Dev" class="guide-img"> 
          <li>Buat sebuah project "halo" dengan kode <code>dart create halo</code></li>
            <img src="../picture_amob/p1/7halo.png" alt="Halo Project" class="guide-img"> 
          <li>Kemudian masuk kedalam projek dengan <code>cd halo</code> kemudian jalankan projek dengan <code>dart run</code></li>
            <img src="../picture_amob/p1/8halorun.png" alt="Halo Run" class="guide-img"> 
        </ul>
        <br>
        
        <h4>C. Project VSCode</h4>
        <ul>
          <li>
            <h4>1. Pendahuluan</h4>
            <ul>
                <li>Jalankan aplikasi Visual Studio Code kemudian buka folder halo yang dibuat tadi</li>
                    <img src="../picture_amob/p1/9struktur.png" alt="Struktur VSCode" class="guide-img">
                <li>Jika VSCode belum ada dart, instal ekstensi Dart yang sudah disediakan extension VSCode</li>
                    <img src="../picture_amob/p1/10ekstensi.png" alt="Ekstensi Dart" class="guide-img">
                <li>Buat sebuah file dart bernama <strong>hai.dart</strong> dan beri perintah algoritma berikut, kemudian jalankan program dengan mengetikkan perintah 
                        <code>dart run .\hai.dart</code> di dalam terminal VSCode (pastikan kamu berada didalam file bin sebelum mengeksekusi kode run tadi)</li>
                    <img src="../picture_amob/p1/11hai.png" alt="Hai" class="guide-img">
            </ul>
            <br>
          </li>
          <li>
            <h4>2. Dasar Dart</h4>
            <ul>
                <li>Buat sebuah file dart bernama <strong>dasar_dart.dart</strong> dan sama beri perintah algoritma fruits berikut, kemudian jalankan program dengan mengetikkan perintah 
                        <code>dart run .\dasar_dart.dart</code> di dalam terminal VSCode </li>
                    <img src="../picture_amob/p1/12fruits.png" alt="Fruits" class="guide-img">
                <li>Di dalam file <strong>dasar_dart.dart</strong> yang sama beri perintah algoritma animal berikut, kemudian jalankan program dengan mengetikkan perintah 
                        <code>dart run .\dasar_dart.dart</code> di dalam terminal VSCode </li>
                    <img src="../picture_amob/p1/13animal.png" alt="Animal" class="guide-img">
                <li>Di dalam file <strong>dasar_dart.dart</strong> yang sama beri perintah algoritma product price berikut, kemudian jalankan program dengan mengetikkan perintah 
                        <code>dart run .\dasar_dart.dart</code> di dalam terminal VSCode </li>
                    <img src="../picture_amob/p1/14product.png" alt="Product Price" class="guide-img">
                <li>Di dalam file <strong>dasar_dart.dart</strong> yang sama beri perintah algoritma perulangan berikut, kemudian jalankan program dengan mengetikkan perintah 
                        <code>dart run .\dasar_dart.dart</code> di dalam terminal VSCode </li>
                    <img src="../picture_amob/p1/15perulangan.png" alt="Perulangan" class="guide-img">
            </ul>
            <br>
          </li>
          <li>
            <h4>3. OOP</h4>
            <ul>
                <li>Buat sebuah file dart bernama <strong>oop.dart</strong> dan sama beri perintah algoritma berikut, kemudian jalankan program dengan mengetikkan perintah 
                        <code>dart run .\oop.dart</code> di dalam terminal VSCode </li>
                    <img src="../picture_amob/p1/12fruits.png" alt="OOP" class="guide-img">
            </ul>
            <br>
          </li>
        </ul>
        <br>

        <h4>Kesimpulan</h4>
        <p>Dengan adanya praktikum ini, diharapkan pengguna bisa mengetahui bagaimana cara menginstal sistem Dart pada komputer kerja mereka, 
            pengguna juga tau bentuk pemakaian bahasa dart ini dalam bahasa pemograman, sekaligus
            mampu membuat algoritma pemograman yang melibatkan sistem bahasa pemograman Dart</p>
        <br>

        <h4>Latihan</h4>
        <ul>
            <li>Buatlah aplikasi sederhana menggunakan Bahasa pemrograman Dart untuk menghitung 
                Luas Bangun Datar dan Volume Bangun Ruang dengan konsep procedural
                <ul>
                    <li>Berikut kode penghitung bangun datar dan ruang secara procedural</li>
                    <img src="../picture_amob/p1/17tugasproc.png" alt="Procedural" class="guide-img">
                    <p>Library <code>dart:io</code> dan <code>dart:math</code> agar program bisa melakukan input/output dan melakukan fungsi dasar aritmatika</p>
                    <p>Fungsi main opsi kegiatan selanjutnya, yang ketika pengguna mengetikkan :
                        <ul>
                            <li>ketik 1 : menu luas bangun datar (Persegi, Persegi Panjang, Segitiga dan Lingkaran)</li>
                            <li>ketik 2 : menu volume bangun ruang (Kubus, Balok, Bola, Tabung)</li>
                            <li>ketik 3 : keluar dari perulangan</li>
                        </ul>
                    </p>
                    <p>Fungsi hitungluas ini membuat perhitungan aritmatika sesuai rumus tiap bangun datar, seperti :
                        <ul>
                            <li>ketik 1 : <code>Persegi = sisi x sisi</code></li>
                            <li>ketik 2 : <code>Persegi Panjang = panjang x lebar</code></li>
                            <li>ketik 3 : <code>Segitiga = (alas x tinggi) / 2</code></li>
                            <li>ketik 4 : <code>Lingkaran = π x r^2</code></li>
                        </ul>
                    </p>
                    <p>Fungsi hitungvolume ini membuat perhitungan aritmatika sesuai rumus tiap bangun ruang, seperti :
                        <ul>
                            <li>ketik 1 : <code>Kubus = sisi x sisi x sisi</code></li>
                            <li>ketik 2 : <code>Balok = panjang x lebar x tinggi</code></li>
                            <li>ketik 3 : <code>Bola = (4/3)π x r^3</code></li>
                            <li>ketik 4 : <code>Tabung = π x r^2 x tinggi</code></li>
                        </ul>
                    </p>
                    <li>Lalu ketikkan perintah <code>dart run .\tugas_procedural.dart</code> di terminal untuk menjalankan program</li>
                    <li>Output yang keluar ketika memilih 1</li>
                    <img src="../picture_amob/p1/19datar.png" alt="Procedural" class="guide-img">
                    <li>Output yang keluar ketika memilih 2</li>
                    <img src="../picture_amob/p1/19ruang.png" alt="Procedural" class="guide-img">
                    <li>Output yang keluar ketika memilih 3</li>
                    <img src="../picture_amob/p1/19exit.png" alt="Procedural" class="guide-img">
                </ul>
                <br>
            </li>
            <li>Buatlah aplikasi sederhana menggunakan Bahasa pemrograman Dart untuk menghitung 
                Luas Bangun Datar dan Volume Bangun Ruang dengan konsep OOP
                <ul>
                    <li>Berikut kode penghitung bangun datar dan ruang secara OOP</li>
                    <img src="../picture_amob/p1/18tugasoop.png" alt="OOP" class="guide-img">
                    <p>Library <code>dart:io</code> dan <code>dart:math</code> agar program bisa melakukan input/output dan melakukan fungsi dasar aritmatika</p>
                    <p>Kelas abstract bangundatar dan bangunruang yang berisi fungsi hitung luas dan volume dibuat sebagai kelas yang diwariskan kelas lain nanti</p>
                    <p>Kelas persegi, persegipanjang, segitiga dan kelas lingkaran sebagai tempat menginisialisasikan rumus aritmatika tiap bangun datar dan kemudian dihubungkan dengan extends pada kelas bangundatar tadi</p>
                    <p>Kelas kubus, balok, bola dan kelas tabung sebagai tempat menginisialisasikan rumus aritmatika tiap bangun ruang dan kemudian dihubungkan dengan extends pada kelas bangunruang tadi</p>
                    <p>Fungsi main opsi kegiatan selanjutnya, yang ketika pengguna mengetikkan :
                        <ul>
                            <li>ketik 1 : menu luas bangun datar (Persegi, Persegi Panjang, Segitiga dan Lingkaran)</li>
                            <li>ketik 2 : menu volume bangun ruang (Kubus, Balok, Bola, Tabung)</li>
                            <li>ketik 3 : keluar dari perulangan</li>
                        </ul>
                    </p>
                    <p>Fungsi hitungluas ini membuat perhitungan aritmatika sesuai rumus tiap bangun datar, seperti :
                        <ul>
                            <li>ketik 1 : <code>Persegi = sisi x sisi</code></li>
                            <li>ketik 2 : <code>Persegi Panjang = panjang x lebar</code></li>
                            <li>ketik 3 : <code>Segitiga = (alas x tinggi) / 2</code></li>
                            <li>ketik 4 : <code>Lingkaran = π x r^2</code></li>
                        </ul>
                    </p>
                    <p>Fungsi hitungvolume ini membuat perhitungan aritmatika sesuai rumus tiap bangun ruang, seperti :
                        <ul>
                            <li>ketik 1 : <code>Kubus = sisi x sisi x sisi</code></li>
                            <li>ketik 2 : <code>Balok = panjang x lebar x tinggi</code></li>
                            <li>ketik 3 : <code>Bola = (4/3)π x r^3</code></li>
                            <li>ketik 4 : <code>Tabung = π x r^2 x tinggi</code></li>
                        </ul>
                    </p>
                    <li>Lalu ketikkan perintah <code>dart run .\tugas_procedural.dart</code> di terminal untuk menjalankan program</li>
                    <li>Output yang keluar ketika memilih 1</li>
                    <img src="../picture_amob/p1/20datar.png" alt="OOP" class="guide-img">
                    <li>Output yang keluar ketika memilih  2</li>
                    <img src="../picture_amob/p1/20ruang.png" alt="OOP" class="guide-img">
                    <li>Output yang keluar ketika memilih  3</li>
                    <img src="../picture_amob/p1/20exit.png" alt="OOP" class="guide-img">
                </ul>
                <br>
            </li>
        </ul>
        <br>
        <br>
        
      <a href="#" class="up-btn"><i class="fas fa-arrow-up"></i></a>
      </div>
    </div>
  </div>
    
  <!-- Footer -->
  <?php include '../structure/footer.php'; ?>


  <script src="..\external\bootstrap\bootstrap.bundle.min.js"></script>
  <script src="..\external\fontawesome\fontawesome.js" crossorigin="anonymous"></script>
</body>
</html>
