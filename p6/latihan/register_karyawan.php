<?php
include "koneksi.php";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);
    $confirm = trim($_POST['confirm_password']);
    $role = "karyawan";

    // Cek apakah username sudah ada
    $check = mysqli_query($conn, "SELECT * FROM karyawan_login WHERE username='$username'");
    
    if (mysqli_num_rows($check) > 0) {
        $message = "<p style='color:red;'>⚠ Username sudah digunakan!</p>";
    } elseif ($password !== $confirm) {
        $message = "<p style='color:red;'>⚠ Password tidak sama!</p>";
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $query = mysqli_query($conn, "INSERT INTO karyawan_login (username, password, role) 
                                      VALUES ('$username', '$hashed', '$role')");
        
        if ($query) {
            $message = "<p style='color:green;'>✔ Registrasi berhasil! Silakan login.</p>";
        } else {
            $message = "<p style='color:red;'>❌ Terjadi kesalahan! Coba lagi.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Registrasi Karyawan</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ECEFF1;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        width: 380px;
        background: white;
        padding: 25px;
        border-radius: 10px;
        border-top: 7px solid #1A237E;
        box-shadow: 0px 0px 12px rgba(0,0,0,0.15);
        text-align: center;
    }

    h2 {
        color: #1A237E;
        margin-bottom: 18px;
    }

    input {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border-radius: 6px;
        border: 1px solid #9E9E9E;
        font-size: 15px;
    }

    button {
        width:100%;
        background:#1A237E;
        color:white;
        border:none;
        padding:12px;
        border-radius:6px;
        font-size:16px;
        cursor:pointer;
        margin-top:15px;
        transition:0.3s;
    }

    button:hover {
        background:#0D154A;
    }

    a {
        text-decoration:none;
        color:#1A237E;
    }

    .login-link {
        margin-top:12px;
        font-size:14px;
    }
</style>
</head>

<body>

<div class="container">
    <h2>Register Karyawan</h2>

    <?php echo $message; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Masukkan Username" required>
        <input type="password" name="password" placeholder="Masukkan Password" required>
        <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
        <button type="submit">Daftar</button>
    </form>

    <p class="login-link">Sudah punya akun? <a href="login_karyawan.php">Login disini</a></p>
</div>

</body>
</html>
