<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$token = $_POST['token'] ?? '';

if ($username === 'Sneha' && $password === 'J25044839') {
    $_SESSION['user'] = $username;
    $_SESSION['token'] = $token;
    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.php?error=1');
    exit();
}
?>