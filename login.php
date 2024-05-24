<?php
include("koneksi.php");
$username = "";
$password = "";
$err = "";
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == '' or $password == '') {
        $err = "<li>Silahkan masukan username dan password</li>";
    }
    if(empty($err)){
        $sql1 = "SELECT * FROM admin WHERE username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1); 
        if($r1['password'] != md5($password)){
            $err = "<li>Akun tidak ditemukan</li>";
        }
    }
    if(empty($err)){
        $_SESSION['admin_username'] = $username;
        header("location:admin/admin.php");
        exit();
    } 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="registrasi">
        <h1>SIGN IN</h1>
        <?php
            if($err) {
                echo "<ul>$err</ul>";
            }
        ?>
        <form action="" method="post">
            <ul>
                <li>
                    <input type="text" value="<?php echo $username ?>" placeholder="USERNAME" name="username" id="username">
                </li>
                <br>
                <li>
                    <input type="password" placeholder="PASSWORD" name="password" id="password">
                </li>
                <br>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
        </form>
        <div class="register">
                <p>Don't have an account? <a href="registrasi.php">Register</a></p>
            </div>
    </div>
</body>
</html>