<?php
require_once __DIR__ . "/../config/Database.php";

class SignupModel {
    protected $connect;

    public function __construct() {
        $this->connect = database::getInstance();
    }

    public function setUser($name, $email, $password) {
        try {
            // Hash password
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            
            $stmt = $this->connect->prepare(
                'INSERT INTO users (username, email, password) VALUES (?, ?, ?)'
            );
            $stmt->execute([$name, $email, $hashedPwd]);
            
            return true;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            throw new Exception('Database error');
        }
    }
}
?>