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
    
    require_once '../config/db.php';
    require_once '../controllers/UserController.php';
    require_once '../controllers/UploadController.php';
    require_once '../controllers/followerController.php';
    $user_id = $_SESSION['user_id'] ?? null;

    if (!$user_id) {
        echo 'Пожалуйста, войдите в систему';
        exit;
    }
    $userController = new UserController($pdo);
    $user = $userController->profile($user_id);
    $uploadController=new UploadController($pdo);
    $uploads= $uploadController->getUserUploads($user_id);
    $followerController = new FollowerController($pdo);
    $users= $userController->GetAllUsers();
    $creatorIds=$followerController->GetAllCreatorIds($user_id);
    // $creatorIds=[];
    // foreach ($userFollows as $follow)
    // {
    //     array_push($creatorIds,$follow['creatorId']);
    // }
    $allUploads=[];
    foreach($creatorIds as $creatorId) {
        $creatorUploads=$uploadController->GetUserUploads($creatorId['creatorId']);
        array_push($allUploads,$creatorUploads);
    }

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
    }
    if($uploads)
    {
        echo '<div class="card-container">';
        foreach ($allUploads as $followerUpload) {
            foreach ($followerUpload as $upload) {
                $creator=$userController->GetUserById($upload['userId']);
                echo '<div class="card" style="width: 18rem;">
                <img src="../'.$upload['Img'] .'" class="card-img-top upload-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'. $upload['Title'] . '</h5>
                  <p class="card-text">'. $upload['UploadedAt'].'</p>
                  <p class="card-text"> Создатель: '. $creator['username'].'</p>
                  <a href="userTheme.php?uploadId='.$upload['id'].'" class="btn btn-dark">Подробнее</a>
                </div>
              </div>';
            
        }
        echo '</div>';
    }
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
    
    require_once '../config/db.php';
    require_once '../controllers/UserController.php';
    require_once '../controllers/UploadController.php';
    require_once '../controllers/followerController.php';
    $user_id = $_SESSION['user_id'] ?? null;

    if (!$user_id) {
        echo 'Пожалуйста, войдите в систему';
        exit;
    }
    $userController = new UserController($pdo);
    $user = $userController->profile($user_id);
    $uploadController=new UploadController($pdo);
    $uploads= $uploadController->getUserUploads($user_id);
    $followerController = new FollowerController($pdo);
    $users= $userController->GetAllUsers();
    $creatorIds=$followerController->GetAllCreatorIds($user_id);
    // $creatorIds=[];
    // foreach ($userFollows as $follow)
    // {
    //     array_push($creatorIds,$follow['creatorId']);
    // }
    $allUploads=[];
    foreach($creatorIds as $creatorId) {
        $creatorUploads=$uploadController->GetUserUploads($creatorId['creatorId']);
        array_push($allUploads,$creatorUploads);
    }

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
    }
    if($uploads)
    {
        echo '<div class="card-container">';
        foreach ($allUploads as $followerUpload) {
            foreach ($followerUpload as $upload) {
                $creator=$userController->GetUserById($upload['userId']);
                echo '<div class="card" style="width: 18rem;">
                <img src="../'.$upload['Img'] .'" class="card-img-top upload-image" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'. $upload['Title'] . '</h5>
                  <p class="card-text">'. $upload['UploadedAt'].'</p>
                  <p class="card-text"> Создатель: '. $creator['username'].'</p>
                  <a href="userTheme.php?uploadId='.$upload['id'].'" class="btn btn-dark">Подробнее</a>
                </div>
              </div>';
            
        }
        echo '</div>';
    }
    }
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
>>>>>>> master
</html>