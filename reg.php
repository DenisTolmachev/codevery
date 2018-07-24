<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codevery Test</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h6>Registration</h6>
        </div>
        <form class="loginForm" action="save_user.php" method="post">
            <ul>
                <label>Ваш логин:<br></label>
                <li class="inputLi">
                    <input name="login" type="text" size="15" maxlength="15" formnovalidate>
                </li>
                <label>Ваш пароль:<br></label>
                <li class="inputLi">
                    <input name="password" type="password" size="15" maxlength="15">
                </li>
                <li>
                    <button type="submit" name="submit" value="Зарегистрироваться">Зарегистрироваться</button>
                </li>
                <li>
                    <a href="message.php">Войти как гость</a>
                </li>
        </form>
        <div class="social" >
            <label>Log in with a social network:</label>
            <div class="socialButtons">
                <div class="social-img">
                    <a href="facebook.php"> <img src="img/facebook.png" alt=""></a>
                </div>
                <div class="social-img">
                    <a href="facebook.php"> <img src="img/Twitter.png" alt=""></a>
                </div>
                <div class="social-img">
                    <a href="facebook.php"> <img src="img/google.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>