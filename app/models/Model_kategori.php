<?php

class Model_kategori
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori()
    {
        $this->db->query("SELECT * FROM kategori ORDER BY nama_kategori ASC");
        return $this->db->resultSet();
    }
}
