<?php

session_start();

class Home extends Controller {

    public function index() {
        $this->view('home/index');
    }

    public function loginProses() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $this->model('Model_user')->getUser($username);

    if ($user && $user['password'] === $password) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role']
        ];
        header('Location: ' . BASEURL . '/dashboard');
        exit;
    } else {
        $data['error'] = "Username atau password salah!";
        $this->view('home/index', $data);
    }
}

}
