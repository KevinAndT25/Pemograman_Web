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
            --accent2:rgb(0, 255, 26);
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

        /* PERTEMUAN 15 PHP */
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

        .badge-primary {
            background-color:rgb(13, 253, 25);
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
            border-left: 5px solid var(--accent2);
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

        .badge-primary{
            background-color: var(--accent2);
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
        <span class="badge badge-primary mb-2">Tugas Pembelajaran</span>
        <p class="text-muted">17 Juni 2025 ~ Oleh <strong>Kevin Andhika</strong></p>

        <h1>API dan RESTful API</h1>

        <h3>1. Tujuan</h3>
        <p>Untuk menambah pemahaman pengguna mengenai konsep dasar API dalam pengembangan aplikasi modern, 
          praktikum ini bertujuan agar pengguna dapat memahami manfaat penggunaan API serta arsitektur 
          RESTful API yang umum diterapkan. Melalui praktikum ini, pengguna akan belajar mengimplementasikan 
          berbagai API endpoints menggunakan Laravel, serta melakukan testing dan debugging untuk memastikan 
          fungsionalitas berjalan dengan baik. Selain itu, pengguna juga diarahkan untuk menerapkan best practices 
          dalam pengembangan API, sehingga dapat membangun layanan yang efisien, terstruktur, dan mudah diintegrasikan 
          dengan sistem lainnya.</p>
        <br>

        <h3>2. Langkah-langkah</h3>
        <h4>A. Instalasi Laravel</h4>
        <ul>
          <li>Buka aplikasi cmder lalu buka folder dimana file baru ingin dibuat <strong>C:\xampp\htdocs\Laravel</strong> setelah itu ketikkan perintah 
            <code>composer create-project laravel/laravel api-project</code> dimana api-project adalah nama file yang akan dibuat</li>
            <img src="../picture/p15/1composer.png" alt="Instalasi Laravel" class="guide-img"> 
          <li>Masuk ke dalam folder yang dibuat tadi, lalu ketikkan <code>php artisan serve</code></li>
            <img src="../picture/p15/2cd.png" alt="PHP Artisan Serve" class="guide-img"> 
          <li>Berikut hasil ketika link artisan serve di klik</li>
            <img src="../picture/p15/3laravel.png" alt="Artisan Serve Link" class="guide-img"> 
        </ul>
        <br>

        <h4>B. PHP Artisan Make</h4>
        <ul>
          <li>
            <h4>1. Database dan Migration</h4>
            <ul>
              <li>Kemudian buka aplikasi Visual Studio Code dan buka file api-project yang dibuat sebelumnya</li>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:migration create_products_table</code> untuk membuat sebuah database migration tentang tabel produk</li>
                <img src="../picture/p15/4makemigration.png" alt="Migration" class="guide-img"> 
              <li>Lengkapi hasil migration pada bagian <strong>schema::create</strong> menjadi seperti program berikut</li>
                <img src="../picture/p15/5schemacreate.png" alt="Program" class="guide-img"> 
              <li>Setelah itu, jalankan perintah <code>php artisan migrate</code> untuk memastikan perintah migration sebelumnya dijalankan sistem</li>
                <img src="../picture/p15/6phpmigrate.png" alt="Migrate" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>2. Model</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:model Product</code> untuk membuat sebuah product</li>
                <img src="../picture/p15/7makemodel.png" alt="Model" class="guide-img"> 
              <li>Lengkapi hasil model menjadi seperti program berikut</li>
                <img src="../picture/p15/8product.png" alt="Program" class="guide-img"> 
            </ul>
            <br>
          </li>
        </ul>
        <br>

        <h4>API</h4>
        <ul>
          <li>
            <h4>1. Routes API</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan install:api</code> untuk membuat sebuah routes API</li>
                <img src="../picture/p15/9installapi.png" alt="Routes API" class="guide-img"> 
              <li>Lengkapi hasil routes menjadi seperti program berikut</li>
                <img src="../picture/p15/10routesapi.png" alt="Program" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>2. API Controller</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:controller ProductController --api</code> untuk membuat sebuah controller API dari product</li>
                <img src="../picture/p15/11makecontroller.png" alt="Controller" class="guide-img"> 
              <li>Lengkapi hasil controller menjadi seperti program berikut</li>
                <img src="../picture/p15/12productcontroller.png" alt="Program" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>3. API Resources (Data Transformation)</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:resource ProductResource</code> untuk membuat sebuah resources dari product</li>
                <img src="../picture/p15/13makeresource.png" alt="Controller" class="guide-img"> 
              <li>Lengkapi hasil resource menjadi seperti program berikut</li>
                <img src="../picture/p15/14productresource.png" alt="Program" class="guide-img"> 
            </ul>
            <br>
          </li>
        </ul>
        <br>
        
        <h4>C. Setelah API digunakan</h4>
        <ul>
          <li>
            <h4>1. Memakai Resource pada Controller</h4>
            <ul>
              <li>Buka ProductController, ubah pada bagian index dan show menjadi program seperti berikut</li>
                <img src="../picture/p15/15index.png" alt="Index" class="guide-img"> 
                <img src="../picture/p15/16show.png" alt="Show" class="guide-img"> 
            </ul>
            <br>
          </li>
          <li>
            <h4>2. Validasi dan Error Handling</h4>
            <ul>
              <li>Pada bagian terminal VS Code ketikkan perintah <code>php artisan make:request StoreProductRequest</code> untuk membuat sebuah form request product</li>
                <img src="../picture/p15/17makerequest.png" alt="Request" class="guide-img"> 
              <li>Lengkapi hasil request menjadi seperti program berikut</li>
                <img src="../picture/p15/18storeproductrequest.png" alt="Program" class="guide-img">
            </ul>
            <br>
          </li>
          <li>
            <h4>3. Global Exception Handler</h4>
            <ul>
              <li>Buat folder baru pada </li>
                <img src="../picture/p15/19exceptionsfile.png" alt="File" class="guide-img" style="height: 100px; width:auto"> 
              <li>Tambahkan kode perintah berikut kedalam file Handler.php untuk menangani exception</li>
                <img src="../picture/p15/20render.png" alt="Program" class="guide-img"> 
            </ul>
            <br>
          </li>
        </ul>
        <br>
        
        <h4>D. PostMan</h4>
          <ul>
            <li>Pada Terminal (bisa commandprompt / cmder) ketikkan perintah <code>npm install -g json-server</code> atau <code>sudo npm install -g json-server</code> jika perintah pertama mengeluarkan error</li>
              <img src="../picture/p15/21installjson.png" alt="Install JSON" class="guide-img"> 
            <li><strong>GET - Mengambil Semua Products</strong> menggunakan method get untuk memperlihatkan isi data database yang sudah ada pada url yang dicantumkan</li>
              <img src="../picture/p15/22get.png" alt="GET" class="guide-img">  
            <li><strong>POST - Membuat Product Baru</strong> menggunakan method post untuk membuat data database baru pada url yang dicantumkan, dengan id yang auto increment dengan id sebelumnya</li>
              <img src="../picture/p15/23post.png" alt="POST" class="guide-img">   
            <li><strong>GET - Mengambil Product Berdasarkan ID</strong> menggunakan method get untuk memperlihatkan isi data database yang sudah ada pada url yang dicantumkan berdasarkan id suatu data</li>
              <img src="../picture/p15/24getagain.png" alt="GET AGAIN" class="guide-img">  
            <li><strong>PUT - Update Product</strong> menggunakan method put untuk mengganti isi data database yang sudah ada pada url yang dicantumkan berdasarkan id yang dimasukkan</li>
              <img src="../picture/p15/25put.png" alt="PUT" class="guide-img">  
            <li><strong>DELETE - Hapus Product</strong> menggunakan method delete untuk menghapus data database yang sudah ada pada url yang dicantumkan berdasarkan id yang ingin dihapus</li>
              <img src="../picture/p15/26delete.png" alt="DELETE" class="guide-img">  
          </ul>
        <br>

        <h4>Kesimpulan</h4>
        <p>Melalui praktikum ini, pengguna mempelajari konsep dasar dan penerapan RESTful API 
          menggunakan Laravel, dimulai dari proses instalasi proyek hingga pembuatan endpoint 
          API yang lengkap. Pengguna juga diajak untuk membangun struktur database menggunakan 
          migration, membuat model, controller, dan resource, serta memahami bagaimana API 
          dapat digunakan untuk menampilkan, menambahkan, mengubah, dan menghapus data melalui 
          metode HTTP seperti GET, POST, PUT, dan DELETE.</p> 
        <p>Selain itu, praktikum ini melatih pengguna untuk melakukan validasi data, 
          penanganan error menggunakan form request dan exception handler, serta melakukan 
          pengujian API menggunakan Postman. Dengan menyelesaikan seluruh langkah dalam praktikum, 
          pengguna memperoleh keterampilan teknis dalam membangun layanan API yang efisien, 
          terstruktur, dan sesuai dengan best practices, sehingga siap untuk diintegrasikan dalam 
          pengembangan aplikasi web modern berbasis Laravel.</p>
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
