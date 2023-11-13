<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Регистрация</title> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
<form action="register.php" method="post"> 
    <div class="container">

        <div class="form-register">

            <div class="header-regist">
                Регистрация 
            </div>

                <div class="line"> 
                     
                </div>

            <div class="text-box"> 
                
                    E-mail 
                    <br> 
                    <input class="box-email" type="email" name="email" title="E-mail" required><br>

                    <div class="pass-block"> 
                        <div class="pass1-box"> 
                            <label for="password">Пароль</label><br> 
                            <input name="password" type="password" class="password" minlength="3" maxlength="10" required> 
                        </div> 

                        <div class="pass2-box"> 
                            <label for="password">Пароль повторно</label><br> 
                            <input name="repeatpassword" type="password" class="password-confirm" minlength="3" maxlength="10" required>
                        </div>
                        
                    </div> 


                    <div class="login"><br>
                        <label for="login">Логин</label><br> 
                        <input name="login" type="text" class="login" minlength="5" maxlength="20" required> 
                    </div> 

                    <div class="date"><br>
                        <label for="date">Дата рождения</label><br> 
                        <input name="date" type="date" class="date" minlength="5" maxlength="20" required>
                    </div> 
                         
                    <button type="submit" class="send">Отправить</button>

            </div> 
        </div> 
    </div>
</form>

<form action="" method=""post>

    <div class="textlink">Уже есть аккаунт? -</div>
    <div class="link">
        <a href='entrance.php'>Войти</a>
    </div>
</form>

</body>
</html>