<!DOCTYPE html>
<html lang="tr">
<head>
    <title>İletişim</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/skilline.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<?php
    require_once "config.php";
    session_start();
    if (!isset($_SESSION['userEmail']))
        require_once "navbar.html";
    else
        require_once "navbarLogged.html";
?>  

<!-- İletişim Bölümü -->
<div class="container text-center my-5">
    <h1 class="display-4 text-primary">Bana Ulaşın</h1>
    <div class="row justify-content-center mt-5">
        <!-- LinkedIn -->
        <div class="col-md-6 d-flex align-items-center justify-content-center mb-4">
            <i class="fab fa-linkedin fa-3x text-primary me-3"></i>
            <a href="https://www.linkedin.com/in/musa-al-ahmed-b187292a1/" target="_blank" class="fs-4 text-decoration-none text-primary">LinkedIn</a>
        </div>
        <!-- Instagram -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <i class="fab fa-instagram fa-3x text-danger me-3"></i>
            <a href="https://www.instagram.com/musabyte/" target="_blank" class="fs-4 text-decoration-none text-primary">Instagram</a>
        </div>
    </div>
</div>



<!-- Öğrenci Bilgileri Bölümü -->
<section class="container my-5 p-4 bg-light rounded shadow">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="text-primary fw-bold mb-4">Öğrenci Bilgileri</h2>
            <p>Proje, öğrenci tarafından yapıldı:</p>
            <ul class="list-unstyled">
                <li><strong>Öğrenci No:</strong> 23040301118</li>
                <li><strong>Adı:</strong> MUSA</li>
                <li><strong>Soyadı:</strong> AL AHMED</li>
                <li><strong>Fakülte:</strong> Mühendislik Fakültesi</li>
                <li><strong>Bölüm:</strong> Yazılım Mühendisliği</li>
            </ul>
        </div>
        <div class="col-md-6 text-center">
            <img src="imgs/musaalahmed.png" class="img-fluid rounded-circle shadow" alt="Musa Al Ahmed" style="max-width: 300px;">
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="mt-32" style="background-color: rgba(37, 38, 65, 1);">
        <div class="max-w-lg mx-auto">
            <div class="flex py-12 justify-center text-white items-center px-20 sm:px-36">
                <div class="relative">
                    <h1 class="font-bold text-xl pr-5 relative z-50">Musa ALAHMED</h1>
                    <svg class="w-11 h-11 absolute -top-2 -left-3 z-40" viewBox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.9645 2.94975C37.9171 0.997129 41.0829 0.997127 43.0355 2.94975L76.0502 35.9645C78.0029 37.9171 78.0029 41.0829 76.0503 43.0355L43.0355 76.0502C41.0829 78.0029 37.9171 78.0029 35.9645 76.0503L2.94975 43.0355C0.997129 41.0829 0.997127 37.9171 2.94975 35.9645L35.9645 2.94975Z" stroke="#26C1F2" stroke-width="2"/>
                    </svg>
                </div>
                <span class="border-l border-gray-500 text-sm pl-5 py-2 font-semibold">Güvenilir Araç Kiralama Platformu</span>
            </div>
            <div class="text-center pb-16 pt-5">
                <label class="text-gray-300 font-semibold">Kampanyalarımızdan Haberdar Olun</label>
                 
            </div>
            <div class="text-center text-white">
                <p class="my-3 text-gray-400 text-sm">&copy; 2025 Araç Kiralama Platformu</p>
       
               
            </div>
        </div>
    </footer>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
