<?php
require_once __DIR__ . "/../models/sign_in.model.php";

class SigninController {
    private $model;

    public function __construct() {
        $this->model = new SigninModel();
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handleSignin();
        } else {
            $this->displaySigninForm();
        }
    }

    private function handleSignin() {
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (empty($email) || empty($password)) {
            $this->redirectWithError('emptyInput');
        }

        try {
            $user = $this->model->getUser($email);

            if (!password_verify($password, $user['password'])) {
                $this->redirectWithError('wrongpassword');
            }

            session_start();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['admin'] = $user['admin'];

            $redirectUrl = ($user['role'] == 'admin') ? '/dashboard' : '\views\public\pages\home.view.php';
            header("Location: $redirectUrl");
exit();
        } catch (Exception $e) {
            $this->redirectWithError('usernotfound');
        }
    }

    private function displaySigninForm() {
        require_once __DIR__ . "/../views/public/auth/sign_in.view.php";
    }

    private function redirectWithError($error) {
        header("Location: form\sign_in.php?error=" . urlencode($error));
        exit();
    }

    public function index()
    {
        require_once __DIR__ . '/../views/public/auth/sign_in.view.php';
    }
}

// Execute controller logic
$signinController = new SigninContr();
$signinController->handleRequest();
?>