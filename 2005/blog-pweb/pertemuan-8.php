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
        <p class="text-muted">25 Mei 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>LARAVEL AUTH, CRUD Multi Level User</h1>

        <h3>1. Tujuan</h3>
        <p>Untuk menambah pemahaman pengguna mengenai cara menginstal dan membuat project Laravel 
          menggunakan Composer, serta mengatur konfigurasi database dengan benar. 
          Praktikum ini juga bertujuan agar pengguna dapat memahami proses pembuatan sistem autentikasi 
          seperti login dan register menggunakan Laravel UI. Selain itu, pengguna dilatih untuk memodifikasi 
          struktur tabel users sesuai kebutuhan, menambahkan data admin dengan seeder, serta mengintegrasikan 
          template Bootstrap guna memperindah tampilan antarmuka menggunakan Blade templating engine di dalam Laravel.</p>
        <br>

        <h3>2. Langkah-langkah</h3>
        <h4>A. Global Installer Melalui Composer</h4>
        <ul>
          <li>Jalankan aplikasi XAMPP agar bisa terkoneksi dengan localhost</li>
          <li>Kemudian buka file manager dan sebuah folder di dalam htdocs (htdocs ada di dalam folder XAMPP) dengan nama <Strong>Laravel</Strong></li>
          <li>Setelah itu buka aplikasi cmder atau bisa juga melalui terminal command prompt, masuk kedalam folder Laravel sebelumnya kemudian ketikkan perintah berikut 
            <code>composer create-project laravel/laravel=^12.0 laravel-sisfo --prefer-dist"</code></li>
            <img src="../picture/p8/1laravel.png" alt="laravel" class="guide-img"> 
        </ul>
        <br>

        <h4>B. Konfigurasi Database</h4>
        <ul>
          <li>Jalankan aplikasi Visual Studio Code kemudian buka folder laravel-sisfo yang sudah dibuat tadi</li>
          <li>Lalu buka file .env lakukan konfigurasi database seperti berikut</li>
            <img src="../picture/p8/3config_database.png" alt="Config" class="guide-img"> 
        </ul>
        <br>

        <h4>C. Autentikasi</h4>
        <ul>
          <li>Setelah instalasi global selesai, masuk ke dalam folder laravel-sisfo yang dibuat</li>
            <img src="../picture/p8/2lara_sisfo.png" alt="laravel sisfo" class="guide-img"> 
          <li>Ketikkan <code>composer require laravel/ui</code> untuk autentikasi pengguna dengan laravel</li>
            <img src="../picture/p8/4composer_req.png" alt="composer" class="guide-img"> 
          <li>Ketikkan <code>php artisan ui bootstrap --auth</code> untuk autentikasi fitur dengan laravel</li>
            <img src="../picture/p8/5artisan_auth.png" alt="Config" class="guide-img"> 
          <li>Ketikkan <code>npm install && npm run dev</code> untuk menginstal dan meng compile file aset bawaan agar autentikasi di generate otomatis</li>
            <img src="../picture/p8/6npm.png" alt="npm install & run" class="guide-img"> 
          <li>Ketikkan perintah <code>php artisan migrate</code> untuk membuat migration table authentication</li>
            <img src="../picture/p8/7migrate.png" alt="migrate" class="guide-img"> 
        </ul>
        <br>

        <h4>C. Laravel UI Before</h4>
        <ul>
          <li>Ketikkan perintah <code>php artisan serve</code> untuk menjalankan program laravel</li>
            <img src="../picture/p8/8artisan_serve.png" alt="artisan serve" class="guide-img"> 
          <li>User Interface Laravel <strong>/..</strong></li>
            <img src="../picture/p8/9.1empty.png" alt="/..." class="guide-img"> 
          <li>User Interface Laravel <strong>/login</strong></li>
            <img src="../picture/p8/9.2login.png" alt="/login" class="guide-img"> 
          <li>User Interface Laravel <strong>/register</strong></li>
            <img src="../picture/p8/9.3register.png" alt="/register" class="guide-img"> 
          <li>User Interface Laravel <strong>/home</strong></li>
            <img src="../picture/p8/9.4home.png" alt="/home" class="guide-img">
          <li>Hasil tampilan /home juga bisa diubah dari nama pengguna menjadi menampilkan email pengguna dengan mengubah kode berikut <br>
              jadi pada tampilan /home pengguna Kevin Andhika akan berubah menjadi kev@gmail.com</li>
          <img src="../picture/p8/9name_to_email.png" alt="name to email" class="guide-img">
        </ul>
        <br>

        <h4>D. Custom Users Table</h4>
        <ul>
          <li>Setelah autentikasi laravel berhasil, akan ter generate table users seperti berikut <br>
            <img src="../picture/p8/10db_structure.png" alt="structure" class="guide-img" style="height: 400px; width:auto">
              Dari stuktur table users diatas maka perlu ditambahken beberapa field yaitu username, 
              level dan status, maka perlu membuat sebuah migration untuk menambahkan field-field diatas, 
              ketikkan perintah berikut pada terminal atau cmd.</li>
          <li>Ketikkan perintah <code>php artisan make:migration costum_table_users</code> pada terminal Visual Studio Code untuk membuat sebuah file migration</li>
            <img src="../picture/p8/11check_custom.png" alt="check table" class="guide-img">
          <li>Buka file migration tersebut lalu tambahkan kode perintah berikut, setelah itu jalankan dengan mengetikkan perintah <code>php artisan migrate</code> pada kolom terminal</li>
            <img src="../picture/p8/12custom_artisan_migrate.png" alt="table migrate" class="guide-img">
          <li>kemudian bisa di lihat bahwa struktur database table users sudah berhasil diubah sesuai dengan kebutuhan aplikasi</li>
            <img src="../picture/p8/13db_custom2.png" alt="migrate database" class="guide-img" style="height: 400px; width:auto">
        </ul>
        <br>

        <h4>E. Seeding AdminSeeder</h4>
        <ul>
          <li>Ketikkan perintah <code>php artisan make:seeder AdminSeeder</code> untuk membuat file AdminSeeder.php pada folder database/Seeder</li>
            <img src="../picture/p8/14artisan_seeder.png" alt="seeder artisan" class="guide-img">
          <li>Buka file seeder tersebut lalu tambahkan kode perintah berikut, setelah itu jalankan dengan mengetikkan perintah <code>php artisan db:seed --class=AdminSeeder</code> pada kolom terminal</li>
            <img src="../picture/p8/15seeder_seed.png" alt="seeder" class="guide-img">
          <li>Berikut hasil dari admin seeder ketika dijalankan di /dashboard</li>
            <img src="../picture/p8/15.1admin_seeder.png" alt="admin seeder" class="guide-img">
        </ul>
        <br>

        <h4>F. Laravel UI Templating</h4>
        <ul>
          <li>Tambahkan build path template bootstrap didalam folder sbadmin</li>
          <li>Buka file app.blade.php kemudian buat kode nya menjadi seperti berikut</li>
            <img src="../picture/p8/16app_blade.png" alt="app blade" class="guide-img">
          <li>Ketika laravel dijalankan hasil desain laman /login akan menjadi seperti ini</li>
            <img src="../picture/p8/17login.png" alt="login page" class="guide-img">
          <li>Pada file app.blade.php ubah kode menjadi seperti berikut</li>
            <img src="../picture/p8/18main_blade.png" alt="main blade" class="guide-img">
            <img src="../picture/p8/18main_blade2.png" alt="main blade 2" class="guide-img">
          <li>Pada file sidebar.blade.php ubah kode menjadi seperti berikut</li>
            <img src="../picture/p8/19sidebar_blade.png" alt="sidebar blade" class="guide-img">
          <li>Pada file topbar.blade.php ubah kode menjadi seperti berikut</li>
            <img src="../picture/p8/20topbar_blade.png" alt="topbar blade" class="guide-img">
          <li>Pada file home.blade.php ubah kode menjadi seperti berikut</li>
            <img src="../picture/p8/21home_blade.png" alt="home blade" class="guide-img">
          <li>Kemudian jalankan laravel dengan kode sebelumnya <code>php artisan serve</code> maka akan terlihat hasil konfigurasi layout seperti berikut</li>
            <img src="../picture/p8/22dashboard.png" alt="dashboard" class="guide-img">
        </ul>
        <br>

        <h4>Kesimpulan</h4>
        <p>Praktikum ini menjelaskan cara membuat sistem login dan manajemen pengguna di Laravel 
          dengan langkah sederhana. Mulai dari instalasi Laravel, pengaturan database, 
          hingga membuat fitur login dan register secara otomatis dengan perintah tertentu. 
          Setelah itu, tampilan program diuji melalui php artisan serve.</p>
        <p>Selain itu, struktur tabel pengguna juga bisa diubah sesuai kebutuhan, 
          seperti menambah kolom level atau status. Kita juga bisa menambahkan data admin 
          secara otomatis dan mempercantik tampilan dengan template Bootstrap. 
          Praktikum ini cocok bagi pemula untuk memahami dasar pembuatan web dengan Laravel.</p>
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
