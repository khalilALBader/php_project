<?php
require_once __DIR__ . "/../config/Database.php";

class SigninModel {
    protected $connect;

    public function __construct() {
        $this->connect = database::getInstance();
    }

    public function getUser($email) {
        $stmt = $this->connect->prepare('SELECT * FROM users WHERE email = ?;');
        $stmt->execute([$email]);

        if ($stmt->rowCount() === 0) {
            throw new Exception("User not found");
        }

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>