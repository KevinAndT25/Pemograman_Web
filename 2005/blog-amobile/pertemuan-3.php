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
        <p class="text-muted">24 September 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>Input Widgets dan Basic Form</h1>

        <h3>1. Tujuan</h3>
        <p>Tujuan praktikum ini yaitu pengguna mampu membuat membuat basic form untuk 
            menerima inputan dari keyboard dan mengelola inputan :</p>
        <ul>
            <li>Membuat beberapa input widgets</li>
            <li>Membuat dan mengontrol inputan dari user</li>
            <li>Menambahkan informasi error ketika memasukkan input yang tidak sesuai</li>
        </ul><br>

        <h3>2. Alat yang Digunakan</h3>
        <ul>
            <li>IDE (Visual Studio Code)</li>
            <li>Flutter & Dart</li>
        </ul><br>

        <h3>3. Teori</h3>
        <ul>
            <li><strong>Basic Form</strong></li>
            <p>Basic Form merupakan widget yang berfungsi sebagai inputan nilai seperti TextField, 
                TextFormField, CheckBox, Switch, Dropdown, Radio, Dialog, DatePicker, BottomSheet, 
                Snackbar dan lain-lain. Basic Form digunakan untuk validasi dan mengelola inputan 
                dari berbagai field.</p>
            <p>Form ini akan memberikan tampilan inputan kemudian inputan akan diperiksa apakah sudah 
                sesuai dengan aturan atau format yang ditetapkan, selanjtunya data inputan akan 
                diambil nilainya setelah proses pengecekan selesai dilakukan.</p>
            <li><strong>Text Field</strong></li>
            <p>TextField adalah widget yang digunakan untuk memasukkan text oleh pengguna, widget 
                ini biasanya digunakan untuk membuat form inputan seperti form login, pencarian dll.
            </p>
            <p>Fitur TextField antara lain:</p>
            <ul>
                <li>Menerima input dari keyboard</li>
                <li>Memiliki property yang lengkap style, decoration, dan jenis inputan</li>
                <li>Dapat mengelola teks menggunakan TextEditingController</li>
            </ul>
            <li><strong>Text Form Field</strong></li>
            <p>TextFormField adalah widget versi lengkap dari TextField yang secara otomatis 
                terintegrasi dengan logika validasi dan manajemen state dari sebuah form </p>
            <p>Fitur TextFormField antara lain</p>
            <ul>
                <li>Menerima input teks dari keyboard.</li>
                <li>Memiliki properti validator yang berfungsi untuk memeriksa apakah input 
                    sudah sesuai dengan aturan yang ditentukan.</li>
                <li>Menampilkan pesan error secara otomatis di bawah field jika validasi gagal.</li>
                <li>Berinteraksi dengan FormState untuk melakukan validasi secara kolektif dengan 
                    validate() method.</li>
            </ul>
        </ul><br>

        <h3>4. Langkah-langkah</h3>
        <h4>A. Basic Form TextField</h4>
            <li>Buat file dart baru dengan nama <code>form-textfield.dart</code> di dalam folder lib</li>
            <li>Buat sebuah tampilan basic form dengan menggunakan widget TextField untuk inputan dan 
                ElevatedButton sebagai tombol event listener</li>
                <img src="../picture_amob/p3/1.png" alt="vsc" class="guide-img"> 
            <ul>
                <li><strong>_MyFormState</strong>: membuat variabel TextEditingController yang berguna untuk 
                    mengambil inputan dari pengguna, lalu membuat variabel yang membersihkan teks inputan</li>
                <li><strong>TextField</strong>: menambahkan controller properti jenis inputan agar bisa di 
                    lakukan aksi input dari pengguna</li>
                <li><strong>ElevatedButton</strong>: pada bagian onPressed ditambahkan program agar tombol 
                    bisa ditekan dan menampilkan inputan pengguna dari textfield ke dalam widget snackbar
                    (yang biasanya berada di paling bawah halaman), bisa juga menampilkan inputan ke dalam suatu area teks</li>
            </ul>
            <li>Berikut hasil run dari kode basic form TextField</li>
            <ul>
                <li>Ketika pertama kali dijalankan</li>
                <img src="../picture_amob/p3/2.png" alt="vsc" class="guide-img"> 
                <li>Ketika textfield ditekan</li>
                <img src="../picture_amob/p3/3.png" alt="vsc" class="guide-img"> 
                <li>ketika ElevatedButton ditekan</li>
                <img src="../picture_amob/p3/4.png" alt="vsc" class="guide-img"> 
            </ul>
        </ul><br>

        <h4>B. Basic Form TextFormField</h4>
            <li>Buat file dart baru dengan nama <code>form-textformfield.dart</code> di dalam folder lib</li>
            <li>Buat form inputan pengguna menggunakan widget TextFormField dan ElevatedButton beserta 
                handling jika inputan tidak sesuai</li>
                <img src="../picture_amob/p3/6.png" alt="vsc" class="guide-img"> 
            <ul>
                <li><strong>_MyFormTextState</strong>: membuat controller untuk textformfield bagian nama 
                    dan email, lalu membuat method yang menghapus inputan nama dan email dan membuat method 
                    yang berjalan ketika ElevatedButton di tekan</li>
                <li><strong>TextFormField</strong>: membuat handling pada textformfield berdasarkan inputan yang diberikan 
                    pengguna kosong ataupun tidak sesuai dengan format biasanya</li>
                <li><strong>ElevatedButton</strong>: pada bagian onPressed ditambahkan method _submitform agar bisa menampilkan
                    output Validasi Berhasil berupa Snackbar</li>
            </ul>
            <li>Berikut hasil run dari kode basic form TextFormField</li>
            <ul>
                <li>Ketika pertama kali dijalankan</li>
                <img src="../picture_amob/p3/7.png" alt="vsc" class="guide-img"> 
                <li>Ketika ElevatedButton ditekan dan TextField kosong</li>
                <img src="../picture_amob/p3/8.png" alt="vsc" class="guide-img"> 
                <li>ketika ElevatedButton ditekan dan TextField salah format</li>
                <img src="../picture_amob/p3/9.png" alt="vsc" class="guide-img"> 
                <li>ketika ElevatedButton ditekan dan TextField sudah benar</li>
                <img src="../picture_amob/p3/10.png" alt="vsc" class="guide-img"> 
            </ul>
        </ul><br>

        <h4>Kesimpulan</h4>
        <p>Berdasarkan praktikum yang telah dilakukan, dapat disimpulkan bahwa 
            pengembangan form input dalam Flutter menggunakan TextField dan TextFormField 
            beserta controller-nya memungkinkan pembuatan antarmuka interaktif yang dapat 
            menerima, memvalidasi, dan mengelola input pengguna dengan efektif, termasuk 
            penanganan error dan tampilan feedback, serta diimplementasikan dalam aplikasi 
            kalkulator aritmatika sederhana yang berfungsi dengan baik.</p>
        <br>

        <h4>Latihan</h4>
        <ul>
            <li>Buatlah aplikasi kalkulator yang dapat menjalankan operasi <strong>kabataku</strong> dengan menggunakan 2 buah 
                widget inputan (TextField atau TextFormField), lalu menggunakan ElevatedButton dan widget text 
                untuk menampilkan hasil opersi aritmatikanya
                <p>> Berikut kode operasi aritmatika <strong>kabataku</strong><p>
                <img src="../picture_amob/p3/kabataku.png" alt="latihan" class="guide-img">
                <p>Kode ini membuat operasi aritmatika sederhana berdasarkan 2 buah inputan yang diisi oleh pengguna
                    pada TextFormField yang mana menggunakan handling ketika pengguna memasukkan inputtan yang tidak sesuai formatnya.
                </p>
                <p>Berikut tampilan dari aplikasi kalkulator aritmatika sederhana</p>
                <ul>
                    <li>Ketika pertama kali dijalankan</li>
                    <img src="../picture_amob/p3/kabataku0.png" alt="latihan" class="guide-img">
                </ul><br>

                <ul><p><strong>Handling TextFormField</strong></p>
                    <li>Ketika textformfield kosong</li>
                    <img src="../picture_amob/p3/kabataku2.png" alt="latihan" class="guide-img">
                    <li>Ketika textformfield salah format</li>
                    <img src="../picture_amob/p3/kabataku3.png" alt="latihan" class="guide-img">
                </ul><br>

                <ul><p><strong>Hasil operasi kabataku</strong></p>
                    <li>Ketika ElevatedButton <strong>tambah (+)</strong> ditekan</li>
                    <img src="../picture_amob/p3/kabataku4.png" alt="latihan" class="guide-img">
                    <li>Ketika ElevatedButton <strong>kurang (-)</strong> ditekan</li>
                    <img src="../picture_amob/p3/kabataku5.png" alt="latihan" class="guide-img">
                    <li>Ketika ElevatedButton <strong>kali (×)</strong> ditekan</li>
                    <img src="../picture_amob/p3/kabataku6.png" alt="latihan" class="guide-img">
                    <li>Ketika ElevatedButton <strong>bagi (÷)</strong> ditekan</li>
                    <img src="../picture_amob/p3/kabataku7.png" alt="latihan" class="guide-img">
                </ul><br>
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
