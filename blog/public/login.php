<<<<<<< HEAD
<?

session_start();

$user_id = $_SESSION['user_id'] ?? null;

if ($user_id) {
    header("Location: ../app/views/profile.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/assets/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Авторизация</title>
</head>
<body>
    <div class="cont">
        <h1>Вход в личный кабинет</h1>
        <form action="./distributer.php?controller=user&action=login" method="post">
            <div>
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div>
                <label class="form-label" for="password">Пароль</label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" style="margin-top: 10px;" value="Войти">
            </div>
        </form>
        <p>Ещё нет аккаунта? <a href="../index.php">Зарегистрироваться</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
=======
<?

session_start();

$user_id = $_SESSION['user_id'] ?? null;

if ($user_id) {
    header("Location: ../app/views/profile.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/assets/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Авторизация</title>
</head>
<body>
    <div class="cont">
        <h1>Вход в личный кабинет</h1>
        <form action="./distributer.php?controller=user&action=login" method="post">
            <div>
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div>
                <label class="form-label" for="password">Пароль</label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" style="margin-top: 10px;" value="Войти">
            </div>
        </form>
        <p>Ещё нет аккаунта? <a href="../index.php">Зарегистрироваться</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
>>>>>>> master
</html>