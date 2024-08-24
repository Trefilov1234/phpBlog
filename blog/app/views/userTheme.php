<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/assets/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/assets/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
    session_start();
    
    require_once '../config/db.php';
    require_once '../controllers/UserController.php';
    require_once '../controllers/UploadController.php';
    $user_id = $_SESSION['user_id'] ?? null;
    $uploadId=$_GET['uploadId']??null;
    
    if (!$user_id) {
        echo 'Пожалуйста, войдите в систему';
        exit;
    }

    if (!$uploadId) {
        echo 'тема не найдена';
        exit;
    }
    $userController = new UserController($pdo);
    $user = $userController->profile($user_id);
    $uploadController=new UploadController($pdo);
    $upload= $uploadController->getUploadById($uploadId);

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
    if($upload)
    {
        $creator=$userController->GetUserById($upload['userId']);
        echo '<div class="cont">';
        echo '<h1>'.$upload['Title'].'</h1>';
        echo 'Создатель: '.$creator['username'];
        echo '<img class="upload-image" src="../'.$upload['Img'].'">';
        echo '<p>'.$upload['Text'].'</p>';
        echo '</div>';
    }
    }
?>
</body>
=======
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/assets/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/assets/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
    session_start();
    
    require_once '../config/db.php';
    require_once '../controllers/UserController.php';
    require_once '../controllers/UploadController.php';
    $user_id = $_SESSION['user_id'] ?? null;
    $uploadId=$_GET['uploadId']??null;
    
    if (!$user_id) {
        echo 'Пожалуйста, войдите в систему';
        exit;
    }

    if (!$uploadId) {
        echo 'тема не найдена';
        exit;
    }
    $userController = new UserController($pdo);
    $user = $userController->profile($user_id);
    $uploadController=new UploadController($pdo);
    $upload= $uploadController->getUploadById($uploadId);

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
    if($upload)
    {
        $creator=$userController->GetUserById($upload['userId']);
        echo '<div class="cont">';
        echo '<h1>'.$upload['Title'].'</h1>';
        echo 'Создатель: '.$creator['username'];
        echo '<img class="upload-image" src="../'.$upload['Img'].'">';
        echo '<p>'.$upload['Text'].'</p>';
        echo '</div>';
    }
    }
?>
</body>
>>>>>>> master
</html>