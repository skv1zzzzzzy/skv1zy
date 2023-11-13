<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Регистрация</title> 
    <link rel="stylesheet" type="text/css" href="styleEntrance.css">
</head> 
<body>
<form action="login.php" method="post"> 
    <div class="container">

        <div class="form-register">

            <div class="header-entrance">
                Вход 
            </div>

                <div class="line"> 
                     
                </div>

            <div class="text-box"> 
                
                    Логин 
                    <br> 
                    <input class="box-login" type="text" name="login" title="Логин" required><br>

                    <div class="pass-block"> 
                        <div class="pass1-box"> 
                            <label for="password">Пароль</label><br> 
                            <input name="password" type="password" class="password" minlength="3" maxlength="10" required> 
                        </div> 
                    </div> 

                    <button type="submit" class="log">Войти</button>


            </div> 
        </div> 
    </div>
</form>


</body>
</html>