<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kevin Andhika</title>
    <link href="external\bootstrap\bootstrap.min.css" rel="stylesheet">
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
  
  /* STUDY PHP */
  .section-title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
  }
  .card-border{
    border-radius: 25px;
  }
</style>
<body>

    <!-- Navbar -->
    <?php include 'structure/navbar.php'; ?>

    <!-- Main Content -->
    <div class="container-fluid px-4 py-5">
      <div class="container mb-5">
        <div class="row">
          <h2 class="mb-4 section-title">Blog Studi :</h2>
          <div class="col-6">
            <!-- PEMROGRAMAN WEB -->
            <div class="card card-border">
              <div class="card-body">
                <h4 class="card-title m-2"><strong>Pemrograman Web</strong></h4>
                <p class="card-text mx-2">Pembelajaran menggunakan bahasa pemograman PHP, HTML dan CSS melalui aplikasi Visual Studio Code.</p>
                <a href="study_pweb.php" class="btn btn-primary">
                  Lihat Pertemuan <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-6">
            <!-- PEMBELAJARAN MESIN -->
            <div class="card card-border">
              <div class="card-body">
                <h4 class="card-title m-2"><strong>Pembelajaran Mesin</strong></h4>
                <p class="card-text mx-2">Pembelajaran menggunakan bahasa pemograman python melalui website Google Colab.</p>
                <a href="#" class="btn btn-primary">
                  Lihat Pertemuan <i class="fas fa-arrow-right"></i>
                </a>
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
