<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kevin Andhika</title>
    <link href="external\bootstrap\bootstrap.min.css" rel="stylesheet">
    <link href="external\fontawesome\fontawesome.all.min.css" rel="stylesheet">
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
  
  /* STUDY P WEB PHP */
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

  .card-materi {
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    padding: 20px;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .card-materi:hover {
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }

  .card-materi img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    margin-top: 15px;
  }

  .card-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .card-subtitle {
    font-size: 14px;
    color: #555;
  }

  @media (max-width: 768px) {
    .card-materi {
      padding: 15px;
    }

    .card-materi img {
        max-width: 100%;
    }

    .card-title {
      font-size: 16px;
    }

    .card-subtitle {
      font-size: 13px;
    }
  }     
</style>
<body>

    <!-- Navbar -->
    <?php include 'structure/navbar.php'; ?>

    <!-- Main Content -->
    <div class="container-fluid px-4 py-5">
        <div class="container mb-5">
          <a href="study.php" class="back-btn"><i class="fas fa-arrow-left"></i> Pemrograman Web</a>
          
          <!-- Kartu Materi -->
          <div class="row">
            <div class="col-6">
              <div class="container">
                <a href="blog-pweb/pertemuan-6.php" class="text-decoration-none text-dark">
                <div class="card-materi">
                    <div class="card-title">Laporan Praktikum - Pertemuan 6</div>
                    <div class="card-subtitle">Langkah-langkah Membuat CRUD Sederhana OOP PHP dan MySQL</div>
                    <img src="picture/p6/index_result.png" alt="Pertemuan 6">
                </div>
              </a>
              </div>
            </div>
            <div class="col-6">
              <div class="container">

              </div>
            </div>
          </div>
          
          
        </div>
    </div>
    
    

    <!-- Footer -->
    <?php include 'structure/footer.php'; ?>


    <script src="external\bootstrap\bootstrap.bundle.min.js"></script>
    <script src="external\fontawesome\fontawesome.js" crossorigin="anonymous"></script>
</body>
</html>
