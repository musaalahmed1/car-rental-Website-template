<!DOCTYPE html>
<html>
    <head>
    <title>MUSA ALAHMED : 23040301118 FINAL SINAVI Projesi</title>
    <meta charset="UTF-8">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    </head>
<?php
    require_once "config.php";
    session_start();
    if(!isset($_SESSION['userEmail']))
        require_once "navbar.html";
    else
        require_once "navbarLogged.html";

    //rastgele 4 adet arac resmi gostermek icin once satir sayisi hesaplaniyor
    $row = mysqli_fetch_row(mysqli_query($connect, "SELECT COUNT(*) From `arac` WHERE `Arac_Kategori`='ekonomik'"));
    $rowCount = $row[0];
    $carArray = array();
    //rastgele veri secerek carArray dizisinde ID'ler tutuluyor
    while(1){
        if(count($carArray) == 4)
            break;
        else {
            $randomID = rand(1,$rowCount);
            if(!in_array($randomID,$carArray))//daha onceden eklenmediyse
                array_push($carArray,$randomID);
        }
    }

?>


 
 <!-- Başlık -->
 <section class="py-5 bg-light text-center">
        <h1 class="display-4 text-primary">Hemen Araç Kiralayın</h1>
    </section>

    <!-- Araç Kiralama Formu -->
    <section class="py-5">
        <form action="rent.php" method="POST">
            <div class="container">
                <div class="row gy-4">
                    <!-- Teslim Noktası -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="receivePoint" class="form-label fs-5 text-primary">Teslim Noktası</label>
                            <select class="form-select form-select-lg" id="receivePoint" name="receivePoint" required>
                                <option value="0">Bursa/Nilüfer</option>
                                <option value="1">Bursa/Osmangazi</option>
                                <option value="2">İstanbul/Kadıköy</option>
                                <option value="3">İstanbul/Beşiktaş</option>
                                <option value="4">Ankara/Söğütözü</option>
                            </select>
                        </div>
                    </div>
                    <!-- Teslim Tarihi -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="receiveDate" class="form-label fs-5 text-primary">Teslim Tarihi</label>
                            <input type="datetime-local" class="form-control form-control-lg" id="receiveDate" name="receiveDate" required>
                        </div>
                    </div>
                    <!-- İade Noktası -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="returnPoint" class="form-label fs-5 text-primary">İade Noktası</label>
                            <select class="form-select form-select-lg" id="returnPoint" name="returnPoint" required>
                                <option value="0">Bursa/Nilüfer</option>
                                <option value="1">Bursa/Osmangazi</option>
                                <option value="2">İstanbul/Kadıköy</option>
                                <option value="3">İstanbul/Beşiktaş</option>
                                <option value="4">Ankara/Söğütözü</option>
                            </select>
                        </div>
                    </div>
                    <!-- İade Tarihi -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="returnDate" class="form-label fs-5 text-primary">İade Tarihi</label>
                            <input type="datetime-local" class="form-control form-control-lg" id="returnDate" name="returnDate" required>
                        </div>
                    </div>
                </div>
                <!-- Kirala Butonu -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Kirala</button>
                </div>
            </div>
        </form>
    </section>

<p class="display-4 text-center text-primary mt-5">Popüler Kiralama Seçenekleri</p>
<!-- Popüler arac card'lari -->
<div class="container col-sm-10 mt-5 mb-5 ">
    <div class="row">
        <?php
            //4 adet arac card'i yazdiriyor
            for($i=0;$i<4;$i++){
                $sql = "SELECT * FROM `arac` WHERE `Arac_ID`= $carArray[$i]";
                $car = mysqli_fetch_array(mysqli_query($connect,$sql));
                echo'
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="'.$car["Arac_IMG"].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$car["Arac_MarkaModel"].'</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">'.$car["Vites_Turu"].'</li>
                            <li class="list-group-item">'.$car["Yakit_Turu"].'</li>
                            <li class="list-group-item"><b>'.$car["Kiralama_Ucret"].' ₺</b></li>
                        </ul>
                        <div class="card-body">
                            <a href="index.php#rent" class="card-link">Kirala</a>
                        </div>
                    </div>
                </div>
                ';
            }
            mysqli_close($connect);
        ?>
    </div>
</div>

<div >
    <p align="center">MUSA AL AHMED Öğrenci No: 23040301118
    <br> Her Hakkı Saklıdır. Copyrigt &copy 2024</p>
</div>