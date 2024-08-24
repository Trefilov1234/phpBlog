<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/assets/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php

session_start();

$user_id = $_SESSION['user_id'] ?? null;
$prof_changed=$_SESSION['profile_changed'] ?? null;
if (!$user_id) {
    echo 'Пожалуйста, войдите в систему';
    exit;
}

require_once '../config/db.php';
require_once '../controllers/UserController.php';
require_once '../controllers/UserDataController.php';

$userController = new UserController($pdo);
$userDataController = new UserDataController($pdo);
$user = $userController->profile($user_id);
$success = $_GET["success"] ?? null;
$userData= $userDataController->GetPhoto($user_id);

if ($user) {
    
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="mainPage.php">Blog</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active emailLink" aria-current="page" href="mainPage.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active emailLink" href="UserThemes.php">Ваши темы</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active emailLink" href="followerThemes.php">Отслеживаемое</a>
        </li>
      </ul>
      <div style="float:right;" class="navbar-nav">
          <a class="nav-link active emailLink" href="profile.php" style="display: inline-block;">'.$user['email'] .'</a>
          <a class="nav-link active emailLink" href="../../public/distributer.php?controller=user&action=logout" style="display: inline-block;">Выйти</a>
      </div>
  </li>
  </div>
</nav>';
    echo '<div class="cont">';
    echo '<h1>'. $user['username'].'</h1>';
    if($userData!=null)
        echo '<img class="profile-image" src="'.'../'.$userData['profileImg'].'">';
    else
        echo '<img class="profile-image" src="../../img/emptyAvatar.png">';

    echo '<a type="button" class="btn btn-dark" href="userSettings.php" style="margin-top: 5px;">Редактировать профиль</a>';   
    echo '<!-- Кнопка-триггер модального окна -->
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-top: 5px;">
      Создать тему обсуждения
    </button>';
    echo '</div>';
    echo'
    <!-- Модальное окно -->
    <div class="modal fade modal-text" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Создание темы обсуждения</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
          </div>
          <form action="../../public/distributer.php?controller=upload&action=createUpload" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div>
                    <label class="form-label" for="title">Название темы</label>
                    <input class="form-control" type="text" id="title" name="title" required>
                </div>
                <div>
                    <label class="form-label" for="text">Текст</label>
                    <textarea class="form-control" name="text" required></textarea>
                </div>
                <div>
                    <label class="form-label" for="img">Картинка</label>
                    <input class="form-control" type="file" id="img" name="img">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-dark" value="Создать">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>';
} else {
    echo "Пользователь не найден";
}
if ($prof_changed) {
  echo '<script>alert("Профиль обновлён");</script>';
  $_SESSION['profile_changed']=false;
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/assets/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php

session_start();

$user_id = $_SESSION['user_id'] ?? null;
$prof_changed=$_SESSION['profile_changed'] ?? null;
if (!$user_id) {
    echo 'Пожалуйста, войдите в систему';
    exit;
}

require_once '../config/db.php';
require_once '../controllers/UserController.php';
require_once '../controllers/UserDataController.php';

$userController = new UserController($pdo);
$userDataController = new UserDataController($pdo);
$user = $userController->profile($user_id);
$success = $_GET["success"] ?? null;
$userData= $userDataController->GetPhoto($user_id);

if ($user) {
    
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="mainPage.php">Blog</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active emailLink" aria-current="page" href="mainPage.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active emailLink" href="UserThemes.php">Ваши темы</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active emailLink" href="followerThemes.php">Отслеживаемое</a>
        </li>
      </ul>
      <div style="float:right;" class="navbar-nav">
          <a class="nav-link active emailLink" href="profile.php" style="display: inline-block;">'.$user['email'] .'</a>
          <a class="nav-link active emailLink" href="../../public/distributer.php?controller=user&action=logout" style="display: inline-block;">Выйти</a>
      </div>
  </li>
  </div>
</nav>';
    echo '<div class="cont">';
    echo '<h1>'. $user['username'].'</h1>';
    if($userData!=null)
        echo '<img class="profile-image" src="'.'../'.$userData['profileImg'].'">';
    else
        echo '<img class="profile-image" src="../../img/emptyAvatar.png">';

    echo '<a type="button" class="btn btn-dark" href="userSettings.php" style="margin-top: 5px;">Редактировать профиль</a>';   
    echo '<!-- Кнопка-триггер модального окна -->
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-top: 5px;">
      Создать тему обсуждения
    </button>';
    echo '</div>';
    echo'
    <!-- Модальное окно -->
    <div class="modal fade modal-text" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Создание темы обсуждения</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
          </div>
          <form action="../../public/distributer.php?controller=upload&action=createUpload" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div>
                    <label class="form-label" for="title">Название темы</label>
                    <input class="form-control" type="text" id="title" name="title" required>
                </div>
                <div>
                    <label class="form-label" for="text">Текст</label>
                    <textarea class="form-control" name="text" required></textarea>
                </div>
                <div>
                    <label class="form-label" for="img">Картинка</label>
                    <input class="form-control" type="file" id="img" name="img">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-dark" value="Создать">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>';
} else {
    echo "Пользователь не найден";
}
if ($prof_changed) {
  echo '<script>alert("Профиль обновлён");</script>';
  $_SESSION['profile_changed']=false;
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
>>>>>>> master
</html>