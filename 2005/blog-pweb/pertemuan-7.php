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
  <?php include '../structure/prevnext.php'; ?>

  <!-- Main Content -->
  <div class="container-fluid px-4 py-4">
    <div class="container-custom  mb-5">
    <a href="../study_pweb.php" class="back-btn"><i class="fas fa-arrow-left"></i></a>
      <div class="container">
        <span class="badge badge-info mb-2">Laporan Praktikum</span>
        <p class="text-muted">21 Mei 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>Instalasi dan Konfigurasi Aplikasi Laravel</h1>

        <h3>1. Tujuan</h3>
        <p>Tujuan praktikum ini yaitu mahasiswa mampu installasi Laravel, 
          membuat project baru Laravel, mengenal struktur Laravel, konsep MVC laravel. </p>
        <br>

        <h3>2. Alat yang digunakan</h3>
        <ul>
          <li>XAMPP (SQL)</li>
          <li>Visual Studio Code (code editor)</li>
          <li>Composer, Git, Node JS, NPM</li>
        </ul>
        <br>

        <h3>3. Langkah-langkah</h3>

        <h4>A. Instalasi alat - alat</h4>
        <ul>
          <li>Aplikasi Terminal cmder pada link <a href="https://cmder.app/">https://cmder.app/</a></li>
          <li>Aplikasi XAMPP  pada link <a href="https://www.apachefriends.org/index.html">https://www.apachefriends.org/index.html</a><br>
              Kemudian bisa dilakukan pengecekan versi aplikasi dengan menuliskan <code>php --version</code> pada command prompt ataupun pada aplikasi cmder tadi</li>
            <img src="../picture/p7/php_ver.png" alt="xampp version" class="guide-img">
          <li>Aplikasi Composer pada link <a href="https://getcomposer.org/Composer-Setup.exe">https://getcomposer.org/Composer-Setup.exe</a><br>
              Kemudian bisa dilakukan pengecekan versi aplikasi dengan menuliskan <code>composer --version</code> pada command prompt ataupun pada aplikasi cmder tadi</li>
            <img src="../picture/p7/composer_ver.png" alt="composer version" class="guide-img">
          <li>Aplikasi Git pada link <a href="https://git-scm.com/downloads/win">https://git-scm.com/downloads/win</a><br>
              Kemudian bisa dilakukan pengecekan versi aplikasi dengan menuliskan <code>git --version</code> pada command prompt ataupun pada aplikasi cmder tadi</li>
            <img src="../picture/p7/git_ver.png" alt="git version" class="guide-img">
          <li>Aplikasi Node JS dan NPM pada link <a href="https://nodejs.org/">https://nodejs.org/</a><br>
              Kemudian bisa dilakukan pengecekan versi aplikasi dengan menuliskan <code>node --version</code> dan <code>npm --version</code> pada command prompt ataupun pada aplikasi cmder tadi</li>
            <img src="../picture/p7/node_ver.png" alt="node npm version" class="guide-img"> 
        </ul>
          <p>Instal file <a href="https://drive.google.com/file/d/1AX2A24TjaS8z2ZvMH5pyKDGye-lu88Z1/view?pli=1">check.php</a> ini untuk melakukan pengecekan file, kemudian letakkan file tersebut di dalam htdocs pada folder XAMPP.</p>
          <p>Setelah semua aplikasi berhasil di instal, lakukan pengecekan versi detail aplikasi secara bersamaan dengan menjalankan file sebelumnya dengan mengetikkan <code>localhost/check.php</code> pada browser<br>
            pastikan aplikasi XAMPP sudah dijalankan agar bisa mengakses localhost.</p>
            <img src="../picture/p7/check_php.png" alt="Check PHP" class="guide-img">
        <br>

        <h4>B. Instalasi Laravel</h4>
        <p>Untuk penginstalan Laravel ini ada dua cara, 
          yaitu bisa menggunakan Laravel Installer ataupun menggunakan 
          Composer</p>
        <p>Praktikum kali ini akan menggunakan laravel installer</p>
        <ul>
          <li>Buka Aplikasi terminal cmder</li>
          <li>Ketikkan perintah <code>composer global require laravel/installer</code> kemudian tunggu proses instalasi berjalan hingga selesai</li>
            <img src="../picture/p7/instal_laravel.png" alt="Proses Instalasi" class="guide-img">
          <li>Setelah instalasi berhasil ketikkan perintah <code>laravel new example-app</code> untuk membuat project baru, dimana example_app adalah nama project yang dibuat.</li>
          <ul>
            <li>Pada pertanyaan memilih starter kit uang ingin diinstal pilih opsi <code>[none]</code> none</li>
            <img src="../picture/p7/starter_kit.png" alt="starter kit install" class="guide-img">
            <li>Pada pertanyaan framework yang ingin digunakan pilih opsi <code>[0]</code> pest</li>
            <img src="../picture/p7/framework.png" alt="framework install" class="guide-img">
            <li>Pada pertanyaan database yang akan digunakan pilih opsi <code>[mysql]</code> MySQL</li>
            <img src="../picture/p7/database.png" alt="database install" class="guide-img">
            <li>Pada pertanyaan untuk ingin menjalankan default database migration pilih opsi <code>[yes]</code> (diwajibkan mengisi yes)</li>
            <img src="../picture/p7/yes1.png" alt="run migration" class="guide-img">
            <li>Pada pertanyaan untuk ingin menjalankan npm install dan juga npm run build pilih opsi <code>[yes]</code> (diwajibkan mengisi yes)</li>
            <img src="../picture/p7/yes2.png" alt="npm install build" class="guide-img">
          </ul>
        </ul>
        <br>

        <h4>C. Menjalankan Aplikasi Laravel</h4>
        <ul>
          <li>Ketikkan <code>cd example-app</code> untuk masuk ke dalam file project yang baru dibuat tadi</li>
          <li>Ketikkan <code>php artisan serve</code> untuk menjalankan server dan mendapatkan link http dimana server laravel tersebut dijalankan</li>
            <img src="../picture/p7/artisan_serve.png" alt="artisan serve" class="guide-img">
          <li>Klik link yang ditampilkan pada terminal, maka tab hasil program laravel akan muncul</li>
          <img src="../picture/p7/laravel_home.png" alt="laravel home" class="guide-img">
        </ul>
        <br>
        
        <h4>D. Visual Studio Code Laravel</h4>
        <ul>
          <li>Kemudian buka aplikasi visual studio code dan buka folder example_app<br>
            <img src="../picture/p7/dir_structure.png" alt="directory structure" class="guide-img" style="height: 600px; width:auto">
            <ul>
              <li>app/: Berisi controller, model, dan logic utama</li>
              <li>resources/views: Berisi file Blade (template tampilan)</li>
              <li>routes/web.php: Tempat mendefinisikan URL dan endpoint</li>
              <li>public/: Root folder untuk akses web (index.php, asset)</li>
              <li>database/: Berisi migration, seeder, dan factory</li>
            </ul>
          </li>
          <ul>
            <li>Model: Mengelola data dan <code>php artisan make:model NamaModel</code></li>
            <li>View: Tampilan aplikasi (HTML, Blade) <code>resources/views/</code></li>
            <li>Controller: Menjembatani Model dan View <code>php artisan make:controller NamaController</code></li>
          </ul>
        </ul>
        <br>

        <h4>E. More Laravel Program</h4>
        <ul>
          <li>Pada bagian route tambahkan perintah berikut agar melihat hasil program ketika akhiran ditambah <code>/helo</code> yang akan mengeluarkan output Hello World</li>
            <img src="../picture/p7/helo_function.png" alt="helo function" class="guide-img">
            <img src="../picture/p7/helo_result.png" alt="helo result" class="guide-img">
          <li>Ketikkan perintah <code>php artisan make:model SebuahModel</code> untuk membuat sebuah model yang berfungsi untuk mengakses dan mengolah data ke dalam database <br>
              model ini berisikan perintah seperti insert, update, delete, dan perintah lainnya</li>
            <img src="../picture/p7/model.png" alt="Model Mahasiswa" class="guide-img">
          <li>Ketikkan perintah <code>php artisan make:controller SiswaController</code> untuk membuat sebuah view dari sebuah model dengan menggunakan Controller</li>
            <img src="../picture/p7/controller.png" alt="Model Mahasiswa" class="guide-img">
        </ul>
        <br>

        <h4>Kesimpulan</h4>
        <p>Praktikum ini mengajarkan langkah-langkah instalasi Laravel dan alat pendukungnya 
          seperti XAMPP, Composer, Git, Node.js, dan Cmder, serta cara mengecek versi 
          masing-masing alat agar lingkungan pengembangan siap digunakan. Mahasiswa juga 
          mempraktikkan pembuatan project Laravel baru menggunakan Laravel Installer dan 
          menjalankannya melalui perintah php artisan serve.</p>
        <p>Selain itu, mahasiswa diperkenalkan pada struktur direktori Laravel serta konsep 
          dasar Model-View-Controller (MVC). Mereka juga belajar membuat route sederhana, 
          model, dan controller menggunakan Artisan CLI, yang menjadi dasar penting dalam 
          pengembangan aplikasi Laravel secara terstruktur.</p>
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
