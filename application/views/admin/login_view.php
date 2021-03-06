<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/admin-style.css">
    <title>Вход | Адменистративная панель Handy Cover</title>
</head>
<body class="parent">
<div class="container block">
    <div class="d-flex flex-column justify-content-center">
        <div class="login-content offset-md-3 col-md-6">
            <div class="login-logo">
                <img src="/static/img/login-logo.png" class="img-fluid"><span>Административная панель Handy Cover</span>
            </div>
            <form method="post" action="/admin/login">
                <div class="form-group">
                    <label for="email">Логин</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <small class="form-text text-muted">Введите ваш e-mail адрес</small>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <small class="form-text text-muted">Введите ваш пароль</small>
                </div>
                <input type="submit" value="Войти" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
</body>
</html>