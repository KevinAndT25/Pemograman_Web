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
        <p class="text-muted">01 Oktober 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>Navigation & Routing : Multiple Screen</h1>

        <h3>1. Tujuan</h3>
        <p>Tujuan praktikum ini yaitu pengguna mampu membuat menguasai konsep navigasi
            dan routing pada pemograman flutter :</p>
        <ul>
            <li>Membuat aplikasi yang dapat berpindah dari halaman satu ke halaman lain</li>
            <li>Membuat aplikasi yang dapat mengirim dan menerima data dari halaman lain</li>
        </ul><br>

        <h3>2. Alat yang Digunakan</h3>
        <ul>
            <li>IDE (Visual Studio Code)</li>
            <li>Flutter & Dart</li>
        </ul><br>

        <h3>3. Teori</h3>
        <ul>
            <li><h4>Navigation dan Routing Flutter</h4></li>
            <p>Navigation atau Navigasi merupakan sebuah proses berpindah dari satu halaman
                (screen/page) ke halaman lain dalam sebuah aplikasi flutter, misalkan perpindahan dari
                halaman login aplikasi ke halaman utama aplikasi ketika tombol login ditekan atau proses
                perpindahan dari halaman produk ke halaman detail produk dan proses kembalinya dari
                halaman detail produk ke halaman produk. Navigasi pada flutter menggunakan widget
                Navigator yang mana bekerja menggunakan konsep tumpukan (stack), Gambar berkut ini
                merupakan konsep dasar navigasi pada flutter.</p>
            <p>Routing atau Rute adalah sebuah sistem yang digunakan untuk mendefinisikan dan mengelola
                routes dalam aplikasi, setiap route didefinisikan sehingga Ketika akan memanggil halaman
                cukup dengan memanggil nama route tersebut, hal ini mempermudah dalam mengelola route
                tanpa harus membuat instance baru setiap kali akan memanggil suatu halaman.</p>
            <br>
            <li><strong>Navigator (Anonymous Routes)</strong></li>
            <p>Widget Navigation menampilkan halaman dengan konsep tumpukan menggunakan animasi
                transisi Ketika berpindah ke halaman, untuk berpindah ke halaman baru diakses melalui
                BuildContext dengan memanggil method seperti push() atau pop() secara langsung.</p>
            <li><strong>Named Routes</strong></li>
            <p>Named Routes atau Rute Bernama mengelola route pada widget MateriapApp atau
                CupertinoApp kemudian memanggilnya berdasarkan nama yang telah diberikan, berikut
                contoh penggunaan named routes pada Flutter.</p>
        </ul><br>

        <h3>4. Langkah-langkah</h3>
        <h4>A. Multiple Screen</h4>
            <li>Buat file dart baru dengan nama <code>multipleScreen.dart</code> di dalam folder lib</li>
            <li>Berikut kode untuk menampilkan tampilan multi screen</li>
                <img src="../picture_amob/p4/1.png" alt="vsc" class="guide-img"> 
            <ul>
                <li><strong>Widget Product Page</strong>: menampilkan halaman produk dengan app bar dan tombol yang mengarahkan 
                    pengguna ke halaman produk detail page</li>
                <li><strong>Widget Produk Detail Page</strong>: menampilkan halaman produk dengan app bar dan tombol yang mengarahkan 
                    pengguna kembali ke halaman sebelumnya yaitu produk page</li>
            </ul>
            <li>Berikut hasil run dari kode multiple screen</li>
            <ul>
                <li>Ketika pertama kali dijalankan</li>
                <img src="../picture_amob/p4/2.png" alt="vsc" class="guide-img" style="height: 600px; width:auto"> 
                <li>Ketika tombol produc detail ditekan</li>
                <img src="../picture_amob/p4/3.png" alt="vsc" class="guide-img" style="height: 600px; width:auto"> 
            </ul>
        </ul><br>

        <h4>B. Multiple Screen (constructor / named routes)</h4>
        <ul>
            <li>Buat file dart baru dengan nama <code>constructor.dart</code> dan <code>namedRoute.dart</code>di dalam folder lib</li>
            <li>Dengan menggunakan <strong>constructor</strong> : Berikut kode untuk menampilkan tampilan multi screen dengan <strong>constructor</strong></li>
                <img src="../picture_amob/p4/4.png" alt="vsc" class="guide-img"> 
            <li>Dengan menggunakan <strong>named route</strong> : Berikut kode untuk menampilkan tampilan multi screen dengan <strong>named route</strong></li>
                <img src="../picture_amob/p4/8.png" alt="vsc" class="guide-img"> 
            <ul>
                <li><strong>Widget Home Page</strong>: menampilkan halaman utama dengan app bar dan dua buah tombol yang mengarahkan 
                    pengguna ke halaman profile page dan produk page</li>
                <li><strong>Widget Profile Page</strong>: menampilkan halaman profil dengan app bar dan teks berupa identitas
                    pengguna yang sudah di buat sebelumnya</li>
                <li><strong>Widget Produk Page</strong>: menampilkan halaman produk dengan app bar dan teks berupa nama produk
                    yang sudah di buat sebelumnya</li>
            </ul>
            <li>Berikut hasil run dari kode multiple screen dengan constructor ataupun named route</li>
            <ul>
                <li>Ketika pertama kali dijalankan</li>
                <img src="../picture_amob/p4/5.png" alt="vsc" class="guide-img" style="height: 600px; width:auto"> 
                <li>Ketika tombol profile ditekan</li>
                <img src="../picture_amob/p4/6.png" alt="vsc" class="guide-img" style="height: 600px; width:auto"> 
                <li>ketika tombol product ditekan</li>
                <img src="../picture_amob/p4/7.png" alt="vsc" class="guide-img" style="height: 600px; width:auto"> 
            </ul>
        </ul>
            
        </ul><br>

        <h4>Kesimpulan</h4>
        <p>Berdasarkan praktikum yang telah dilakukan, dapat disimpulkan bahwa dalam Flutter terdapat dua pendekatan utama untuk 
            melakukan navigasi dan mengirim data antar halaman: menggunakan constructor untuk mengirim data secara langsung saat 
            membuat instance widget, atau menggunakan named routes dengan arguments yang lebih fleksibel untuk navigasi yang 
            terstruktur melalui MaterialApp, dimana pemilihan metode tergantung pada kebutuhan aplikasi - constructor cocok untuk 
            data sederhana sedangkan named routes lebih sesuai untuk aplikasi dengan banyak halaman dan navigasi yang kompleks.</p>
        <br>

        <h4>Latihan</h4>
        <ul>
            <li>Buatlah halaman login dan halaman utama, kemudian inputkan username dan password,
                Ketika diklik login akan berpindah ke halaman utama dengan mengirimkan data username
                dan password, tampilkan data tersebut pada halaman utama.</li>
            <li>Beberapa widget flutter telah menggunakan Konsep navigation dan routing seperti Tabs,
                Bottom Navigation Bar dan Drawer. Berikan contoh penerapan salah satu dari ketiga widget
                tersebut</li>
            <p>> Berikut kode halaman <strong>login page</strong><p>
            <img src="../picture_amob/p4/login.png" alt="latihan" class="guide-img">
            <p>> Berikut kode halaman <strong>dashboard page + Widget flutter</strong><p>
            <img src="../picture_amob/p4/widget.png" alt="latihan" class="guide-img">
            <p>Membuat form login dengan validasi kecil seperti text field tidak boleh kosong
                dan text field bagian password tidak boleh kurang dari 6 karakter. Kemudian membuat tombol 
                login yang mengarahkan pengguna ke halaman dashboard page</p>
            <p>Membuat halaman dashboard dengan menambahkan konsep navigasi dan routing <strong>bottom navigation bar</strong></p>
            <ul>
                <li><strong>Halaman Profile</strong> : halaman sederhana yang menampilkan icon, teks (username dan password), 
                    widget untuk identitas pengguna yang login pada saat itu. Dan juga tombol yang mengarahkan kembali pengguna ke halaman login sebelumnya</li>
                <li><strong>Halaman Home</strong> : halaman sederhana yang menampilkan icon dan teks website yang diakses oleh pengguna</li>
            </ul>
            <p>Berikut tampilan dari kode sebelumnya</p>
            <ul>
                <li>Ketika pertama kali dijalankan, halaman login akan terbuka</li>
                <img src="../picture_amob/p4/login2.png" alt="latihan" class="guide-img" style="height: 600px; width:auto">
                <li>Ketika pengguna sudah login halaman profile akan terbuka</li>
                <img src="../picture_amob/p4/profile.png" alt="latihan" class="guide-img" style="height: 600px; width:auto">
                <li>Ketika bottom navigation bar home ditekan</li>
                <img src="../picture_amob/p4/home.png" alt="latihan" class="guide-img" style="height: 600px; width:auto">
            </ul><br>
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
