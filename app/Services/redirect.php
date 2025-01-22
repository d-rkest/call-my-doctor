<?php

    if ( ! isset($_GET["code"])) {

        session_start();
        $_SESSION['warning'] = 'Login failed';
        header('Location: /Login');

    }

    $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

    $client_token = $client->setAccessToken($token["access_token"]);

    $oauth = new Google\Service\Oauth2($client);

    $userinfo = $oauth->userinfo->get();

    if ($userinfo) {
        
        $email = $userinfo->email;
        $is_admin = 0;
        $name = $userinfo->name;

        $user = $this->user->getUserByUsername($email);
        if ($user) {
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

    } else {
        session_start();
        $_SESSION['error'] = 'Login failed';
        header('Location: login.php');
    }
