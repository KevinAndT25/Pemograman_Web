<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kevin Andhika</title>
    <link href="external/bootstrap/bootstrap.min.css" rel="stylesheet">
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
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        position: relative;
        transition: all 0.5s ease;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease forwards;
    }

    .image-arch:hover {
        box-shadow: 0 25px 50px rgba(22, 17, 121, 0.25);
        transform: scale(1.5) translateY(-100px);
    }

    .image-arch img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 150px 150px 30px 30px;
        transition: all 0.6s ease;
    }

    .image-arch:hover img {
        transform: scale(1.50);
    }

    .text-section {
        background-color: white;
        padding: 40px 50px;
        border-radius: 20px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        min-height: 380px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        transition: all 0.4s ease;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease forwards;
    }

    .text-section:hover {
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        transform: scale(1.02) translateY(-3px);
    }

    h1 {
        font-size: 48px;
        font-weight: bold;
        color: var(--primary);
        transition: color 0.3s ease;
    }

    h1:hover {
        color: var(--light);
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 32px;
        }

        .text-section {
            padding: 30px;
        }

        .row.align-items-center {
            flex-direction: column;
            gap: 30px;
        }
    }
    #typing-text {
        font-size: 16.5px;
        line-height: 1.8;
        color: #444;
        padding: 10px;
        font-weight: 500;
        transition: all 0.4s ease;
        min-height: 150px;
    }

    #typing-text::after {
        content: "|";
        animation: blink 1s infinite;
        color: var(--primary);
        font-weight: bold;
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
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
                            <p id="typing-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'structure/footer.php'; ?>

    <script src="external/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="external/fontawesome/fontawesome.js" crossorigin="anonymous"></script>
    <script> document.addEventListener("DOMContentLoaded", function () {
        const text = "Halo! Saya Kevin Andhika, mahasiswa aktif dari Departemen Informatika, Universitas Andalas. Saya memiliki minat besar di bidang Pengembangan Web dan terus mengasah keterampilan melalui berbagai proyek dan eksplorasi teknologi terkini. Website ini saya bangun sebagai bagian dari portofolio sekaligus ruang dokumentasi pembelajaran saya selama menempuh perjalanan di dunia teknologi.";
        const target = document.getElementById("typing-text");
        let index = 0;

        function typeWriter() {
            if (index < text.length) {
                target.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, 20);
            }
        }

        typeWriter();
    });</script>

</body>
</html>
