<?php

session_start();

class Login extends Controller {

    public function index() {
        $username = $_POST['username'];
        $password = $_POST['password']; 

        $user = $this->model('Model_user')->getUser($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'username' => $user['username'],
                'role' => $user['role']
            ];
            
            if ($user['role'] === "admin") {
                header('Location: ' . BASEURL . '/dashboardAdmin');
            } else {
                header('Location: ' . BASEURL . '/dashboardKasir');
            }
            exit(); // Selalu tambahkan exit setelah header
        } else {
            $data['error'] = "Username atau password salah!";
            $this->view('home/index', $data);
        }
    }
}
