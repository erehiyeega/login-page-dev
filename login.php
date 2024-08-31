<?php
session_start();

$email = $_POST['email'];
$password = $_POST['pass'];

$hardcodedEmail = 'admin@email.com';
$hardcodedPassword = 'wI87Xr2QbmCa';

if ($email === $hardcodedEmail && $password === $hardcodedPassword) {
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("Location: home.php");
    exit;
} else {
    echo "<script>alert('Email atau Password salah!');window.location.href='index.html';</script>";
}
?>
