<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kevin Andhika</title>
  <link href="external/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="external/fontawesome/fontawesome.all.min.css" rel="stylesheet">
<style>
  :root {
    --primary: #161179;
    --primary-dark: #0C0950;
    --light: #261FB3;
    --white: #FFF8F8;
    --hover-glow: rgba(38, 31, 179, 0.3);
  }

  body {
    background-color: var(--white);
    font-family: Arial, sans-serif;
  }

  .section-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 30px;
    color: var(--primary);
  }

  /* Reusable Card Style */
  .card-style {
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    transition: all 0.4s ease;
    border: 2px solid transparent;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s ease forwards;
  }

  .card-style:hover {
    transform: scale(1.04) translateY(-6px);
    box-shadow: 0 20px 40px var(--hover-glow);
    border-color: var(--hover-glow);
  }

  /* Skills */
  .skills-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .skill-item {
    width: 160px;
    padding: 20px;
    text-align: center;
    transition: all 0.s ease;
  }

  .skill-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 10px;
  }

  .skill-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .skill-item:hover {
    background-color: #f0f0ff;
    border-radius: 20px;
    box-shadow: 0 12px 28px rgba(22, 17, 121, 0.3);
    transform: translateY(-10px) scale(1.05);
    transition: all 0.4s ease;
  }
  
  /* Contact */
  .contact-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
    padding: 30px;
    border-radius: 20px;
  }

  .contact-item {
    display: flex;
    align-items: center;
    font-size: 18px;
    padding: 15px 20px;
    border-radius: 16px;
    transition: all 0.3s ease;
  }

  .contact-item:hover {
    background-color: rgba(0, 0, 0, 0.03);
    box-shadow: 0 10px 20px var(--hover-glow);
    transform: translateY(-3px);
  }

  .contact-item i {
    font-size: 26px;
    margin-right: 15px;
    color: var(--primary);
  }

  /* Education */
  .education-hr {
    display: flex;
    flex-wrap: wrap; 
    justify-content: center;
    gap: 30px;
  }

  .education-box {
    min-width: 220px;
    padding: 20px;
    border-radius: 16px;
    text-align: center;
  }

  .education-date-hr {
    font-weight: bold;
    font-size: 14px;
    padding: 6px 12px;
    border-radius: 12px 12px 12px 0;
    color: white;
    margin-bottom: 10px;
  }

  .education-box.now .education-date-hr {
    background-color: #dc3545;
  }

  .education-box.past .education-date-hr {
    background-color: #555;
  }

  .education-content {
    font-size: 16px;
    font-weight: bold;
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

    .skill-img {
      width: 80px;
      height: 80px;
    }

    .contact-item {
      font-size: 16px;
    }
    
    .education-line {
      display: none; 
    }
  }

</style>
</head>
<body>

  <!-- Navbar -->
  <?php include 'structure/navbar.php'; ?>

  <!-- Main Content -->
  <div class="container-fluid px-4 py-5">
    <div class="container mb-5">

      <!-- Education -->
      <h2 class="section-title">Education :</h2>
      <div class="education-hr">
        <div class="card-style education-box now">
          <div class="education-date-hr">2023-now</div>
          <div class="education-content">UNIVERSITAS ANDALAS</div>
        </div>
        <div class="card-style education-box past">
          <div class="education-date-hr">2020–2023</div>
          <div class="education-content">SMA N 1 Payakumbuh</div>
        </div>
        <div class="card-style education-box past">
          <div class="education-date-hr">2017–2020</div>
          <div class="education-content">SMP N 1 Payakumbuh</div>
        </div>
      </div>

      <!-- Skills -->
      <h2 class="section-title mt-5">My Skills :</h2>
      <div class="skills-container">
        <?php
        $skills = [
          ["html2.png", "HTML"],
          ["css.png", "CSS"],
          ["php2.png", "PHP"],
          ["java2.png", "Java"],
          ["c++.png", "C++"],
          ["python2.png", "Python"]
        ];
        foreach ($skills as [$img, $name]) {
          echo "
          <div class='card-style skill-item'>
            <div class='skill-img'><img src='picture/$img' alt='$name'></div>
            <strong>$name</strong>
          </div>";
        }
        ?>
      </div>

      <!-- Contact -->
      <h2 class="section-title mt-5">Contact :</h2>
      <div class="contact-container card-style">
        <a href="https://www.youtube.com/@kevinandhika7093" target="_blank" class="contact-item text-decoration-none text-dark">
          <i class="fab fa-youtube"></i><span><strong>YouTube: </strong>@kevinandhika7093</span>
        </a>
        <a href="https://www.instagram.com/kev.llamyx_a" target="_blank" class="contact-item text-decoration-none text-dark">
          <i class="fab fa-instagram"></i><span><strong>Instagram: </strong>kev.llamyx_a</span>
        </a>
        <a href="https://github.com/KevinAndT25" target="_blank" class="contact-item text-decoration-none text-dark">
          <i class="fab fa-github"></i><span><strong>Github: </strong>KevinAndT25</span>
        </a>
        <div class="contact-item">
          <i class="fas fa-envelope"></i><span><strong>Email: </strong>techmankevin@gmail.com</span>
        </div>
        <div class="contact-item">
          <i class="fas fa-phone"></i><span><strong>Telp: </strong>081371507944</span>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <?php include 'structure/footer.php'; ?>

  <script src="external/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="external/fontawesome/fontawesome.js" crossorigin="anonymous"></script>
</body>
</html>
