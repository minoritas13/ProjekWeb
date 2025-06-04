<?php

class DashboardAdmin extends Controller{
    
    public function index(){
        session_start();
        $data['title'] = 'Daftar Barang';
        $data['barang'] = $this->model('Model_barang')->getAllBarang();

        if(!isset($_SESSION['user'])){
            header('Location: ' . BASEURL);    
        }else{
            $this->view('template/header', $data);
            $this->view('dashboardAdmin/index',$data);
            $this->view('template/footer');
        }
    }

    public function tambah() {
    session_start();

    // Cek apakah user sudah login
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
        header('Location: ' . BASEURL);
        exit;
    }

    // Jika data dikirim via POST (form disubmit)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama  = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok  = $_POST['stok'];

        // Simpan ke database melalui model
        $this->model('Model_barang')->tambahBarang([
            'nama'  => $nama,
            'harga' => $harga,
            'stok'  => $stok
        ]);

        // Redirect setelah insert
        header('Location: ' . BASEURL . '/dashboarAdmin'); // arahkan ke halaman daftar barang
        exit;
    }

    // Jika bukan POST, tampilkan form tambah
    $data['title'] = 'Tambah Barang';
    $this->view('template/header', $data);
    $this->view('dashboardAdmin/tambah', $data);
    $this->view('template/footer');
}


}