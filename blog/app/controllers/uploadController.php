<<<<<<< HEAD
<?php

require __DIR__ . '/../models/upload.php';
include_once(__DIR__.'/../fileFuncs/functions.php');
require __DIR__ . '/../models/userData.php';
class UploadController {
    private $uploadModel;
    private $userDataModel;
    public function __construct($pdo) {
        $this->uploadModel = new Upload($pdo);
        $this->userDataModel = new userData($pdo);
    }

    public function createUpload($userId,$title,$text,$img) {
        if(isset($_FILES['img'])) {
            // проверяем, можно ли загружать изображение
            $check = can_upload($_FILES['img']);
            
            if($check === true){
              // загружаем изображение на сервер
              $img=make_upload($_FILES['img'],null);
              echo "<strong>Файл успешно загружен!</strong>";
            }
            else{
              // выводим сообщение об ошибке
              echo "<strong>$check</strong>";  
            }
        }
        $this->uploadModel->CreateUpload($userId,$title,$text,$img);
        header("Location: /app/views/UserThemes.php");
    }

    public function deleteUpload($uploadId) {
        $this->uploadModel->DeleteUpload($uploadId);
        header("Location: /app/views/UserThemes.php");
    }
    public function updateUpload($uploadId,$title,$text,$img) {
        $oldPhoto=$this->getUploadById($uploadId);
        if(isset($_FILES['img'])) {
            // проверяем, можно ли загружать изображение
            $check = can_upload($_FILES['img']);
            
            if($check === true){
              // загружаем изображение на сервер
              $img=make_upload($_FILES['img'],$oldPhoto["Img"]);
              echo "<strong>Файл успешно загружен!</strong>";
            }
            else{
              // выводим сообщение об ошибке
              echo "<strong>$check</strong>";  
            }
        }
        $this->uploadModel->UpdateUpload($uploadId,$title,$text,$img);
        header("Location: /app/views/UserThemes.php");
    }
    public function getUserUploads($userId) {
        $uploads=$this->uploadModel->GetUserUploads($userId); 
        if($uploads) {
            return $uploads;
        }
        
    }
    public function getUploadById($uploadId) {
        $upload=$this->uploadModel->GetUploadById($uploadId); 
        if($upload) {
            return $upload;
        }
        
    }
}

=======
<?php

require __DIR__ . '/../models/upload.php';
include_once(__DIR__.'/../fileFuncs/functions.php');
require __DIR__ . '/../models/userData.php';
class UploadController {
    private $uploadModel;
    private $userDataModel;
    public function __construct($pdo) {
        $this->uploadModel = new Upload($pdo);
        $this->userDataModel = new userData($pdo);
    }

    public function createUpload($userId,$title,$text,$img) {
        if(isset($_FILES['img'])) {
            // проверяем, можно ли загружать изображение
            $check = can_upload($_FILES['img']);
            
            if($check === true){
              // загружаем изображение на сервер
              $img=make_upload($_FILES['img'],null);
              echo "<strong>Файл успешно загружен!</strong>";
            }
            else{
              // выводим сообщение об ошибке
              echo "<strong>$check</strong>";  
            }
        }
        $this->uploadModel->CreateUpload($userId,$title,$text,$img);
        header("Location: /app/views/UserThemes.php");
    }

    public function deleteUpload($uploadId) {
        $this->uploadModel->DeleteUpload($uploadId);
        header("Location: /app/views/UserThemes.php");
    }
    public function updateUpload($uploadId,$title,$text,$img) {
        $oldPhoto=$this->getUploadById($uploadId);
        if(isset($_FILES['img'])) {
            // проверяем, можно ли загружать изображение
            $check = can_upload($_FILES['img']);
            
            if($check === true){
              // загружаем изображение на сервер
              $img=make_upload($_FILES['img'],$oldPhoto["Img"]);
              echo "<strong>Файл успешно загружен!</strong>";
            }
            else{
              // выводим сообщение об ошибке
              echo "<strong>$check</strong>";  
            }
        }
        $this->uploadModel->UpdateUpload($uploadId,$title,$text,$img);
        header("Location: /app/views/UserThemes.php");
    }
    public function getUserUploads($userId) {
        $uploads=$this->uploadModel->GetUserUploads($userId); 
        if($uploads) {
            return $uploads;
        }
        
    }
    public function getUploadById($uploadId) {
        $upload=$this->uploadModel->GetUploadById($uploadId); 
        if($upload) {
            return $upload;
        }
        
    }
}

>>>>>>> master
?>