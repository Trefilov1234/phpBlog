<<<<<<< HEAD
<?php
    $dsn = 'mysql:host=localhost;dbname=blog';
    $username = 'root';
    $password = '';
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOExeption $e) {
        die('Connection failed: ' . $e->getMessage());
    }
=======
<?php
    $dsn = 'mysql:host=localhost;dbname=blog';
    $username = 'root';
    $password = '';
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOExeption $e) {
        die('Connection failed: ' . $e->getMessage());
    }
>>>>>>> master
?>