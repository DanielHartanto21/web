<?php
require "../function.php";
$page_title = 'Login Admin';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
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
    <div class="container">
        <div class="box">
        <div style="color: brown;font-size: 30px;text-align: center">
        ADMIN TOKO SEMBAKO
        </div>
        <div>
            <img src="Lighthouse.jpg" style="width: 290px;
            height:150px;align: center;margin-left: auto;
            margin-right: auto;display: block;border-radius: 15px">
        </div>
            <div style="text-align: center">
			    <?php
				    if(isset($_GET['pesan']))
				    {
					    if($_GET['pesan']=="gagal")
					    {
		    			    echo " <div style='margin-bottom:5px; color: white;'>
							User dan Password Salah!!</div>";
		    			}
			    	}
			    ?>
                <form method="post" action="tryloginadmin.php">
                    <fieldset>
                        <div>
                        <label for="username" class="form-label">Username:</label>
                            <input type="text" name="Useradmin" placeholder="Useradmin" required>                             
                        </div>
                        <br>
                        <div>
                            <label for="password" class="form-label">Password:</label>
                            <input type="text" name="Password" placeholder="Password" required>                                
                        </div>
                    </fieldset>
                    <div>
                        <button type="submit" style="background-color: rgb(56, 51, 42);color: whitesmoke;padding: 10px;border-radius: 8px;">
                        Login
                        </button>
                </div>
                <a href="../login.php">kembali ke login user</a>
                </form>
        </div>
    </div>
</body>
</html>