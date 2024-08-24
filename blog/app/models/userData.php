<<<<<<< HEAD
<?php
class userData
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function GetProfilePhoto($userId) {
        $stmt = $this->pdo->prepare('SELECT profileImg FROM userData WHERE userId = ?');
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function UpdateProfilePhoto($userId,$img) {
        $res=$this->GetProfilePhoto($userId);
        if($res)
        {
            $stmt = $this->pdo->prepare('UPDATE userData SET profileImg= ? WHERE userId = ?');
            $stmt->execute([$img,$userId]);
        }
        else
        {
            $stmt = $this->pdo->prepare('INSERT INTO userData (userId, profileImg) VALUES (?, ?)');
            $stmt->execute([$userId,$img]);
        }
        
    }
    public function GetAllProfilePhotos() {
        $stmt = $this->pdo->prepare('SELECT profileImg FROM userData');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
=======
<?php
class userData
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function GetProfilePhoto($userId) {
        $stmt = $this->pdo->prepare('SELECT profileImg FROM userData WHERE userId = ?');
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function UpdateProfilePhoto($userId,$img) {
        $res=$this->GetProfilePhoto($userId);
        if($res)
        {
            $stmt = $this->pdo->prepare('UPDATE userData SET profileImg= ? WHERE userId = ?');
            $stmt->execute([$img,$userId]);
        }
        else
        {
            $stmt = $this->pdo->prepare('INSERT INTO userData (userId, profileImg) VALUES (?, ?)');
            $stmt->execute([$userId,$img]);
        }
        
    }
    public function GetAllProfilePhotos() {
        $stmt = $this->pdo->prepare('SELECT * FROM userData');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
>>>>>>> master
?>