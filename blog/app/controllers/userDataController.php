<<<<<<< HEAD
<?php

require __DIR__ . '/../models/userData.php';
include_once(__DIR__.'/../fileFuncs/functions.php');
class UserDataController {
    private $userDataModel;

    public function __construct($pdo) {
        $this->userDataModel = new UserData($pdo);
    }

    public function UpdatePhoto($userId,$img) {
        $oldPhoto=$this->userDataModel->GetProfilePhoto($userId);
        if(isset($_FILES['photo'])) {
            // проверяем, можно ли загружать изображение
            $check = can_upload($_FILES['photo']);
            
            if($check === true){
              // загружаем изображение на сервер
              $img=make_upload($_FILES['photo'],$oldPhoto['profileImg']);
              echo "<strong>Файл успешно загружен!</strong>";
            }
            else{
              // выводим сообщение об ошибке
              echo "<strong>$check</strong>";  
            }
        }
        if($img!=null)
            $this->userDataModel->UpdateProfilePhoto($userId,$img);
       header("Location: ../app/views/profile.php");
    }
    public function GetPhoto($userId) {
        $photo=$this->userDataModel->GetProfilePhoto($userId);
        if($photo)
        {
            return $photo;
        }
        else return null;
    }
    public function GetAllProfilePhotos() {
        $photos=$this->userDataModel->GetAllProfilePhotos();
        if($photos)
        {
            return $photos;
        }
        else return null;
    }
}

?>
=======
<?php

require __DIR__ . '/../models/userData.php';
include_once(__DIR__.'/../fileFuncs/functions.php');
class UserDataController {
    private $userDataModel;

    public function __construct($pdo) {
        $this->userDataModel = new UserData($pdo);
    }

    public function UpdatePhoto($userId,$img) {
        $oldPhoto=$this->userDataModel->GetProfilePhoto($userId);
        if(isset($_FILES['photo'])) {
            // проверяем, можно ли загружать изображение
            $check = can_upload($_FILES['photo']);
            
            if($check === true){
              // загружаем изображение на сервер
              $img=make_upload($_FILES['photo'],$oldPhoto['profileImg']);
              echo "<strong>Файл успешно загружен!</strong>";
            }
            else{
              // выводим сообщение об ошибке
              echo "<strong>$check</strong>";  
            }
        }
        if($img!=null)
            $this->userDataModel->UpdateProfilePhoto($userId,$img);
       header("Location: ../app/views/profile.php");
    }
    public function GetPhoto($userId) {
        $photo=$this->userDataModel->GetProfilePhoto($userId);
        if($photo)
        {
            return $photo;
        }
        else return null;
    }
    public function GetAllProfilePhotos() {
        $photos=$this->userDataModel->GetAllProfilePhotos();
        if($photos)
        {
            return $photos;
        }
        else return null;
    }
}

?>
>>>>>>> master
