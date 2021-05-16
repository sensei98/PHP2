<title>LOGIN</title>

<link rel="stylesheet" href="PHP-1/view/css/style.css">


</head>
<html>

<body>

    <form action=" PHP-1/controller/login.php" method="post">

        <?php include 'PHP-1/view/alerts.php' ?>
        <section class="login-container">
            <h1>LOGIN</h1>
            <label>Username</label>
            <input type="text" name="uname" placeholder="Username"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button>
            <a href="PHP-1/view/forgotPassword.php" class=fp>Forgot password?</a>
            <a href="PHP-1/view/signup.php" class="ca">Create an account</a>
        </section>
    </form>

</body>

</html>