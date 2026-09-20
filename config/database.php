<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "dtsekolah";

    public $db;

    public function __construct() {
        $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->db->connect_error) {
            die("Koneksi Gagal : ". $this->db->connect_error);
        }
    }
    public function getConnection(){
        return $this->db;
    }
}