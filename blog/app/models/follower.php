<<<<<<< HEAD
<?php
    class Follower {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function follow($userId, $creatorId) {
            $stmt = $this->pdo->prepare('INSERT INTO follower (userId, creatorId) VALUES (?, ?)');
            $stmt->execute([$userId, $creatorId]);
        }

        public function unfollow($userId, $creatorId) {
            $stmt = $this->pdo->prepare('DELETE FROM follower WHERE userId= ? AND creatorId= ?');
            $stmt->execute([$userId, $creatorId]);
        }
        public function GetAllRows($userId) {
            $stmt = $this->pdo->prepare('SELECT * FROM follower WHERE userId= ?');
            $stmt->execute([$userId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function GetAllCreatorIds($userId) {
            $stmt = $this->pdo->prepare('SELECT creatorId FROM follower WHERE userId= ?');
            $stmt->execute([$userId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
=======
<?php
    class Follower {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function follow($userId, $creatorId) {
            $stmt = $this->pdo->prepare('INSERT INTO follower (userId, creatorId) VALUES (?, ?)');
            $stmt->execute([$userId, $creatorId]);
        }

        public function unfollow($userId, $creatorId) {
            $stmt = $this->pdo->prepare('DELETE FROM follower WHERE userId= ? AND creatorId= ?');
            $stmt->execute([$userId, $creatorId]);
        }
        public function GetAllRows($userId) {
            $stmt = $this->pdo->prepare('SELECT * FROM follower WHERE userId= ?');
            $stmt->execute([$userId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function GetAllCreatorIds($userId) {
            $stmt = $this->pdo->prepare('SELECT creatorId FROM follower WHERE userId= ?');
            $stmt->execute([$userId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
>>>>>>> master
?>