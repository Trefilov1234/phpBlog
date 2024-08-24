<<<<<<< HEAD
<?php

include_once(__DIR__.'/../fileFuncs/functions.php');
require __DIR__ . '/../models/follower.php';
//require __DIR__ . '/../models/upload.php';
class FollowerController {
    private $uploadModel;
   
    private $followerModel;
    public function __construct($pdo) {
        //$this->uploadModel = new Upload($pdo);
        
        $this->followerModel = new Follower($pdo);
    }

    public function follow($userId,$creatorId) {
        
        $this->followerModel->follow($userId,$creatorId);
        //header("Location: /app/views/followerThemes.php");
    }
    public function unfollow($userId,$creatorId) {
        
        $this->followerModel->unfollow($userId,$creatorId);
        //header("Location: /app/views/followerThemes.php");
    }
    public function GetAllCreatorIds($userId) {
        
        return $this->followerModel->GetAllCreatorIds($userId);
    }
}

=======
<?php

include_once(__DIR__.'/../fileFuncs/functions.php');
require __DIR__ . '/../models/follower.php';
//require __DIR__ . '/../models/upload.php';
class FollowerController {
    private $uploadModel;
   
    private $followerModel;
    public function __construct($pdo) {
        //$this->uploadModel = new Upload($pdo);
        
        $this->followerModel = new Follower($pdo);
    }

    public function follow($userId,$creatorId) {
        
        $this->followerModel->follow($userId,$creatorId);
        //header("Location: /app/views/followerThemes.php");
    }
    public function unfollow($userId,$creatorId) {
        
        $this->followerModel->unfollow($userId,$creatorId);
        //header("Location: /app/views/followerThemes.php");
    }
    public function GetAllCreatorIds($userId) {
        
        return $this->followerModel->GetAllCreatorIds($userId);
    }
}

>>>>>>> master
?>