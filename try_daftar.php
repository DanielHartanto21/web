<?php
require 'function.php';

if (isset($_POST['submit'])) {
    $user_id = $_POST['username'];
    $pwd1 = $_POST['password1'];
    $pwd2 = $_POST['password2'];

    // check user_id sudah ada
    $sql = "SELECT * FROM user WHERE username = '$user_id'";
    $result = query($sql);
    if (count($result) > 0) {
        redirect('daftar.php');
    }

    // check pwd1 == pwd2
    if ($pwd1 !== $pwd2) {
        redirect('daftar.php');
    }

    $pwd = md5($pwd1)
    $sql = "INSERT INTO user(username,pwd) VALUES('$user_id', '$pwd')";
    crud($sql);

    redirect('login.php');
}
