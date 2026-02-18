<?php
require_once 'C:/xampp/htdocs/copa_mundo/config/database.php';

class Usuario
{
    private $conn;
    private $table = "usuarios";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function listar()
    {
        $query = "SELECT * FROM " . $this->table;
        return $this->conn->query($query);
    }
    public function insert($data)
    {
        $fields = [];
        $placeholders = [];
        $params = [];
        foreach ($data as $c => $val) {
            if ($c === 'id') continue;
            $fields[] = $c;
            $placeholders[] = ':' . $c;
            $params[':' . $c] = $val;
        }
        $sql = "INSERT INTO " . $this->table . " (" . implode(',', $fields) . ") VALUES (" . implode(',', $placeholders) . ")";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

    public function update($id, $data)
    {
        $set = [];
        $params = [];
        foreach ($data as $c => $val) {
            if ($c === 'id') continue;
            $set[] = "$c = :$c";
            $params[':' . $c] = $val;
        }
        $params[':id'] = $id;
        $sql = "UPDATE " . $this->table . " SET " . implode(',', $set) . " WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($params);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM " . $this->table . " WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
