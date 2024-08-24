<<<<<<< HEAD
<?php
class upload
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function CreateUpload($userId,$title,$text,$img,) {
        $stmt = $this->pdo->prepare('INSERT INTO Uploads (userId, Text,Title,Img) VALUES (?, ?,?,?)');
        $stmt->execute([$userId,$text,$title,$img]);
    }
    public function DeleteUpload($uploadId) {
        $stmt = $this->pdo->prepare('DELETE FROM Uploads WHERE id = ?');
        $stmt->execute([$uploadId]);
    }
    public function UpdateUpload($uploadId,$title,$text,$img) {
        if($img)
        {
            $stmt = $this->pdo->prepare('UPDATE Uploads SET Text= ?,Title = ?,Img = ? WHERE id= ?');
            $stmt->execute([$text,$title,$img,$uploadId]);
        }
        else
        {
            $stmt = $this->pdo->prepare('UPDATE Uploads SET Text= ?,Title = ? WHERE id= ?');
            $stmt->execute([$text,$title,$uploadId]);
        }
    }
    public function GetUserUploads($userId) {
        $stmt = $this->pdo->prepare('SELECT * FROM Uploads WHERE userId= ?');
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetUploadById($uploadId) {
        $stmt = $this->pdo->prepare('SELECT * FROM Uploads WHERE id= ?');
        $stmt->execute([$uploadId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
=======
<?php
class upload
{
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function CreateUpload($userId,$title,$text,$img,) {
        $stmt = $this->pdo->prepare('INSERT INTO Uploads (userId, Text,Title,Img) VALUES (?, ?,?,?)');
        $stmt->execute([$userId,$text,$title,$img]);
    }
    public function DeleteUpload($uploadId) {
        $stmt = $this->pdo->prepare('DELETE FROM Uploads WHERE id = ?');
        $stmt->execute([$uploadId]);
    }
    public function UpdateUpload($uploadId,$title,$text,$img) {
        if($img)
        {
            $stmt = $this->pdo->prepare('UPDATE Uploads SET Text= ?,Title = ?,Img = ? WHERE id= ?');
            $stmt->execute([$text,$title,$img,$uploadId]);
        }
        else
        {
            $stmt = $this->pdo->prepare('UPDATE Uploads SET Text= ?,Title = ? WHERE id= ?');
            $stmt->execute([$text,$title,$uploadId]);
        }
    }
    public function GetUserUploads($userId) {
        $stmt = $this->pdo->prepare('SELECT * FROM Uploads WHERE userId= ?');
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetUploadById($uploadId) {
        $stmt = $this->pdo->prepare('SELECT * FROM Uploads WHERE id= ?');
        $stmt->execute([$uploadId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
>>>>>>> master
?>