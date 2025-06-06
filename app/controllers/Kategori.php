<?php

class Kategori extends Controller{

    public function index(){
        session_start();
        $data['title'] = 'kategori';

        if(!isset($_SESSION['user'])){
            header('Location: ' . BASEURL);    
        }else{
            $this->view('template/header', $data);
            $this->view('kategori/index');
            $this->view('template/footer');
        }
        
    }
}