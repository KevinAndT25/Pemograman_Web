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
        <p class="text-muted">15 Juni 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>Laravel Relationship Student, Major, dan Subject</h1>

        <h3>1. Tujuan</h3>
        <p>Untuk menambah pemahaman pengguna mengenai konsep relationship dalam Laravel, 
          praktikum ini bertujuan agar pengguna dapat mengimplementasikan relasi One-to-Many 
          dan Many-to-Many antar tabel secara tepat. Pengguna juga dilatih untuk membuat 
          migration yang melibatkan foreign key, serta memanfaatkan Eloquent relationship 
          dalam melakukan query data antar tabel. Selain itu, pengguna diarahkan untuk 
          menampilkan data yang saling berelasi secara dinamis di dalam view menggunakan 
          Blade templating engine, sehingga dapat membangun aplikasi yang lebih terstruktur dan efisien.</p>
        <br>

        <h3>2. Langkah-langkah</h3>
        <h4>A. Instalasi Laravel</h4>
        <ul>
          <li>Buka aplikasi cmder lalu buka folder dimana file baru ingin dibuat <strong>C:\xampp\htdocs\Laravel</strong> setelah itu ketikkan perintah 
            <code>composer create-project laravel/laravel=^12.0 laravel-major --prefer-dist</code> dimana Laravel Major adalah nama file yang akan dibuat</li>
            <img src="../picture/p10/1install.png" alt="Instalasi Laravel" class="guide-img"> 
          <li>Masuk ke dalam folder yang dibuat tadi, lalu ketikkan <code>php artisan serve</code></li>
            <img src="../picture/p10/2codeartisan.png" alt="Code PHP Artisan Serve" class="guide-img"> 
          <li>Berikut hasil ketika link artisan serve di klik</li>
            <img src="../picture/p10/3artisanlink.png" alt="Artisan Serve Link" class="guide-img"> 
        </ul>
        <br>

        <h4>B. Migration Table</h4>
        <ul>
          <li>
            <h4>1. Migration Tabel Majors</h4>
            <ul>
              <li>Kemudian buka aplikasi Visual Studio Code dan buka file laravel-major yang dibuat sebelumnya</li>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:migration create_majors_table</code> untuk membuat sebuah database migration tentang majors</li>
                <img src="../picture/p10/4phpmigrate.png" alt="Migration Majors Code" class="guide-img"> 
              <li>Lengkapi hasil migration menjadi seperti program berikut</li>
                <img src="../picture/p10/5migrate.png" alt="Majors" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>2. Migration Tabel Students</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:migration create_students_table</code> untuk membuat sebuah database migration tentang students</li>
                <img src="../picture/p10/6phpmigrate.png" alt="Migration Students Code" class="guide-img"> 
              <li>Lengkapi hasil migration menjadi seperti program berikut</li>
                <img src="../picture/p10/7migrate.png" alt="Students" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>3. Migration Tabel Subjects</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:migration create_subjects_table</code> untuk membuat sebuah database migration tentang subjects</li>
                <img src="../picture/p10/8phpmigrate.png" alt="Migration Subject Code" class="guide-img"> 
              <li>Lengkapi hasil migration menjadi seperti program berikut</li>
                <img src="../picture/p10/9migrate.png" alt="Subjects" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>4. Migration Pivot Student & Subject</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:migration create_student_subject_table</code> untuk membuat sebuah database migration penghubung antara students dan subject</li>
                <img src="../picture/p10/10phpmigrate.png" alt="Migration Pivot Code" class="guide-img"> 
              <li>Lengkapi hasil migration menjadi seperti program berikut</li>
                <img src="../picture/p10/11migrate.png" alt="Student & Subjects" class="guide-img"> 
              <li>Setelah semua langkah diatas selesai, jalankan semua migration dengan mengetikkan perintah <code>php artisan migrate</code> di terminal</li>
                <img src="../picture/p10/11.5php.png" alt="PHP Artisan" class="guide-img"> 
            </ul>
            <br>
          </li>
        </ul>
        <br>
        
        <h4>C. Relationship Model</h4>
        <ul>
          <li>
            <h4>1. Relationship Model Major</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:model Major</code> untuk membuat sebuah model relationship model major</li>
                <img src="../picture/p10/12phpmodel.png" alt="Model Major Code" class="guide-img"> 
              <li>Lengkapi hasil model menjadi seperti program berikut</li>
                <img src="../picture/p10/13model.png" alt="Major" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>2. Relationship Model Student</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:model Student</code> untuk membuat sebuah model relationship model student</li>
                <img src="../picture/p10/14phpmodel.png" alt="Model Student Code" class="guide-img"> 
              <li>Lengkapi hasil model menjadi seperti program berikut</li>
                <img src="../picture/p10/15model.png" alt="Student" class="guide-img">
            </ul>
            <br>
          </li>
          <li>
            <h4>3. Relationship Model Subject</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:model Subject</code> untuk membuat sebuah model relationship model subject</li>
                <img src="../picture/p10/16phpmodel.png" alt="Model Subject Code" class="guide-img"> 
              <li>Lengkapi hasil model menjadi seperti program berikut</li>
                <img src="../picture/p10/17model.png" alt="Subjects" class="guide-img"> 
            </ul>
            <br>
          </li>
        </ul>
        <br>
        
        <h4>D. Seeder</h4>
        <ul>
          <li>
            <h4>1. Seeder Major</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:seeder MajorSeeder</code> untuk membuat sebuah seeder data sample dari major</li>
                <img src="../picture/p10/18phpseeder.png" alt="Seeder Major Code" class="guide-img"> 
              <li>Lengkapi hasil seeder menjadi seperti program berikut</li>
                <img src="../picture/p10/19seeder.png" alt="MajorSeeder" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>2. Seeder Subject</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:seeder SubjectSeeder</code> untuk membuat sebuah seeder data sample dari subject</li>
                <img src="../picture/p10/20phpseeder.png" alt="Seeder Subject Code" class="guide-img"> 
              <li>Lengkapi hasil seeder menjadi seperti program berikut</li>
                <img src="../picture/p10/21seeder.png" alt="SubjectSeeder" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>3. Seeder Student</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:seeder StudentSeeder</code> untuk membuat sebuah seeder data sample dari student</li>
                <img src="../picture/p10/22phpseeder.png" alt="Seeder Student Code" class="guide-img"> 
              <li>Lengkapi hasil seeder menjadi seperti program berikut</li>
                <img src="../picture/p10/23seeder.png" alt="StudentSeeder" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>4. Update DatabaseSeeder</h4>
            <ul>
              <li>Perbaiki kode yang ada di file DatabaseSeeder menjadi seperti program berikut</li>
                <img src="../picture/p10/24seeder.png" alt="DatabaseSeeder" class="guide-img"> 
              <li>Setelah semua langkah diatas selesai, ketikkan perintah <code>php artisan db:seed</code> pada terminal untuk menjalankan semua seeder yang sudah dibuat sebelumnya</li>
                <img src="../picture/p10/24.5php.png" alt="PHP Artisan" class="guide-img"> 
            </ul>
            <br>
          </li>
        </ul>
        <br>

        <h4>E. Controller Student</h4>
        <ul>
          <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:controller StudentController</code> untuk membuat sebuah controller dari data student</li>
            <img src="../picture/p10/25phpcontroller.png" alt="Controller Student Code" class="guide-img"> 
          <li>Lengkapi hasil controller menjadi seperti program berikut</li>
            <img src="../picture/p10/26controller.png" alt="StudentController" class="guide-img"> 
        </ul>
        <br>

        <h4>F. Routes</h4>
        <ul>
          <li>Kemudian buka folder routes, pada file <strong>web.php</strong> tuliskan kode seperti berikut</li>
            <img src="../picture/p10/27routes.png" alt="Route" class="guide-img"> 
        </ul>
        <br>

        <h4>G. Views</h4>
        <ul>
          <li>
            <h4>1. Main Layout</h4>
            <ul>
              <li>Buat sebuah file pada destinasi <strong>resources/views/layouts/</strong> dengan nama filenya <strong>app.blade.php</strong></li>
                <img src="../picture/p10/28layoutfile.png" alt="Layout File" class="guide-img" style="height: 200px; width:auto"> 
              <li>Buka file views tersebut lalu buatkan kode menjadi seperti berikut</li>
                <img src="../picture/p10/29layout.png" alt="Layout" class="guide-img"> 
            </ul>
            <br>
          </li> 
          <li>
            <h4>2. Index Student</h4>
            <ul>
              <li>Buat sebuah file pada destinasi <strong>resources/views/students/</strong> dengan nama filenya <strong>index.blade.php</strong></li>
                <img src="../picture/p10/30indexfile.png" alt="Index File" class="guide-img" style="height: 200px; width:auto"> 
              <li>Buka file views tersebut lalu buatkan kode menjadi seperti berikut</li>
                <img src="../picture/p10/31index.png" alt="Index" class="guide-img"> 
            </ul>
            <br>
          </li> 
          <li>
            <h4>3. Create Student</h4>
            <ul>
              <li>Buat file dengan nama file <strong>create.blade.php</strong></li>
              <li>Buka file views tersebut lalu buatkan kode menjadi seperti berikut</li>
                <img src="../picture/p10/32create.png" alt="Create" class="guide-img"> 
            </ul>
            <br>
          </li> 
        </ul>
        <br>

        <h4>Hasil Project</h4>
        <ul>
          <li>Halaman Index Student</li>
            <img src="../picture/p10/33result.png" alt="Result Index" class="guide-img"> 
            <br>
          <li>Perintah Untuk Tombol Detail Student</li>
            <img src="../picture/p10/34detail.png" alt="Detail Button Code" class="guide-img"> 
          <li>Perintah Untuk Tombol Edit Student</li>
            <img src="../picture/p10/35edit.png" alt="Edit Button Code" class="guide-img"> 
          <li>Ubah juga sedikit perintah StudentController tepatnya pada fungsi show</li>
            <img src="../picture/p10/36show.png" alt="Function Show" class="guide-img"> 
          <li>Halaman Detail Student</li>
            <img src="../picture/p10/37result.png" alt="Result Detail" class="guide-img"> 
          <li>Halaman Edit Student</li>
            <img src="../picture/p10/38result.png" alt="Result Edit" class="guide-img"> 
        </ul>
        <br>

        <h4>Kesimpulan</h4>
        <p>Melalui praktikum ini, mahasiswa mempelajari cara mengimplementasikan konsep 
          relationship antar tabel dalam database menggunakan Laravel. Praktikum dimulai 
          dari pembuatan migration dengan foreign key, lalu dilanjutkan dengan penerapan 
          relasi One-to-Many dan Many-to-Many menggunakan fitur Eloquent ORM. 
          Mahasiswa juga memahami bagaimana melakukan query antar relasi secara efisien 
          dan terstruktur dengan memanfaatkan kemampuan yang disediakan oleh Laravel.</p> 
        <p>Selain itu, mahasiswa dilatih untuk menampilkan data relasional tersebut ke dalam 
          view menggunakan Blade templating engine, sehingga mampu membangun keterkaitan logis 
          antara struktur database dan antarmuka pengguna. Praktikum ini secara keseluruhan 
          bertujuan meningkatkan pemahaman konseptual dan kemampuan teknis mahasiswa dalam 
          membangun aplikasi web Laravel yang dinamis, terhubung, dan mudah dikembangkan.</p>
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
