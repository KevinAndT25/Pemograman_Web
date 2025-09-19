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
    --hover-glow: rgba(38, 31, 179, 0.5);
  }

  html, body {
    height: 100%;
  }
  main {
    flex: 1;
  }
  body {
    display: flex;
    flex-direction: column;
    background-color: var(--white);
    font-family: Arial, sans-serif;
  }
  
  /* STUDY PEMOGRAMAN WEB PHP */
  .back-btn {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: var(--primary);
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
  }

  .back-btn i {
    font-size: 24px;
    margin-right: 10px;
  }

  .back-btn:hover {
    color: var(--accent);
  }

  .back-btn i {
    font-size: 20px;
    margin-right: 8px;
  }

  /* GITHUB */
  .github-box {
    background-color: white;
    border: 2px solid var(--primary);
    border-radius: 12px;
    padding: 12px 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    width: fit-content;
    /* max-width: 300px; */
    color: var(--primary);
  }

  .github-box:hover {
    background-color: var(--primary);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  .github-box i {
    transition: transform 0.3s ease;
  }

  .github-box:hover i {
    transform: scale(1.2);
  }

  .github-text {
    font-size: 18px;
    font-weight: bold;
  }

  /* MATERI PERTEMUAN */
  .card-materi {
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    padding: 20px;
    transition: all 0.5s ease;
    cursor: pointer;
    transform: translateY(30px);
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s ease forwards;
    border: 2px solid transparent;
  }

  .card-materi:nth-child(1) {
    animation-delay: 0.1s;
  }
  .card-materi:nth-child(2) {
    animation-delay: 0.2s;
  }
  .card-materi:nth-child(3) {
    animation-delay: 0.3s;
  }

  .card-materi:hover {
    transform: scale(1.05) translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    border-color: var(--hover-glow);
  }

  .card-materi img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    margin-top: 15px;
    transition: transform 0.4s ease;
  }

  .card-materi:hover img {
    transform: scale(1.07);
  }

  .card-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 5px;
    transition: color 0.4s ease;
  }

  .card-subtitle {
    font-size: 15px;
    color: #555;
    transition: color 0.4s ease;
  }

  .card-materi:hover .card-title {
    color: var(--primary);
  }

  .card-materi:hover .card-subtitle {
    color: var(--light);
  }

  .card-materi:nth-child(1) { animation-delay: 0.2s; }
  .card-materi:nth-child(2) { animation-delay: 0.4s; }
  .card-materi:nth-child(3) { animation-delay: 0.6s; }

  @keyframes fadeInUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @media screen and (max-width: 768px) {
    .back-btn {
      font-size: 14px;
    }
  }

  @media (max-width: 768px) {
    .card-materi {
      padding: 15px;
    }

    .card-title {
      font-size: 17px;
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
  <main class="container-fluid px-4 py-5">
    <div class="container mb-5">

    <!-- Back to study -->
      <a href="study.php" class="back-btn"><i class="fas fa-arrow-left"></i> Big Data</a>
      
      <!-- GitHub Button -->
      <div class="d-flex justify-content-end">
        <a href="https://github.com/KevinAndT25/Pemograman_Web/tree/main/2005"
          class="github-box d-flex align-items-center text-decoration-none mb-4">
          <i class="fab fa-github fa-2x me-3"></i>
          <span class="github-text">Link GitHub</span>
        </a>
      </div>
      

      <!-- Kartu Materi -->
      <div class="row">
        <!-- PERTEMUAN 1 -->
        <div class="col-md-6 mb-4 d-flex">
          <div class="container">
            <a href="#" class="text-decoration-none text-dark w-100">
              <div class="card-materi h-100">
                  <div class="card-title">n/a</div>
                  <!-- <div class="card-subtitle">Setup Environment, Dart Dasar dan OOP Dart</div> -->
                  <!-- <img src="picture_amob/p1/10ekstensi.png" alt="Pertemuan 1"> -->
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  

  <!-- Footer -->
  <?php include 'structure/footer.php'; ?>


  <script src="external\bootstrap\bootstrap.bundle.min.js"></script>
  <script src="external\fontawesome\fontawesome.js" crossorigin="anonymous"></script>
</body>
</html>
