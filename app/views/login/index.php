<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/login.css">
</head>
<body>
<div class="login d-flex flex-column justify-content-center align-items-center ">
    <form action="" method="post" class="d-flex konten flex-column justify-content-center align-items-center overflow-hidden">
        <div class="circle-login"><img src="img/icon/icon.png" alt=""></div>
        <h1>LOGIN ADMIN</h1>
        <div class="d-flex input ju row g-1">
            <label for="email">Email</label>
            <div class="user"><img src="../public/img/icon/user.png" alt="" style="width: 17px;"><input type="email" name="email" id="email" placeholder="Masukkan Email" /></div>
            <label for="pass">Password</label>
            <div class="pass"><img src="../public/img/icon/password.png" style="width: 17px;" alt=""><input type="password" name="pass" id="pass" placeholder="Masukkan Password" /></div>
            <div class="remember">
                <input type="checkbox" name="check" id="check" class="col-1" />
                <label for="check" class="col">Remember me!</label>
            </div>
            <button type="submit" name="submit">LOGIN</button>
        </div>

    </form>
    <p>© copyright 2024 | Built with Udinese</p>
</div>

<script src="./public/js/popper.js"></script>
    <script src="./public/js/bootstrap.js"></script>
</body>
</html>
