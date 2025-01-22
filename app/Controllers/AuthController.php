<?php
namespace Controllers;

use Models\User;

class AuthController {
    private $user;

    public function __construct($pdo) {
        $this->user = new User($pdo);
    }

    // Show the login form (render the login view)
    // public function showLogin() {
    //     include dirname(__DIR__) .'/Views/home/index.php'; // Include the login view (HTML form)
    // }

    // Handle the login logic
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $is_admin = $_POST['is_admin'];

            $user = $this->user->getUserByUsername($email);
            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'is_admin' => $user['is_admin'],
                ];
                $_SESSION['message'] = 'Welcome to your dashboard';
                if ($_SESSION['user']['is_admin'] != 1) {
                    header('Location: /user');
                    exit;
                }
                header('Location: /dashboard');
                exit;
            } else {
                session_start();
                $_SESSION['error'] = 'Invalid credentials!';
                header('Location: /Login'); // Show login form again with error message
            }
        }
    }

    // Logout the user
    public function logout() {
        session_destroy();
        header('Location: /Login');
        exit;
    }
}
