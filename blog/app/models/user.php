<<<<<<< HEAD
<?php
    class User {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function createUser($username, $email, $password) {
            $stmt = $this->pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
            $stmt->execute([$username, $email, password_hash($password, PASSWORD_BCRYPT)]);
            return $this->pdo->lastInsertId();
        }

        public function updateUser($id, $username, $email,$passw) {
            if($passw!=null)
            {
                $stmt = $this->pdo->prepare('UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?');
                $stmt->execute([$username, $email,password_hash($passw, PASSWORD_BCRYPT), $id]);
            }
            else{
                $stmt = $this->pdo->prepare('UPDATE users SET username = ?, email = ? WHERE id = ?');
                $stmt->execute([$username, $email, $id]);
            }
        }

        public function getUserById($id) {
            $stmt = $this->pdo->prepare('SELECT * FROM users WHERE id = ?');
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function getUserByEmail($email) {
            $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = ?');
            $stmt->execute([$email]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function getAllUsers() {
            $stmt = $this->pdo->prepare('SELECT * FROM users');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
=======
<?php
    class User {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function createUser($username, $email, $password) {
            $stmt = $this->pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
            $stmt->execute([$username, $email, password_hash($password, PASSWORD_BCRYPT)]);
            return $this->pdo->lastInsertId();
        }

        public function updateUser($id, $username, $email,$passw) {
            if($passw!=null)
            {
                $stmt = $this->pdo->prepare('UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?');
                $stmt->execute([$username, $email,password_hash($passw, PASSWORD_BCRYPT), $id]);
            }
            else{
                $stmt = $this->pdo->prepare('UPDATE users SET username = ?, email = ? WHERE id = ?');
                $stmt->execute([$username, $email, $id]);
            }
        }

        public function getUserById($id) {
            $stmt = $this->pdo->prepare('SELECT * FROM users WHERE id = ?');
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function getUserByEmail($email) {
            $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = ?');
            $stmt->execute([$email]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function getAllUsers() {
            $stmt = $this->pdo->prepare('SELECT * FROM users');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
>>>>>>> master
?>