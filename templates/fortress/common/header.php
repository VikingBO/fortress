<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="resources/img/favicon.png" />
    <link rel="stylesheet" href="resources/css/main.css">
    <title>Fortress CMS</title>
</head>
<body>
    <header class="header">
        <div id="register" class="popup">
            <div class="popup__wrap">
                <form method="POST" action="/core/modules/register.php" class="form">
                    <a href="#close" class="close" title="Закрыть">
                        <svg width="100%" height="100%">
                            <line class="close__line" x1="0" y1="20" x2="20" y2="0" stroke-width="3"></line>
                            <line class="close__line" x1="0" y1="0" x2="20" y2="20" stroke-width="3"></line>
                        </svg>
                    </a>
                    <div class="form__email">
                       <input type="email" placeholder="Ваш e-mail" name="email">
                    </div>
                    <div class="form__password">
                        <input type="password" placeholder="Пароль" name="password" maxlength="20">
                    </div>
                    <button type="submit" class="btn">Регистрация</button>
                </form>
            </div>
        </div>
        <div class="wrap">
            <div class="logo">
                <a href="/" class="logo__img">
                    <img src="resources/img/logo.png" alt="logo">
                </a>
                <a href="/" class="logo__name">
                    Fortress
                </a>
            </div>
            <div class="auth">
                <a href="#register" class="auth__registry">Регистрация</a>
                <a href="#" class="auth__login">Войти</a>
            </div>
        </div>
    </header>
    <main class="main">
    <?php Notification();?>

