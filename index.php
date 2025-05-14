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

    /* INDEX PHP */
    .main-content {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 80px 120px;
        gap: 120px;
        max-width: 1400px;
        margin: 0 auto;
    }
    
    .image-arch {
        width: 100%;
        max-width: 362px;
        height: auto;
        background-color: white;
        border-radius: 150px 150px 30px 30px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }

    .image-arch img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 150px 150px 30px 30px;
    }

    .text-section {
        background-color: white;
        padding: 40px 50px;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        min-height: 380px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    h1 {
        font-size: 48px;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 32px;
        }

        .text-section {
            padding: 30px;
        }

        .row.align-items-center {
            min-height: 500px; /* Sesuaikan dengan kebutuhan */
        }
    }
</style>
<body>
    <!-- Navbar -->
    <?php include 'structure/navbar.php'; ?>

    <!-- Main Content -->
    <div class="container-fluid px-4 py-5">
        <div class="row align-items-center">
            <!-- IMAGE SECTION -->
            <div class="col-lg-4 d-flex justify-content-center mb-3 mb-lg-0">
                <div class="image-arch"> 
                    <img src="picture/Kevin.png" alt="Example Image">
                </div>
            </div>

            <!-- TEXT SECTION -->
            <div class="col-lg-8 d-flex align-items-center">
                <div class="container">
                    <div class="w-100">
                        <h1 class="mb-3 text-center text-lg-start">KEVIN ANDHIKA</h1>
                        <div class="text-section">
                            <p>Nama saya Kevin Andhika, mahasiswa aktif di Departemen Informatika, Universitas Andalas.
                            Fokus saya saat ini adalah di bidang Pemograman Web.
                            Website ini saya buat sebagai bagian dari portofolio dan dokumentasi pembelajaran saya.</p>
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
