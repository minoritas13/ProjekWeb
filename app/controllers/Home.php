<?php

class Home extends Controller {

    public function index() {
        session_start();
    if (isset($_SESSION['user'])) {
        header('Location: ' . BASEURL . '/dashboardAdmin');
        exit();
    }else{
        $this->view('home/index');
    }
        
    }
}
