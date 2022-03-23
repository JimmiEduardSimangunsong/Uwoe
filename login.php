<!doctype html>
<html>
</html>
<head>
    <title>Halaman Login</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <section>
        <div class="box">
            <div class="form">
              <h2>Login</h2> 
                <form method="post" action="ceklogin.php">
                    <div class="inputbx">
                        <input id="username" name="username" type="text" autocomplete="on" required placeholder="Username">
                        <img src="login/user.png">
                    </div>
                    <div class="inputbx">
                        <input id="password" name="password" type="text" placeholder="Password">
                        <img src="login/lock.png">
                    </div>
                    <label class="remember"><input type="checkbox">
                    Remember Me</label>
                    <div class="inputbx">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </form>
                <p>Forget Pasword</p>
                <p>Need Account</p>
                <p><a style="color:yellow; font-size:15px;" href="laman_utama.php">Kembali Ke Halaman Utama</a></p>
            </div>
        </div>
    </section>
</body>