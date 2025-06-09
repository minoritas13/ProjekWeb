<?php

class DashboardAdmin extends Controller
{

    public function index()
    {
        session_start();

        $data['title'] = 'Dashboard';
        $data['kategori'] = $this->model('Model_kategori')->getAllKategori();
        $data['barang'] = $this->model('Model_barang')->getAllBarang(); // semua barang default

        $data['kategori_terpilih'] = $_POST['kategori_id'] ?? '';
        // Kalau pakai sort/filter kategori
        if (isset($_POST['kategori_id'])) {
            $id = $_POST['kategori_id'];
            $data['barang'] = $this->model('Model_barang')->getBarangByKategori($id);
        }

        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
        } else {
            if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
                header('Location: ' . BASEURL . '/main');
                exit;
            }
            $this->view('template/header', $data);
            $this->view('dashboardAdmin/index', $data);
            $this->view('template/footer');
        }
    }

    public function tambah()
    {
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
            header('Location: ' . BASEURL . '/dashboardAdmin'); // arahkan ke halaman daftar barang
            exit;
        }

        // Jika bukan POST, tampilkan form tambah
        $data['title'] = 'Tambah Barang';
        $this->view('template/header', $data);
        $this->view('dashboardAdmin/tambah', $data);
        $this->view('template/footer');
    }


    public function edit($id = null)
    {
        session_start();
        $barangModel = $this->model('Model_barang');

        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
            exit;
        }

        // Jika tombol "Hapus" ditekan via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hapus'])) {
            $barangModel->hapusBarang($_POST['id']);
            header('Location: ' . BASEURL . '/dashboardAdmin');
            exit;
        }

        // Jika form "Update" dikirim
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            $dataUpdate = [
                'id' => $_POST['id'],
                'nama' => $_POST['nama'],
                'harga' => $_POST['harga'],
                'stok' => $_POST['stok']
            ];

            $barangModel->updateBarang($dataUpdate);
            header('Location: ' . BASEURL . '/dashboardAdmin');
            exit;
        }

        // Jika ID barang diklik untuk edit
        if ($id !== null) {
            $data['title'] = 'Edit Barang';
            $data['barang'] = $barangModel->getBarangById($id);

            $this->view('template/header', $data);
            $this->view('dashboardAdmin/edit', $data);
            $this->view('template/footer');
        }
    }
}
