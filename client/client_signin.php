<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма реєстрації</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container" mt-4>
        <div class="row">
            <div class="col">
                <h1>Авторизація</h1>
                <form action="client_auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
                    <button type="submit" class="btn btn-success"> Авторизуватися </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
