<?php

class Main extends Controller{

    public function index(){
        session_start();
        $data['title'] = 'Main';

        if(!isset($_SESSION['user'])){
            header('Location: ' . BASEURL);    
        }else{
            $this->view('template/header', $data);
            $this->view('main/index');
            $this->view('template/footer');
        }
        
    }
}