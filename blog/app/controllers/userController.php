<<<<<<< HEAD
<?php

require __DIR__ . '/../models/user.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function register($username, $email, $password) {
        if ($this->userModel->getUserByEmail($email)) {
            echo "Польователь с таким email уже существует";
            return;
        }
        $this->userModel->createUser($username, $email, $password);
        header("Location: ../public/login.php");
    }

    public function login($email, $password) {
        $user = $this->userModel->getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['profile_changed']=false;
            header("Location: ../app/views/profile.php");
        } else {
            echo "Неверный email или пароль";
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        header("Location: ../public/login.php");
    }

    public function profile($user_id) {
        $user = $this->userModel->getUserById($user_id);
        if ($user) {
            return $user;
        } else {
            return null;
        }
    }

    public function updateProfile($user_id, $username, $email,$passw,$newPassw) {
        $user=$this->userModel->getUserById($user_id);
            if(!password_verify($passw,$user['password']))
            {
                $newPassword=null;
            }
            else
            {   
                $newPassword=$newPassw;  
            }
        $this->userModel->updateUser($user_id, $username, $email,$newPassword);
       
    }
    public function GetAllUsers() {
        return $this->userModel->getAllUsers();
    }
    public function GetUserById($userId) {
        return $this->userModel->getUserById($userId);
    }
}

?>
=======
<?php

require __DIR__ . '/../models/user.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function register($username, $email, $password) {
        if ($this->userModel->getUserByEmail($email)) {
            echo "Польователь с таким email уже существует";
            return;
        }
        $this->userModel->createUser($username, $email, $password);
        header("Location: ../public/login.php");
    }

    public function login($email, $password) {
        $user = $this->userModel->getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['profile_changed']=false;
            header("Location: ../app/views/profile.php");
        } else {
            echo "Неверный email или пароль";
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        header("Location: ../public/login.php");
    }

    public function profile($user_id) {
        $user = $this->userModel->getUserById($user_id);
        if ($user) {
            return $user;
        } else {
            return null;
        }
    }

    public function updateProfile($user_id, $username, $email,$passw,$newPassw) {
        $user=$this->userModel->getUserById($user_id);
            if(!password_verify($passw,$user['password']))
            {
                $newPassword=null;
            }
            else
            {   
                $newPassword=$newPassw;  
            }
        $this->userModel->updateUser($user_id, $username, $email,$newPassword);
       
    }
    public function GetAllUsers() {
        return $this->userModel->getAllUsers();
    }
    public function GetUserById($userId) {
        return $this->userModel->getUserById($userId);
    }
}

?>
>>>>>>> master
