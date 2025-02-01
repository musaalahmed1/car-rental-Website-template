<!DOCTYPE html>
<html>
<head>
    <title>Üye Girişi</title>
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
    
    if(isset($_POST["userEmail"]) && isset($_POST["userPassword"])){
        $email = $_POST["userEmail"];
        $pass = $_POST["userPassword"];
        $pass_hash = hash("sha256", $pass);

        $sql = "SELECT * FROM `kullanici` WHERE `eposta` = '$email' AND `Sifre` = '$pass_hash'";
        $result = mysqli_query($connect, $sql);

        if(!$result){
            echo "<div class='alert alert-danger'>Bir Hata meydana geldi</div>";
            exit;
        }
        $login = mysqli_num_rows($result);
        if ($login==1){
            $sql = "SELECT `Kullanici_ID` FROM `kullanici` WHERE `eposta` = '$email'";
            $result2 = mysqli_query($connect, $sql);
            $row = mysqli_fetch_assoc($result2);
            $_SESSION['userEmail'] = $email;
            $_SESSION['userID'] = $row["Kullanici_ID"];
        }    
        else
            $message = "<div class='alert alert-danger text-center'>Kullanıcı adı veya şifre yanlış</div>";
    }
    if(isset($_SESSION['userEmail'])) 
        header("Location: index.php");
    else {
?>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-container col-md-4">
            <form action="login.php" method="POST">
                <h2 class="text-center mb-4"><i class="fas fa-sign-in-alt"></i> Giriş Yapın</h2>
                <?php if(isset($message)) echo $message; ?>
                <div class="form-group mb-3">
                    <label for="email"><i class="fas fa-envelope"></i> Email address</label>
                    <input type="text" class="form-control" id="email" name="userEmail" placeholder="email@example.com" required>
                </div>
                <div class="form-group mb-4">
                    <label for="pass"><i class="fas fa-lock"></i> Password</label>
                    <input type="password" class="form-control" id="pass" name="userPassword" placeholder="Şifre" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
            </form>
            <hr class="my-4">
            <div class="text-center">
                <a href="register.php">Üye değil misin? Kayıt Ol</a><br>
                <a href="adminLogin.php">Admin Girişi</a>
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
