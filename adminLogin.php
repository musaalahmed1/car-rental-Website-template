<!DOCTYPE html>
<html>
<head>
    <title>Admin Girişi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    session_start();
    require_once "config.php";
    require_once "navbar.html";
    
    if(isset($_POST["adminName"]) && isset($_POST["adminPassword"])){
        $adminName = $_POST["adminName"];
        $adminPass = $_POST["adminPassword"];
        $pass_hash = hash("sha256", $adminPass);

        $sql = "SELECT * FROM `admin` WHERE `Kullanici_Adi` = '$adminName' AND `Sifre` = '$pass_hash'";
        $q = mysqli_query($connect, $sql);

        if(!$q){
            echo "<div class='alert alert-danger'>Bir Hata meydana geldi</div>";
            exit;
        }
        $login = mysqli_num_rows($q);

        if ($login==1) // Giriş başarılıysa
            $_SESSION['adminName'] = $adminName;
        else
            $message = "<div class='alert alert-danger text-center'>Kullanıcı adı veya şifre yanlış</div>";
    }
    if(isset($_SESSION['adminName'])) // Daha önce giriş yapılmışsa
        header("Location: adminIndex.php");
    else {
?>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-container col-md-4">
            <form action="adminLogin.php" method="POST">
                <h2 class="text-center mb-4"><i class="fas fa-user-shield"></i> Admin Girişi</h2>
                <?php if(isset($message)) echo $message; ?>
                <div class="form-group mb-3">
                    <label for="name"><i class="fas fa-user"></i> Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="name" name="adminName" placeholder="Kullanıcı Adı" required>
                </div>
                <div class="form-group mb-4">
                    <label for="pass"><i class="fas fa-lock"></i> Şifre</label>
                    <input type="password" class="form-control" id="pass" name="adminPassword" placeholder="Şifre" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
            </form>
            <hr class="my-4">
            <div class="text-center">
                <a href="login.php">Kullanıcı Girişi</a>
            </div>
        </div>
    </div>
<?php
    }
    mysqli_close($connect);
?>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
