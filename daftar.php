<?php
require "function.php";
$page_title = 'Daftar';
?>
<!-- PUT YOUR PAGES HERE -->
<?php
if (isset($_POST['submit'])) {
    $user_id = $_POST['username'];
    $pwd1 = md5($_POST['password1']);
    $na=$_POST['nama'];
    $alama=$_POST['alamat'];
    if (md5($_POST['password2'])== $pwd1) {
        addUser($user_id, $na,$alama,$pwd1);
        redirect('index.php');
    } else {
        redirect("daftar.php?m=false");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            height: 100%; display: flex; justify-content: center;
        }
        .box{
            width: 350px;height: 400px;background-color: lightslategray;
            border-radius: 9px;
            position: absolute;top: 50%;
            transform: translate(0,-50%);
        }
    </style>
</head>
<body>
<div class="align-middle">
    <div class="container" style="width: 500px">
        <div class="row my-5 p-3 bg-success bg-opacity-10 rounded-3">
            <div class="box">
                <center>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">nama:</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">alamat:</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="paswword1" class="form-label">Password:</label>
                        <input type="paswword" name="paswword1" id="paswword1" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="pasword2" class="form-label">Retype Password:</label>
                        <?php if (isset($_GET['m'])) : ?>
                            <?php if ($_GET['m'] == "false") : ?>
                                <div class="alert alert-warning" role="alert">
                                    Password did not match!
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <input type="paswword" name="paswword2" id="paswword2" class="form-control">
                    </div>
                    <div class="mb-3 float-end">
                        <a class="btn btn-warning mx-1" href="login.php" role="button">Kembali</a>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary ml-1">Daftar</button>
                    </div>
                </form></center>
            </div>
        </div>
    </div>
</div>
<!-- ------------------- -->

</body>
