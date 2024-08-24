<<<<<<< HEAD
<?php

session_start();

require_once __DIR__.'/../app/config/db.php';

$action = $_GET['action'] ?? null;
$controller = $_GET['controller'] ?? 'user';

switch($controller) {
    case 'user':
        require_once __DIR__.'/../app/controllers/userController.php';
        $userController = new UserController($pdo);

        switch ($action) {
            case 'register':
                $username = $_POST["username"] ?? '';
                $email = $_POST["email"] ?? '';
                $password = $_POST["password"] ?? '';
                $userController->register($username, $email, $password);
                break;
            case 'login':
                $email = $_POST["email"] ?? '';
                $password = $_POST["password"] ?? '';
                $userController->login($email, $password);
                break;
            case 'logout':
                $userController->logout();
                break;
            case 'profile':
                $user_id = $_SESSION['user_id'] ?? null;
                $userController->profile($user_id);
                break;
            case 'update_profile':
                require_once '../app/controllers/UserDataController.php';
                $userDataController = new UserDataController($pdo);
                $user_id = $_SESSION['user_id'] ?? null;
                $username = $_POST["username"] ?? '';
                $email = $_POST["email"] ?? '';
                $passw= $_POST["passw"] ?? '';
                $newPassw= $_POST["newPassw"] ?? '';
                $img= $_POST["photo"] ??'';
                $userDataController->UpdatePhoto($user_id, $img);
                $userController->updateProfile($user_id, $username, $email, $passw,$newPassw);
                $_SESSION['profile_changed'] = true;
                header('Location: ../app/views/profile.php');
                break;
            default:
                header("Location: login.php");
                break;
        }
        break;
    case "userData":
        require_once '../app/controllers/UserDataController.php';
        $userDataController = new UserDataController($pdo);
        switch ($action) {
            case 'updatePhoto':
                $photo = $_POST["photo"] ?? '';
                $userId = $_SESSION['user_id'] ?? null;
                $userDataController->UpdatePhoto($userId, $photo);
                break;
        }
        break;
    case "upload":
        require_once '../app/controllers/UploadController.php';
        $uploadController = new UploadController($pdo);
        switch ($action) {
            case 'createUpload':
                $userId = $_SESSION['user_id'] ?? '';
                $title=$_POST["title"]??'';
                $text=$_POST["text"]??'';
                $img=$_POST["img"]??'';
                $uploadController->createUpload($userId,$title,$text,$img);
                header("Location: ../app/views/profile.php");
                break;
            case 'updateUpload':
                $userId = $_SESSION['user_id'] ?? '';
                $title=$_POST["title"]??'';
                $text=$_POST["text"]??'';
                $img=$_POST["img"]??'';
                $uploadId=$_GET["uploadId"]??'';
                $uploadController->updateUpload($uploadId,$title,$text,$img);
                break;
            case 'deleteUpload':
                $uploadId=$_GET["uploadId"]??'';
                $uploadController->deleteUpload($uploadId);
                break;
            default:
                
                break;
        }
        break;
    case "follower":
        require_once '../app/controllers/followerController.php';
        $followerController = new FollowerController($pdo);
        switch ($action) {
            case 'follow':
                $creatorId = $_GET["creatorId"] ?? '';
                $userId = $_SESSION['user_id'] ?? null;
                $followerController->follow($userId, $creatorId);
                header("Location: ../app/views/mainPage.php");
            break;
            case 'unfollow':
                $creatorId = $_GET["creatorId"] ?? '';
                $userId = $_SESSION['user_id'] ?? null;
                $followerController->unfollow($userId, $creatorId);
                header("Location: ../app/views/mainPage.php");
            break;
        }
        break;
    default:
        echo "Контроллер не найден";
        break;

}

=======
<?php

session_start();

require_once __DIR__.'/../app/config/db.php';

$action = $_GET['action'] ?? null;
$controller = $_GET['controller'] ?? 'user';

switch($controller) {
    case 'user':
        require_once __DIR__.'/../app/controllers/userController.php';
        $userController = new UserController($pdo);

        switch ($action) {
            case 'register':
                $username = $_POST["username"] ?? '';
                $email = $_POST["email"] ?? '';
                $password = $_POST["password"] ?? '';
                $userController->register($username, $email, $password);
                break;
            case 'login':
                $email = $_POST["email"] ?? '';
                $password = $_POST["password"] ?? '';
                $userController->login($email, $password);
                break;
            case 'logout':
                $userController->logout();
                break;
            case 'profile':
                $user_id = $_SESSION['user_id'] ?? null;
                $userController->profile($user_id);
                break;
            case 'update_profile':
                require_once '../app/controllers/UserDataController.php';
                $userDataController = new UserDataController($pdo);
                $user_id = $_SESSION['user_id'] ?? null;
                $username = $_POST["username"] ?? '';
                $email = $_POST["email"] ?? '';
                $passw= $_POST["passw"] ?? '';
                $newPassw= $_POST["newPassw"] ?? '';
                $img= $_POST["photo"] ??'';
                $userDataController->UpdatePhoto($user_id, $img);
                $userController->updateProfile($user_id, $username, $email, $passw,$newPassw);
                $_SESSION['profile_changed'] = true;
                header('Location: ../app/views/profile.php');
                break;
            default:
                header("Location: login.php");
                break;
        }
        break;
    case "userData":
        require_once '../app/controllers/UserDataController.php';
        $userDataController = new UserDataController($pdo);
        switch ($action) {
            case 'updatePhoto':
                $photo = $_POST["photo"] ?? '';
                $userId = $_SESSION['user_id'] ?? null;
                $userDataController->UpdatePhoto($userId, $photo);
                break;
        }
        break;
    case "upload":
        require_once '../app/controllers/UploadController.php';
        $uploadController = new UploadController($pdo);
        switch ($action) {
            case 'createUpload':
                $userId = $_SESSION['user_id'] ?? '';
                $title=$_POST["title"]??'';
                $text=$_POST["text"]??'';
                $img=$_POST["img"]??'';
                $uploadController->createUpload($userId,$title,$text,$img);
                header("Location: ../app/views/profile.php");
                break;
            case 'updateUpload':
                $userId = $_SESSION['user_id'] ?? '';
                $title=$_POST["title"]??'';
                $text=$_POST["text"]??'';
                $img=$_POST["img"]??'';
                $uploadId=$_GET["uploadId"]??'';
                $uploadController->updateUpload($uploadId,$title,$text,$img);
                break;
            case 'deleteUpload':
                $uploadId=$_GET["uploadId"]??'';
                $uploadController->deleteUpload($uploadId);
                break;
            default:
                
                break;
        }
        break;
    case "follower":
        require_once '../app/controllers/followerController.php';
        $followerController = new FollowerController($pdo);
        switch ($action) {
            case 'follow':
                $creatorId = $_GET["creatorId"] ?? '';
                $userId = $_SESSION['user_id'] ?? null;
                $followerController->follow($userId, $creatorId);
                header("Location: ../app/views/mainPage.php");
            break;
            case 'unfollow':
                $creatorId = $_GET["creatorId"] ?? '';
                $userId = $_SESSION['user_id'] ?? null;
                $followerController->unfollow($userId, $creatorId);
                header("Location: ../app/views/mainPage.php");
            break;
        }
        break;
    default:
        echo "Контроллер не найден";
        break;

}

>>>>>>> master
?>