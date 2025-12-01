<?php
session_start();
include 'koneksi.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM karyawan_login WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        if (password_verify($password, $data['password'])) {
            $_SESSION['karyawan'] = $data['username'];
            header("Location: dashboard_karyawan.php");
            exit;
        } else {
            $message = "<p style='color:red;'>❌ Password salah!</p>";
        }
    } else {
        $message = "<p style='color:red;'>❌ Username tidak ditemukan!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Karyawan</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ECEFF1;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-box {
        background-color: white;
        width: 350px;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0px 0px 12px rgba(0,0,0,0.2);
        text-align: center;
        border-top: 8px solid #1A237E;
    }

    h2 {
        color: #1A237E;
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        padding: 13px;
        margin-top: 10px;
        border-radius: 6px;
        border: 1px solid #9E9E9E;
    }

    button {
        width: 100%;
        background-color: #1A237E;
        border: none;
        padding: 13px;
        margin-top: 20px;
        color: white;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background-color: #0D154A;
    }

    a {
        color: #1A237E;
        font-size: 15px;
        text-decoration: none;
    }

    .register-text {
        margin-top: 15px;
        font-size: 14px;
    }
</style>
</head>

<body>
<div class="login-box">
    <h2>Login Karyawan</h2>

    <?php echo $message; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Masukkan Username" required>
        <input type="password" name="password" placeholder="Masukkan Password" required>

        <button type="submit">Login</button>
    </form>

    <p class="register-text">Belum punya akun? <a href="register_karyawan.php">Daftar disini</a></p>
</div>
</body>
</html>
