<?php 
include "header.php";
?>

<style>
    /* Background gradient */
    body {
        background: linear-gradient(135deg, #FF7EB9, #FF75A0);
        font-family: 'Arial', sans-serif;
    }

    /* Center login form */
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    /* Style for the login card */
    .login-card {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 380px;
        text-align: center;
        transform: translateY(0);
        transition: transform 0.3s ease-in-out;
        animation: fadeIn 0.8s ease-out;
    }

    /* Hover effect on login card */
    .login-card:hover {
        transform: translateY(-15px);
    }

    /* Logo styling */
    .login-card img {
        width: 100px;
        margin-bottom: 20px;
    }

    /* Title style */
    .login-card h3 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        letter-spacing: 1px;
    }

    /* Input field styling */
    .login-card .form-control {
        border-radius: 15px;
        padding: 15px;
        margin-bottom: 20px;
        border: 2px solid #ddd;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .login-card .form-control:focus {
        border-color: #FF7EB9;
        box-shadow: 0 0 5px rgba(255, 126, 185, 0.5);
        outline: none;
    }

    /* Button styling */
    .login-card .btn-login {
        background-color: #FF7EB9;
        color: white;
        border-radius: 15px;
        padding: 14px;
        width: 100%;
        font-size: 18px;
        border: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .login-card .btn-login:hover {
        background-color: #FF75A0;
        transform: scale(1.05);
    }

    /* Forgot password styling */
    .forgot-password {
        color: #FF7EB9;
        font-size: 14px;
        text-decoration: none;
        margin-top: 10px;
        display: block;
    }

    .forgot-password:hover {
        text-decoration: underline;
    }

    /* Disabled forgot password link */
    a.forgot-password {
        pointer-events: none;
        color: grey;
        text-decoration: none;
    }

    /* Keyframe for fadeIn animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="container login-container">
    <div class="login-card">
        <img src="assets/file/mthree.png" alt="Logo">
        <h3>Admin</h3>
        <form method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="login_username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="login_password" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <button class="btn-login" name="login">Masuk</button>
            </div>
            <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
        </form>
    </div>
</div>

<?php 
if (isset($_POST['login'])) {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    $cek = $koneksi->query("SELECT * FROM admin WHERE username_admin = '$username' AND password_admin = '$password'");
    $hitung = $cek->num_rows;

    if ($hitung == 1) {
        $data_login = $cek->fetch_assoc();
        $_SESSION['admin'] = $data_login;

        echo "<script>alert('Login berhasil!');</script>";
        echo "<script>location = 'admin/'</script>";
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
        echo "<script>location = 'login.php'</script>";
    }
}
include "footer.php";
?>
