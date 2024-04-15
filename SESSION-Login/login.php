<?php
session_start();
include "koneksi.php";

$npm = $_POST['npm'];
$password = $_POST['pass'];

// Mengecek kondisi jika user ada atau tidak
$sql_user = mysqli_query($mysqli, "SELECT * FROM login WHERE npm='$npm' AND pass='$password'");
$cek_user = mysqli_num_rows($sql_user);

if ($cek_user > 0) {
    $_SESSION['login'] = true;
    header('Location: ../home-user.php');
    exit();
} else {
    header('Location: ../index.php');
    exit();
}