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
  
  /* ABOUT PHP */
  .section-title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
  }

  .skills-container {
      background-color: white;
      border-radius: 25px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-bottom: 50px;
  }

  .contact-container{
      background-color: white;
      border-radius: 25px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }

  .skill-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      margin: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
  }

  .skill-item:hover {
    background-color: rgba(0, 0, 0, 0.05);
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
  }

  .skill-img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 10px;
  }

  .skill-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    font-size: 18px;
    padding: 10px 15px;
    border-radius: 12px;
    transition: all 0.3s ease;
  }

  .contact-item:hover {
    background-color: rgba(0, 0, 0, 0.03);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transform: translateY(-2px);
  }

  .contact-item i {
    font-size: 28px;
    margin-right: 15px;
  }

  .education-section {
    position: relative;
    padding-top: 40px;
    padding-bottom: 60px;
    overflow-x: auto;
  }

  .education-hr {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    gap: 40px;
    position: relative;
    padding: 0 20px;
    min-width: 800px;
  }

  .education-line {
    position: absolute;
    top: 80px; /* sejajarkan dengan tengah box */
    left: 0;
    height: 4px;
    width: 100%;
    background-color: #ccc;
    z-index: 0;
  }

  .education-box {
    background-color: white;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    min-width: 200px;
    max-width: 250px;
    flex-shrink: 0;
    position: relative;
    text-align: center;
    z-index: 1;
    transition: all 0.3s ease;
  }

  .education-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    background-color: #fff;
  }

  .education-date-hr {
    font-weight: bold;
    padding: 6px 12px;
    display: inline-block;
    border-radius: 12px 12px 12px 0;
    margin-bottom: 10px;
    font-size: 13px;
    color: white;
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

  @media (max-width: 768px) {
    .skill-item {
      margin: 10px;
    }

    .skill-img {
      width: 90px;
      height: 90px;
    }

    .contact-item {
      font-size: 16px;
    }

    .education-horizontal {
      gap: 20px;
      min-width: 600px;
    }

    .education-box {
      min-width: 180px;
    }
  }
</style>
<body>
  <!-- Navbar -->
  <?php include 'structure/navbar.php'; ?>

  <!-- Main Content -->
  <div class="container-fluid px-4 py-5">
    <div class="container mb-3">

      <!-- Education -->
      <h2 class="section-title">Education :</h2>
      <div class="education-hr mb-5">
        <div class="education-box now">
          <div class="education-date-hr">2023-now</div>
          <div class="education-content">UNIVERSITAS ANDALAS</div>
        </div>
        <div class="education-box past">
          <div class="education-date-hr">2020–2023</div>
          <div class="education-content">SMA N 1 Payakumbuh</div>
        </div>
        <div class="education-box past">
          <div class="education-date-hr">2017–2020</div>
          <div class="education-content">SMP N 1 Payakumbuh</div>
        </div>
      </div>
      <!-- My Skills -->
      <h2 class="section-title">My Skills :</h2>
      <div class="skills-container d-flex flex-wrap justify-content-center">
        <div class="skill-item">
            <div class="skill-img"><img src="picture/html2.png" alt="HTML"></div>
            <strong>HTML</strong>
        </div>
        <div class="skill-item">
            <div class="skill-img"><img src="picture/css.png" alt="CSS"></div>
            <strong>CSS</strong>
        </div>
        <div class="skill-item">
            <div class="skill-img"><img src="picture/php2.png" alt="PHP"></div>
            <strong>PHP</strong>
        </div>
        <div class="skill-item">
            <div class="skill-img"><img src="picture/java2.png" alt="Java"></div>
            <strong>JAVA</strong>
        </div>
        <div class="skill-item">
            <div class="skill-img"><img src="picture/c++.png" alt="C++"></div>
            <strong>C++</strong>
        </div>
        <div class="skill-item">
            <div class="skill-img"><img src="picture/python2.png" alt="Python"></div>
            <strong>PYTHON</strong>
        </div>
      </div>

      <!-- Contact -->
      <h2 class="section-title">Contact :</h2>
      <div class="contact-container">
        <a href="https://www.youtube.com/@kevinandhika7093" target="_blank" class="contact-item text-decoration-none text-dark ms-3">
            <i class="fab fa-youtube"></i>
            <span><strong>YouTube : </strong>@kevinandhika7093</span></a>
        <a href="https://www.instagram.com/kev.llamyx_a" target="_blank" class="contact-item text-decoration-none text-dark ms-3">
            <i class="fab fa-instagram"></i>
            <span><strong>Instagram : </strong>kev.llamyx_a</span></a>
        <a href="https://github.com/KevinAndT25" target="_blank" class="contact-item text-decoration-none text-dark ms-3">
            <i class="fab fa-github"></i>
            <span><strong>Github : </strong>KevinAndT25</span></a>
        <div class="contact-item ms-3">
            <i class="fas fa-envelope"></i>
            <span><strong>Email : </strong>techmankevin@gmail.com</span>
        </div>
        <div class="contact-item ms-3">
            <i class="fas fa-phone"></i>
            <span><strong>Telp : </strong>081371507944</span>
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
