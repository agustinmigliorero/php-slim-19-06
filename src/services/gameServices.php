<?php 

require_once __DIR__ . "/../../config/db.php";

class gameServices {

    private $db;

    public function __construct() {
        $this->db = DB::connection();
    }

    public function getAll() {
        $data = $this->db->query("SELECT * FROM videogames")->fetchAll();
        return $data;
    }

    public function getById($id) {
        $data = $this->db->query("SELECT * FROM videogames WHERE id = $id")->fetchAll();
        return $data;
    }

    public function create($datos) {
        $sql = "INSERT INTO videogames (title, release_year, developer, type_id) VALUES (?, ?, ?, ?)";
        $stmt= $this->db->prepare($sql);
        $stmt->execute([$datos["title"], $datos["release_year"], $datos["developer"], $datos["type_id"]]);

        return "SE CREO =)";
    }

    public function update($datos, $id) {
        $sql = "UPDATE videogames SET title = ?, release_year = ?, developer = ?, type_id = ? WHERE id = ?";
        $stmt= $this->db->prepare($sql);
        $stmt->execute([$datos["title"], $datos["release_year"], $datos["developer"], $datos["type_id"], $id]);

        return "SE EDITO =)";
    }

    public function delete($id) {
        $sql = "DELETE FROM videogames WHERE id = ?";
        $stmt= $this->db->prepare($sql);
        $stmt->execute([$id]);

        return "SE BORRO =(";
    }
}