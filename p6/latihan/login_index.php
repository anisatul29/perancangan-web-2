<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Pilih Login - Sistem Laundry Online</title>

<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #ECEFF1;
        margin:0;
        padding:0;
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
    }

    .container {
        width: 380px;
        background:white;
        padding:30px;
        border-radius:12px;
        text-align:center;
        box-shadow:0px 6px 15px rgba(0,0,0,0.1);
        border-top:7px solid #1A237E;
    }

    h2{
        color:#1A237E;
        margin-bottom:25px;
    }

    .btn{
        display:block;
        background-color:#1A237E;
        color:white;
        padding:12px;
        margin:10px 0;
        border-radius:8px;
        text-decoration:none;
        font-size:16px;
        transition:0.3s;
    }

    .btn:hover{
        background:#0D154A;
    }

    .note{
        margin-top:18px;
        font-size:14px;
        color:#37474F;
    }

    .note a{
        color:#1A237E;
        text-decoration:none;
        font-weight:bold;
    }
</style>
</head>

<body>

<div class="container">
    <h2>🔐 Login Sistem Laundry</h2>

    <a href="login_admin.php" class="btn">👑 Login Admin</a>
    <a href="login_karyawan.php" class="btn">🧑‍🔧 Login Karyawan</a>
    <a href="login_pelanggan.php" class="btn">🛍 Login Pelanggan</a>

    <p class="note">
        Belum punya akun sebagai pelanggan? 
        <a href="register_pelanggan.php">Daftar di sini</a>
    </p>
</div>

</body>
</html>
