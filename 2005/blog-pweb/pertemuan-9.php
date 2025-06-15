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
        <p class="text-muted">09 Juni 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>LARAVEL AUTH, CRUD Multi Level User Next Step</h1>

        <h3>1. Tujuan</h3>
        <p>Untuk menambah pemahaman pengguna mengenai cara menginstal dan membuat project Laravel 
          menggunakan Composer, serta mengatur konfigurasi database dengan benar. 
          Praktikum ini juga bertujuan agar pengguna dapat memahami proses pembuatan sistem autentikasi 
          seperti login dan register menggunakan Laravel UI. Selain itu, pengguna dilatih untuk memodifikasi 
          struktur tabel users sesuai kebutuhan, menambahkan data admin dengan seeder, serta mengintegrasikan 
          template Bootstrap guna memperindah tampilan antarmuka menggunakan Blade templating engine di dalam Laravel.</p>
        <br>

        <h3>2. Langkah-langkah</h3>
        <h4>A. Manajemen Pengguna Users</h4>
        <ul>
          <li>Jalankan aplikasi XAMPP agar bisa terkoneksi dengan localhost</li>
          <li>Buka folder project sebelumnya <strong>laravel-sisfo</strong> di dalam htdocs (htdocs ada di dalam folder XAMPP) pada aplikasi Visual Studio Code</li>
          <li>Setelah itu buka terminal Visual Studio Code dengan shortcut <strong>ctrl+j</strong>, ketikkan perintah berikut pada terminal
            <code>php artisan make:controller UserController –resource</code></li>
            <img src="../picture/p9/1terminal_usercontroll.png" alt="User Contoller" class="guide-img"> 
          <li>Setelah kode artisan make:controller sebelumnya berhasil dijalankan akan muncul tampilan seperti berikut</li>
            <img src="../picture/p9/2terminal_result.png" alt="Terminal Result" class="guide-img"> 
          <li>Lalu pada Route tambahkan kode program seperti berikut</li>
            <img src="../picture/p9/3route.png" alt="Route" class="guide-img"> 
          <li>Buka file UserController Resource yang baru saja dibuat, kemudian tambahkan kode seperti berikut</li>
            <img src="../picture/p9/4usercontroller.png" alt="UserController" class="guide-img" style="height: 1300px; width:auto"> 
        </ul>
        <br>

        <h4>B. UserController Create</h4>
        <ul>
          <li>Pada function create tambahkan action berikut untuk menampilkan view form tambah data users</li>
            <img src="../picture/p9/5create.png" alt="Create" class="guide-img"> 
          <li>Buka file main.blade.php kemudian tambahkan file css dan js select2 seperti berikut</li>
            <img src="../picture/p9/6css.png" alt="Css" class="guide-img"> 
            <img src="../picture/p9/7js.png" alt="Js" class="guide-img"> 
          <li>Selanjutnya untuk membuat form inputan create user tambahkan kode berikut pada file create.blade.php</li>
            <img src="../picture/p9/8create_blade.png" alt="Create Blade" class="guide-img" style="height: 615px; width:auto"> 
          <li>Kemudian jalankan program dengan mengetikkan <code>php artisan serve</code> di terminal, kemudian mengklik link IP yang diberikan dan menambahkan .../users/create pada laman</li>
            <img src="../picture/p9/9create_result.png" alt="Create Result" class="guide-img">
        </ul>
        <br>

        <h4>C. UserController Store</h4>
        <ul>
          <li>Pada function store tambahkan kode program berikut
            <img src="../picture/p9/10store.png" alt="Store" class="guide-img">
            <p>Form create user menggunakan method POST yang akan dikirimkan ke action store dengan route
              users.store, selanjutnya pada action store akan ditangkap isi form create user dengan cara
              <code>$request->get(‘nama input’)</code> kemudian disimpan pada table user dengan cara instance model
              User dengan cara <code>$user = new \App\Models\User</code> setelah itu assign sesuai dengan nama field.
              Untuk menyimpan kedalam database User menggunakan perintah <code>$user->save</code>, jika data berhasil
              disimpan akan di redirect ke route users.index dengan mebawa session status.</p></li> 
        </ul>
        <br>

        <h4>D. UserController Index</h4>
        <ul>
          <li>Pada function index tambahkan kode program berikut</li>
            <img src="../picture/p9/11index.png" alt="Index" class="guide-img">
          <li>Selanjutnya untuk membuat kodingan untuk tampilan index user seperti berikut pada file index.blade.php</li>
            <img src="../picture/p9/12index_blade.png" alt="Index Blade" class="guide-img"> 
          <li>Tambahkan file css dan js pada bagian main.blade.php seperti berikut agar datatables bisa digunakan</li>
            <img src="../picture/p9/13css.png" alt="Css2" class="guide-img"> 
            <img src="../picture/p9/14js.png" alt="Js2" class="guide-img"> 
          <li>Tambahkan kode ini untuk memberikan tombol yang akan mengarahkan pengguna ke form tambah user</li>
            <img src="../picture/p9/15tombol_create.png" alt="Tombol Create Users" class="guide-img"> 
          <li>Kemudian jalankan program dengan mengetikkan <code>php artisan serve</code> di terminal, kemudian mengklik link IP yang diberikan dan menambahkan .../users pada laman</li>
            <img src="../picture/p9/16store_result.png" alt="Store Result" class="guide-img">
        </ul>
        <br>

        <h4>E. UserController Edit & Update</h4>
        <ul>
          <li>Pada file index.blade.php tambahkan kode program berikut didalam kolom [action] untuk membuat tombol edit tiap user</li>
            <img src="../picture/p9/16.5tombol_edit.png" alt="Tombol Edit" class="guide-img">
          <li>Pada function edit tambahkan kode program berikut</li>
            <img src="../picture/p9/17edit.png" alt="Edit" class="guide-img">
          <li>Selanjutnya untuk kode program berikut pada file edit.blade.php</li>
            <img src="../picture/p9/18edit_blade.png" alt="Edit Blade" class="guide-img" style="height: 500px; width:auto"> 
          <li>Kemudian jalankan program dengan mengetikkan <code>php artisan serve</code> di terminal, kemudian mengklik link IP yang diberikan dan menklik user yang ingin di edit</li>
            <img src="../picture/p9/19edit_result.png" alt="Edit Result" class="guide-img">
          <li>Pada function update tambahkan kode program berikut</li>
            <img src="../picture/p9/20update.png" alt="Update" class="guide-img">
          <li>Kemudian jalankan program dengan mengetikkan <code>php artisan serve</code> di terminal, kemudian mengklik link IP yang diberikan dan menklik user yang ingin di edit</li>
          <li>Disini saya memilih users Admin kemudian mengubah nama nya menjadi fulan bin fulan lalu simpan</li>
            <img src="../picture/p9/21update_result.png" alt="Update Result" class="guide-img">
            <img src="../picture/p9/22update_result.png" alt="Update Result2" class="guide-img">
            <img src="../picture/p9/23update_result.png" alt="Update Result3" class="guide-img">
        </ul>
        <br>

        <h4>F. UserController Delete</h4>
        <ul>
          <li>Pada file index.blade.php tambahkan kode program berikut dibawah tombol edit sebelumnya untuk membuat tombol delete tiap user</li>
            <img src="../picture/p9/24tombol_delete.png" alt="Tombol Delete" class="guide-img">
          <li>Pada function destroy tambahkan kode program berikut</li>
            <img src="../picture/p9/25delete.png" alt="Delete" class="guide-img">
          <li>Kemudian jalankan program dengan mengetikkan <code>php artisan serve</code> di terminal, kemudian mengklik link IP yang diberikan dan menklik user yang ingin di hapus/delete</li>
            <img src="../picture/p9/26delete_result.png" alt="Delete Result" class="guide-img">
            <img src="../picture/p9/27delete_result.png" alt="Delete Result2" class="guide-img">
        </ul>
        <br>

        <h4>G. Navbar Users</h4>
        <ul>
          <li>Buka file sidebar.blade.php kemudian tambahkan kode program berikut</li>
            <img src="../picture/p9/28nav_link.png" alt="Nav Link" class="guide-img">
          <li>Kemudian jalankan program dengan mengetikkan <code>php artisan serve</code> di terminal, kemudian mengklik link IP yang diberikan</li>
            <img src="../picture/p9/29nav_link_result.png" alt="Nav Link Result" class="guide-img" style="height: 300px; width:auto">
        </ul>
        <br>

        <h4>Kesimpulan</h4>
        <p>Melalui praktikum ini, pengguna telah mempelajari cara membangun sistem
          manajemen pengguna (user management) berbasis Laravel dengan fitur CRUD lengkap. 
          Proses dimulai dari pembuatan controller resource, pengaturan routing, 
          hingga pembuatan tampilan menggunakan Blade templating engine. 
          Pengguna juga memahami alur penyimpanan data melalui model Eloquent dan pemrosesan 
          input menggunakan objek $request.</p>
        <p>Selain itu, integrasi plugin seperti Select2 dan DataTables berhasil meningkatkan 
          interaktivitas dan tampilan antarmuka. Penambahan navigasi pada sidebar menunjukkan 
          kemampuan dalam membangun antarmuka aplikasi yang terstruktur. 
          Praktikum ini secara keseluruhan melatih keterampilan teknis dan konseptual pengguna 
          dalam mengembangkan aplikasi web Laravel yang fungsional dan siap dikembangkan lebih lanjut.</p>
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
