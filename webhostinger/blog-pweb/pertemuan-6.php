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
    --light: #261FB3;
    --white: #FFF8F8;
  }

  body {
    background-color: var(--white);
    font-family: Arial, sans-serif;
  }
  
  /* PERTEMUAN 6 PHP */
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
    max-width: 960px;
    margin: auto;
    padding: 20px;
    background-color: var(--white);
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  }

  .badge-info {
    background-color: #0d6efd;
    color: #fff;
  }

  img.guide-img {
    width: 100%;
    max-width: 800px;
    height: auto;
    margin: 10px 0;
    border-radius: 8px;
    justify-content: center; align-items: center
  }

  h1, h2, h3, h4 {
    margin-top: 1.5rem;
    font-weight: 700;
    font-weight: bold;
  }

  ul {
    padding-left: 1.2rem;
  }

  @media screen and (max-width: 768px) {
    .container-custom {
      padding: 15px;
    }

    h1 {
      font-size: 1.75rem;
    }

    .back-btn {
      font-size: 14px;
      padding: 6px 12px;
    }
  }
</style>
<body>
  <!-- Navbar -->
  <?php include '../structure/navbar2.php'; ?>

  <!-- Main Content -->
  <div class="container-fluid px-4 py-4">
    <div class="container-custom  mb-5">
    <a href="../study_pweb.php" class="back-btn"><i class="fas fa-arrow-left"></i></a>
      <div class="container">
        <span class="badge badge-info mb-2">Laporan Praktikum</span>
        <p class="text-muted">14 Mei 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>Langkah-langkah Membuat CRUD Sederhana OOP PHP dan MySQL</h1>

        <h3>1. Tujuan</h3>
        <p>Agar mahasiswa mampu mengimplementasikan konsep OOP pada PHP dengan membuat suatu aplikasi CRUD sederhana.</p>
        <br>

        <h3>2. Alat yang digunakan</h3>
        <ul>
          <li>XAMPP (SQL)</li>
          <li>Visual Studio Code (code editor)</li>
          <li>Git (jika perlu)</li>
        </ul>
        <br>

        <h3>3. Langkah-langkah</h3>

        <h4>A. Persiapan</h4>
        <ul>
          <li>Pertama buat folder baru <code>crud</code> di dalam folder htdocs yang ada pada folder XAMPP</li>
          <li>Kemudian buat beberapa file dan folder seperti berikut di dalam folder crud sebelumnya.</li>
            <img src="../picture/p6/list_folder_crud.png" alt="List Folder CRUD" class="guide-img" style="height: 500px; width:auto">
          <li>Download dan simpan file css dan js <code>Bootstrap</code> kemudian masukkan hasil download css dan js ke dalam folder <code>assets</code>.</li>
        </ul>
        <br>

        <h4>B. Koneksi ke Database</h4>
        <ul>
          <li>Buat database <code>pemrograman_web</code> dengan menggunakan kode SQL kemudian buat juga tabel <code>mahasiswa</code>.</li>
            <img src="../picture/p6/create_database.png" alt="Buat Database" class="guide-img">
            <img src="../picture/p6/create_table.png" alt="Buat Tabel" class="guide-img">
          <li>Buka file <code>Database.php</code> pada folder config lalu buat kode berikut untuk membuat koneksi ke database</li>
            <img src="../picture/p6/connect_database.png" alt="Koneksi Database" class="guide-img">
        </ul>
        <br>

        <h4>C. File Config</h4>
        <ul>
          <li>Buka file <code>Config.php</code> pada folder config lalu tambahkan kode variabel <code>BASE_URL</code> ini agar nanti bisa diakses dari kelas manapun.</li>
            <img src="../picture/p6/config_url.png" alt="Config BASE URL" class="guide-img">
        </ul>
        <br>

        <h4>D. Alert</h4>
        <ul>
          <li>Buka file <code>Alert.php</code> pada folder function lalu buat kode berikut untuk menampilkan pesan berhasil/gagalnya aktifitas yang dijalankan.</li>
            <img src="../picture/p6/alert.png" alt="Alert" class="guide-img">
        </ul>
        <br>

        <h4>E. Class Model Mahasiswa</h4>
        <ul>
          <li>Buka file <code>mahasiswa.php</code> pada folder model lalu tambahkan fungsi <code>session_start()</code> dan juga <code>class Mahasiswa</code> yang berisi deklarasi variabel-variabel yang nanti akan dibutuhkan.</li>
          <li>Tambahkan fungsi <code>constructor</code> serta operasi Create, Read, Update dan Delete di dalamnya.</li>
            <img src="../picture/p6/model_mahasiswa_merge.png" alt="Model Mahasiswa" class="guide-img">
        </ul>
        <br>

        <h4>F. Class Function Mahasiswa</h4>
        <ul>
          <li>Buat file <code>mahasiswa.php</code> pada folder function lalu buat kode ini.</li>
          <li>Panggil file Database.php, Config.php, dan model/mahasiswa.php dengan menggunakan fungsi <code>include</code> atau <code>include_once</code></li>
          <li>Kemudian buat objek <code>new Database</code> dan <code>new mahasiswa</code> yang akan disambungkan koneksinya.</li>
          <li>Tambahkan kode program <code>$_Get['action']</code> ini pada kode sebelumnya.</li>
            <img src="../picture/p6/function_mahasiswa.png" alt="Function Mahasiswa" class="guide-img">
        </ul>
        <br>

        <h4>G. View</h4>
        <ul>
          <li><code>Index.php</code>: file ini akan menampilkan data-data mahasiswa  yang sudah berhasil di input.</li>
            <img src="../picture/p6/index_merge.png" alt="Code Index" class="guide-img">
            <img src="../picture/p6/index_result.png" alt="Result Index" class="guide-img">
          <li><code>Create.php</code>: file ini adalah tempat untuk menambahkan data mahasiswa.</li>
            <img src="../picture/p6/create_1.png" alt="Code Create" class="guide-img">
            <img src="../picture/p6/create_result.png" alt="Result Create" class="guide-img">
          <li><code>Edit.php</code>: file ini adalah tempat pengguna mengedit data mahasiswa yang sudah di input sebelumnya.</li>
            <img src="../picture/p6/edit_merge.png" alt="Code Edit" class="guide-img">
            <img src="../picture/p6/edit_result.png" alt="Result Edit" class="guide-img">
        </ul>
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
