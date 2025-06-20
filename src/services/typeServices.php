<?php

require_once __DIR__ . "/../../config/db.php";

class typeServices {

    private $db;

    public function __construct() {
        $this->db = DB::connection();
    }

    public function getAll() {
        $data = $this->db->query("SELECT * FROM types")->fetchAll();
        return $data;
    }
}