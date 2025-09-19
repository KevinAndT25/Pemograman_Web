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
    <a href="../study_amobile.php" class="back-btn"><i class="fas fa-arrow-left"></i></a>
      <div class="container">
        <span class="badge badge-info mb-2">Laporan Praktikum</span>
        <p class="text-muted">17 September 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>Setup Flutter Development, Stateless & Statefull Widget, Basic Widgets</h1>

        <h3>1. Tujuan</h3>
        <p>Tujuan praktikum ini yaitu pengguna mampu menginstall lingkungan flutter 
            development, stateless dan statefull widget dan basic widgets flutter :</p>
        <ul>
            <li>Pengguna mampu menyiapkan lingkungan development flutter seperti install 
                sdk-flutter, git, android SDK, IDE dll</li>
            <li>Pengguna mampu membuat stateless dan statefull widget flutter</li>
            <li>Pengguna mampu membuat contoh basic widgets flutter</li>
        </ul>
        <br>

        <h3>2. Alat yang Digunakan</h3>
        <ul>
            <li>IDE (Visual Studio Code)</li>
            <li>Laptop yang sudah terinstal GIT</li>
        </ul>
        <br>

        <h3>3. Langkah-langkah</h3>
        <h4>A. Instalasi Lingkungan Flutter</h4>
        <ul>
            <li>Install Visual Studio lewat link berikut <a href="https://visualstudio.microsoft.com/downloads/"><code>Visual Studio</code></a>
                kemudian pada proses instalasinya centang pada bagian <strong>Desktop development with C++</strong></li>
                <img src="../picture_amob/p2/1.png" alt="Instalasi" class="guide-img"> 
            <li>Install Android Studio lewat link berikut <a href="https://developer.android.com/studio#get-android-studio"><code>Android Studio</code></a></li>
                <img src="../picture_amob/p2/2.png" alt="Instalasi" class="guide-img"> 
            <li>Install SDK-Flutter lewat link berikut <a href="https://docs.flutter.dev/install/manual"><code>SDK-Flutter</code></a></li>
                <img src="../picture_amob/p2/3.png" alt="Instalasi" class="guide-img"> 
            <ul>
                <li>Ekstrak hasil download tadi ke direktori yang diinginkan misalnya <code>C:\Users\Kevin Andhika\flutter-sdk</code></li>
                <li>Tambahkan path (ditambah dengan \bin) ke Environment control panel</li>
                    <img src="../picture_amob/p2/4.png" alt="Instalasi" class="guide-img"> 
            </ul>
            <li>Cek setup flutter development dengan mengetikkan perintah <code>flutter doctor</code> di dalam command prompt (disini instalasi android studio belum selesai sepenuhnya)</li>
                <img src="../picture_amob/p2/5.png" alt="Instalasi" class="guide-img"> 
        </ul>
        <br>

        <h4>B. Project Command Prompt</h4>
        <ul>
            <li>Buka command prompt lalu ketikkan perintah <code>flutter create hai</code> untuk membuat project flutter bernama hai</li>
                <img src="../picture_amob/p2/5-1.png" alt="cmd" class="guide-img"> 
            <li>Masuk ke dalam project yang dibuat tadi dengan <code>cd hai</code> lalu jalankan project dengan <code>flutter run</code> dan memilih dijalankan lewat Chrome</li>
                <img src="../picture_amob/p2/5-2.png" alt="cmd" class="guide-img"> 
        </ul>
        <br>

        <h4>C. Project Visual Studio Code</h4>
        <ul>
            <li>Buka aplikasi visual studio code, pastikan ekstensi Flutter sudah ada di Visual Studio Code tersebut</li>
                <img src="../picture_amob/p2/6.png" alt="vsc" class="guide-img"> 
            <li>Buat project bernama hai dengan cara membuka command pallete dengan shortcut <strong>ctrl+shift+p</strong> lalu ketik <strong>Flutter: New Project > Application</strong></li>
                <img src="../picture_amob/p2/7.png" alt="vsc" class="guide-img"> 
            <ul><br>
                <h5>Stateless & Statefull</h5>
                <li>Stateless - widget yang data atau tampilannya tidak mengalami perubahan ketika sebuah state dijalankan, 
                    Widget ini bersifat statis atau tetap misalnya teks statis, logo aplikasi dll</li>
                    <img src="../picture_amob/p2/8.png" alt="vsc" class="guide-img"> 
                <li>Statefull - widget dinamis yang ketika sebuah state berubah maka tampilan UI juga berubah. 
                    contohnya ketika tombol diklik atau ditekan maka tombol berubah warna atau form input nilainya berubah.</li>
                    <img src="../picture_amob/p2/9.png" alt="vsc" class="guide-img"> 
            </ul>
            <ul><br>
                <h5>Basic Widget</h5>
                <li>Text - widget dasar yang digunakan untuk menampikan teks pada layer</li>
                    <img src="../picture_amob/p2/10.png" alt="vsc" class="guide-img"> 
                <li>Container - widget yang berfungsi sebagai KOTAK yang dapat menampung satu widget child dan 
                    menyediakan berbagai properti untuk dekorasi, mengatur posisi dan mengatur ukuran widget.</li>
                    <img src="../picture_amob/p2/11.png" alt="vsc" class="guide-img"> 
                <li>ElevatedButton - widget yang mewakili tombol dan memiliki shadow</li>
                    <img src="../picture_amob/p2/12.png" alt="vsc" class="guide-img"> 
                <li>Icon - widget yang digunakan untuk menampilkan icon, Flutter telah menyediakan set icon 
                    seperti Material Icons dari Google atau Cupertino Icons dari Apple</li>
                    <img src="../picture_amob/p2/13.png" alt="vsc" class="guide-img"> 
                <li>Image NetworkImage - widget dasar yang digunakan untuk menampikan gambar dari jaringan internet</li>
                    <img src="../picture_amob/p2/14.png" alt="vsc" class="guide-img"> 
                <li>Untuk AssetsImage buatkan baris tambahan di dalam file <code>pubspec.yaml</code> menjadi seperti berikut, dan juga tambahkan folder 
                    <code>assets/image</code> lalu upload foto yang ingin digunakan di dalam folder image</li>
                    <img src="../picture_amob/p2/15-1.png" alt="vsc" class="guide-img">
                    <img src="../picture_amob/p2/15-2.png" alt="vsc" class="guide-img"> 
                <li>Image AssetsImage - widget dasar yang digunakan untuk menampikan gambar dari file memori komputer</li>
                    <img src="../picture_amob/p2/15.png" alt="vsc" class="guide-img"> 
                <li>CircleAvatar - widget yang sering digunakan untuk menampilkan gambar profil pengguna atau 
                    inisialnya dalam bentuk lingkaran. </li>
                    <img src="../picture_amob/p2/16.png" alt="vsc" class="guide-img"> 
            </ul>
        </ul>
        <br>

        <h4>Kesimpulan</h4>
        <p>...</p>
        <br>

        <h4>Latihan</h4>
        <ul>
            <li>Buatlah tampilan widget secara vertical dan horizontal dengan menggunakan minimal 3 buah 
                basic widget dalam 1 tampilan.
                <p>> Berikut kode tampilan widget vertikal dan horizontal (min 3 elemen tiap tampilan)<p>
                <img src="../picture_amob/p2/widget.png" alt="latihan" class="guide-img">
                <p>Kode ini menampilkan 6 buah widget (3 horizontal, 2 vertikal) yang tiap widgetnya berisi icon dan teks</p>
                <ul>
                    <li>MaterialApp: Aplikasi dasar dengan desain Material (style Google)</li>
                    <li>Scaffold: Kerangka halaman dengan latar belakang putih</li>
                    <li>Center: Semua konten ditempatkan di tengah layar</li>
                </ul>
                <img src="../picture_amob/p2/widget2.png" alt="latihan" class="guide-img">
                <br>
            </li>
            <li>Buatlah tampilan yang berisi informasi profile kalian (foto, nama, nim, Alamat, nomor handphone, 
                jurusan) dengan mengimplementasikan seluruh basic widget yang ada pada modul praktikum ini.
                <p>> Berikut kode tampilan profile mahasiswa (mengimplementasikan seluruh elemen yang dibahas sebelumnya)</p>
                <img src="../picture_amob/p2/profile.png" alt="latihan" class="guide-img">
                <p>Kode ini menampilkan laman profile mahasiswa yang berisi:</p>
                <ul>
                    <li>Logo universitas : NetworkImage</li>
                    <li>Foto profil : AssetsImage</li>
                    <li>Foto profile & icon sosmed : CircleAvatar</li>
                    <li>Teks nama : Text</li>
                    <li>Tabel profile : Widget/Container</li>
                    <li>Logo sosmed : Icon</li>
                    <li>Tombol terima kasih : ElevatedButton</li>
                </ul>
                <img src="../picture_amob/p2/profile2.png" alt="latihan" class="guide-img">
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
