<?php
// Proje ayarlarını dahil et ve oturumu başlat
require_once "config.php";
session_start();

// Oturum durumuna göre gezinme dosyasını dahil et
if (!isset($_SESSION['userEmail'])) {
    require_once "navbar.html";
} else {
    require_once "navbarLogged.html";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AracKiralama - Ana Sayfa</title>
    <!-- CSS Dosyalarını Bağla -->
    <link rel="stylesheet" href="css/skilline.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Yeni Ana Sayfa Arayüzü -->
    <div class="bg-cream">
        <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-center">
            <!--Sol Kolon-->
            <div class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
                <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken">
                    <span class="text-blue-500">Araç Kiralama</span> Artık Daha Kolay
                </h1>
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8">Rekabetçi fiyatlar ve kaliteli hizmetlerle en büyük araç kiralama platformu</p>
                <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="w-full flex items-center justify-center lg:justify-center md:space-x-5">
                    <a href="listCars.php" class="lg:mx-0 bg-blue-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                        Araçları Görüntüle
                    </a>
                </div>
            </div>
            <!--Sağ Kolon-->
            <div class="w-full lg:w-6/12 relative">
                <img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto" src="imgs/p-ford-puma.png" alt="Araba">
            </div>
        </div>
    </div>

    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">
        <h2 class="text-center text-3xl font-bold mt-10" data-aos="zoom-in">Hizmetlerimiz</h2>
        <p class="text-center text-gray-500 my-4" data-aos="fade-up" data-aos-delay="200">İhtiyacınıza uygun araç seçeneklerini keş edin</p>
        <!-- Araç Bölümü -->
        <div class="grid md:grid-cols-3 gap-10 mt-10">
            <div class="bg-white shadow-md rounded-lg p-5 text-center" data-aos="flip-left">
                <img src="imgs/c-renault-zoe.png" alt="Ekonomik Araçlar" class="mx-auto mb-4">
                <h3 class="font-semibold text-xl">Ekonomik Araçlar</h3>
                <p class="text-gray-500">Yakıt tasarrufu ve uygun fiyat seçenekleri</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-5 text-center" data-aos="flip-up" data-aos-delay="200">
                <img src="imgs/c-mercedes-c-serisi.png" alt="Lüks Araçlar" class="mx-auto mb-4">
                <h3 class="font-semibold text-xl">Lüks Araçlar</h3>
                <p class="text-gray-500">Konfor ve prestiji bir arada yaşayın</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-5 text-center" data-aos="flip-right" data-aos-delay="400">
                <img src="imgs/k-volvo-xc90.png" alt="Aile Araçları" class="mx-auto mb-4">
                <h3 class="font-semibold text-xl">Aile Araçları</h3>
                <p class="text-gray-500">Geniş iç hacim ve aile dostu seçenekler</p>
            </div>
        </div>
    </div>

    <div class="md:flex mt-40 md:space-x-10 items-start">
        <div data-aos="fade-down" class="md:w-7/12 relative">
            <div style="background: #33EFA0" class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse"></div>
            <div style="background: #33D9EF;" class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping"></div>
            <img class="relative z-50 floating" src="imgs/araba.png" alt="">
            <div style="background: #5B61EB;" class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"></div>
            <div style="background: #F56666;" class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"></div>
        </div>
        <div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-gray-500">
            <h1 class="text-2xl font-semibold text-darken lg:pr-40"><span class="text-blue-500">Araç kiralama platformu</span> her ihtiyacınız için tasarımlandı</h1>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="11.8182" height="11.8182" rx="2" fill="#2F327D"/>
                        <rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#2F327D"/>
                        <rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="#2F327D"/>
                        <rect x="14.7727" y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#F48C06"/>
                    </svg>
                </div>
                <p>Size en uygun araç kategorisini kolayca bulmanız için tasarım yapıldı.</p>
            </div>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="6" width="20" height="20" rx="2" fill="#2F327D"/>
                        <rect width="21.2245" height="21.2245" rx="2" fill="#F48C06"/>
                    </svg>
                </div>
                <p>Farklı kategorilerdeki araçları tek bir platformda keşfedin.</p>
            </div>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 11.375C6.15469 11.375 7.5 9.91758 
                        7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 
                        4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 
                        11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.3324
                        2 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9
                        .91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 
                        13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 
                        30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25
                         7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3
                         125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.43
                         75 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z" fill="#2F327D"/>
                    </svg>
                </div>
                <p>Kullanıcı dostu tasarımıyla tüm bilgilere kolayca erişim.</p>
            </div>
        </div>
    </div>


    <div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
        <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
            <h1 class="text-darken font-semibold text-3xl lg:pr-56">
                <span class="text-blue-500">Öğrenci Bilgileri</span></h1>
            <p class="text-gray-500 my-4 lg:pr-32"> proje  öğrenci tarafından yapıldı:</p>
            <ul class="text-gray-500">
                <li><strong>Öğrenci No :</strong> 23040301118</li>
                <li><strong>Adı :</strong> MUSA</li>
                <li><strong>Soyadı :</strong> AL AHMED</li>
                <li><strong>Fakülte :</strong>Mühendislik Fakültesi</li>
                <li><strong>Bölüm :</strong> Yazılım Mühendisliği</li>
            </ul>
        </div>
        <img data-aos="fade-left" class="md:w-1/3 rounded-full shadow-lg" src="imgs/musaalahmed.png">
    </div>


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
                <div class="py-3 tracking-wide">
                    <p>Tasarım ve Kodlama <span class="font-semibold">mhaecal</span></p>
                    <p>UI/UX Tasarım <span class="font-semibold">Irvan Moses</span></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Dosyalarını Dahil Et -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
