<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kevin Andhika</title>
    <link href="external\bootstrap\bootstrap.min.css" rel="stylesheet">
    <link href="external/fontawesome/fontawesome.all.min.css" rel="stylesheet">
</head>
<style>
  :root {
    --primary: #161179;
    --primary-dark: #0C0950;
    --light: #261FB3;
    --white: #FFF8F8;
    --hover-glow: rgba(38, 31, 179, 0.5);
  }

  body {
    background-color: var(--white);
    font-family: Arial, sans-serif;
  }
  
  /* STUDY PHP */
  .section-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 30px;
    color: var(--primary);
  }

  /* Blog Card Style */
  .card-blog {
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    transition: all 0.5s ease;
    cursor: pointer;
    border: 2px solid transparent;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s ease forwards;
  }

  .card-blog:hover {
    transform: scale(1.05) translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    border-color: var(--hover-glow);
  }

  .card-blog .card-title {
    font-size: 22px;
    color: var(--primary);
    transition: color 0.4s ease;
  }

  .card-blog:hover .card-title {
    color: var(--light);
  }

  .card-blog .card-text {
    font-size: 15px;
    color: #555;
    transition: color 0.4s ease;
  }

  .card-blog:hover .card-text {
    color: var(--primary-dark);
  }

  .btn-primary {
    background-color: var(--primary);
    border-color: var(--primary-dark);
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: var(--primary-dark);
    border-color: var(--primary-dark);
    box-shadow: 0 0 12px var(--hover-glow);
  }

  @keyframes fadeInUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @media (max-width: 768px) {
    .section-title {
      font-size: 22px;
    }

    .card-blog .card-title {
      font-size: 18px;
    }

    .card-blog .card-text {
      font-size: 14px;
    }
  }
</style>
<body>

    <!-- Navbar -->
    <?php include 'structure/navbar.php'; ?>

    <!-- Main Content -->
    <div class="container-fluid px-4 py-5">
      <div class="container mb-5">
        <div class="row">
          <h2 class="section-title">Blog Studi :</h2>

          <!-- PEMROGRAMAN WEB -->
          <div class="col-md-6 mb-4 d-flex">
            <div class="w-100">
              <div class="card card-blog h-100">
                <div class="card-body">
                  <h4 class="card-title m-2"><strong>Pemrograman Web</strong></h4>
                  <p class="card-text mx-2">Pembelajaran menggunakan bahasa pemrograman PHP, HTML dan CSS melalui aplikasi Visual Studio Code.</p>
                  <a href="study_pweb.php" class="btn btn-primary m-2">
                    Lihat Pertemuan <i class="fas fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- PEMBELAJARAN MESIN -->
          <div class="col-md-6 mb-4 d-flex">
            <div class="w-100">
              <div class="card card-blog h-100">
                <div class="card-body">
                  <h4 class="card-title m-2"><strong>Pembelajaran Mesin</strong></h4>
                  <p class="card-text mx-2">Pembelajaran menggunakan bahasa pemrograman Python melalui website Google Colab.</p>
                  <a href="study_pmesin.php" class="btn btn-primary m-2">
                    Lihat Pertemuan <i class="fas fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- APLIKASI MOBILE -->
          <div class="col-md-6 mb-4 d-flex">
            <div class="w-100">
              <div class="card card-blog h-100">
                <div class="card-body">
                  <h4 class="card-title m-2"><strong>Aplikasi Mobile</strong></h4>
                  <p class="card-text mx-2">Pembelajaran menggunakan bahasa pemrograman Dart melalui aplikasi Visual Studio Code.</p>
                  <a href="study_amobile.php" class="btn btn-primary m-2">
                    Lihat Pertemuan <i class="fas fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Big Data -->
          <div class="col-md-6 mb-4 d-flex">
            <div class="w-100">
              <div class="card card-blog h-100">
                <div class="card-body">
                  <h4 class="card-title m-2"><strong>Big Data</strong></h4>
                  <p class="card-text mx-2">Pembelajaran menggunakan bahasa pemrograman python melalui aplikasi Google Colab dan Visual Studio Code.</p>
                  <a href="study_bdata.php" class="btn btn-primary m-2">
                    Lihat Pertemuan <i class="fas fa-arrow-right"></i>
                  </a>
                </div>
              </div>
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
